<?php

require 'config.php';

main(isset($argv) ? $argv : array());

function main($args)
{
	if (count($args) >= 2 && $args[1] === 'compile')
	{
		compile();
		return;
	}

	config::$locale = get_locale();
	load_strings(config::$locale);

	$context = array(
		'style_prefix' => 'css/',
		'links' => config::$links,
		'locale_list' => get_locale_list()
	);

	$view = 'language';

	if (isset($_GET['view']) && in_array($_GET['view'], config::$views))
		$view = $_GET['view'];

	echo render($view, $context);
}

function compile()
{
	config::$compiling = true;
	$outdir = config::$compile_dir;

	print('Cleaning up...' . PHP_EOL);

	if (!del(rtrim($outdir, '/')))
		trigger_error('Failed to remove directory ' . $outdir, E_USER_ERROR);

	print('Copying files...' . PHP_EOL);

	mkdir($outdir);
	mkdir($outdir . 'images/');
	mkdir($outdir . 'css/');

	$copy_src = array_merge(glob('images/*.*'), glob('css/*.*'));
	$copy_dst = array_map(function($name) use($outdir) { return $outdir . $name; }, $copy_src);

	array_map("copy", $copy_src, $copy_dst);

	$locale_list = get_locale_list();

	$context = array(
		'style_prefix' => '../css/',
		'links' => config::$links,
		'locale_list' => $locale_list
	);

	foreach ($locale_list as $locale)
	{
		print('Compiling ' . $locale . '...' . PHP_EOL);

		mkdir($outdir . $locale);

		config::$locale = $locale;
		load_strings($locale);

		$images = glob('images/' . $locale . '/*.*');

		if (count($images) > 0)
		{
			mkdir($outdir . $locale . '/images');

			$dst = array_map(function($name) use($outdir, $locale) {
				return $outdir . $locale . '/images/' . basename($name);
			}, $images);

			array_map("copy", $images, $dst);
		}

		file_put_contents($outdir . 'index.html', render('language', $context));

		foreach (config::$views as $view)
			file_put_contents($outdir . $locale . '/' . $view . '.html', render($view, $context));
	}

	print('Done!' . PHP_EOL);
}

function get_locale_list()
{
	$list = array_map(function($name) { return basename($name, '.php'); }, glob('i18n/*.php'));
	$order = config::$locale_names;

	// return the list in the same order as the locale_names array

	usort($list, function($a, $b) use($order) {
		return (int)array_search($a, $order, true) - (int)array_search($b, $order, true);
	});

	return $list;
}

function get_locale()
{
	if (isset($_GET['locale']))
	{
		$locale = $_GET['locale'];

		if (preg_match('/[a-z]{2}_[A-Z]{2}/', $locale) && file_exists('i18n/' . $locale . '.php'))
			return $_GET['locale'];
	}

	return 'en_US';
}

function get_locale_name($locale)
{
	return isset(config::$locale_names[$locale]) ? config::$locale_names[$locale] : $locale;
}

// used for internal links. makes it work as php site or static compiled site
function get_link($view, $locale = null, $from_root = false)
{
	if ($locale === null)
		$locale = config::$locale;

	if (config::$compiling)
		return ($from_root ? $locale . '/' : '') . $view . '.html';
	else
		return '?view=' . $view . '&amp;lang=' . $locale;
}

function load_strings($locale)
{
	global $strings;
	$strings = array();
	include('i18n/' . config::$locale . '.php');
}

function render($file, $context = array())
{
	ob_start();

	extract($context);
	include('templates/' . $file . '.php');

	$result = ob_get_contents();
	ob_end_clean();

	return $result;
}

function img($path)
{
	$localized = file_exists('images/' . config::$locale . '/' . $path);

	if (config::$compiling)
	{
		return $localized ?
			'<img src="images/' . $path . '">' :
			'<img src="../images/' . $path . '">';
	}
	else
	{
		return $localized ?
			'<img src="images/' . config::$locale . '/' . $path . '">' :
			'<img src="images/' . $path . '">';
	}
}

function text($id)
{
	global $strings;

	$result = '';

	if (isset($strings[$id]))
		$result = str_replace("\n", '<br>', htmlspecialchars($strings[$id]));
	else
		return htmlspecialchars("---MISSING STRING '$id'---");

	if ($n = preg_match_all('/{.+?}/', $result, $matches, PREG_OFFSET_CAPTURE))
	{
		$args = array_slice(func_get_args(), 1);
		$nargs = count($args);
		$splitted = array(substr($result, 0, $matches[0][0][1]));

		$missing = array();

		for ($i = 0; $i < $n; $i++)
		{
			$text = substr($matches[0][$i][0], 1, -1);
			$parts = explode(':', $text, 2);
			$index = 0;
			$value = null;

			if (count($parts) === 1)
			{
				if (ctype_digit($text))
					$index = (int)$text - 1;
				else
					$value = $text;
			}
			else if (ctype_digit($parts[0]))
			{
				$index = (int)$parts[0] - 1;
				$value = $parts[1];
			}
			else
			{
				$value = $text;
			}

			// append replacement

			if ($index >= 0 && $index < $nargs)
			{
				if ($value !== null)
					$splitted[] = str_replace('%', $value, $args[$index]);
				else
					$splitted[] = $args[$index];
			}
			else
			{
				$missing[$index] = true;

				if ($value !== null)
					$splitted[] = '{' . $text . '}';
			}

			// append raw string after replacement

			$offset = $matches[0][$i][1] + strlen($matches[0][$i][0]);

			if ($i < $n - 1)
				$splitted[] = substr($result, $offset, $matches[0][$i + 1][1] - $offset);
			else
				$splitted[] = substr($result, $offset);
		}

		$result = implode($splitted);

		if (count($missing) > 0)
		{
			$caller = array_shift(debug_backtrace());
			$missing = count($missing);

			trigger_error('Missing ' . $missing . ' replacement argument(s) for string ' . $id . ' in ' .
				$caller['file'] . ' on line ' . $caller['line'], E_USER_WARNING);
		}
	}

	return $result;
}

function del($name)
{
	if (!file_exists($name))
		return true;

	if (!is_dir($name) || is_link($name))
		return unlink($name);

	foreach (scandir($name) as $item)
	{
		if ($item == '.' || $item == '..')
			continue;

		if (!del($name . '/' . $item))
		{
			chmod($name . '/' . $item, 0777);

			if (!del($name . '/' . $item))
				return false;
		}
	}

	return rmdir($name);
}

function get_changelogs()
{
	global $strings;

	$keys = array_filter(array_keys($strings), function($key) {
		return strrpos($key, 'changelog_', -strlen($key)) !== false;
	});

	usort($keys, function($a, $b) {
		$a = explode('_', $a);
		$b = explode('_', $b);

		if ($a[2] === 'title') $a[2] = -1;
		if ($b[2] === 'title') $b[2] = -1;

		$a0 = (int)$a[1];
		$b0 = (int)$b[1];
		$a1 = (int)$a[2];
		$b1 = (int)$b[2];

		return $a0 === $b0 ? $a1 - $b1 : $a0 - $b0;
	});

	$result = array();

	foreach ($keys as $k)
	{
		$parts = explode('_', $k);
		$index = (int)$parts[1];

		if (!isset($result[$index]))
			$result[$index] = array('title' => $k, 'content' => array());
		else
			$result[$index]['content'][] = $k;
	}

	return array_reverse($result);
}
