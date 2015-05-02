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

	echo render('manual', array(
		'register_link' => 'http://soldat.pl/en/page/register',
		'style_prefix' => ''
	));
}

function compile()
{
	$outdir = config::$compile_dir;

	print('Cleaning up...' . PHP_EOL);

	if (!del(rtrim($outdir, '/')))
		trigger_error('Failed to remove directory ' . $outdir, E_USER_ERROR);

	print('Copying files...' . PHP_EOL);

	mkdir($outdir);
	mkdir($outdir . 'images/');

	$copy_src = glob('images/*.*');
	$copy_src[] = 'style.css';
	$copy_dst = array_map(function($name) use($outdir) { return $outdir . $name; }, $copy_src);

	array_map("copy", $copy_src, $copy_dst);

	config::$images_prefix = '../images/';
	config::$images_prefix_localized = 'images/';

	$languages = array_map(function($name) { return basename($name, '.php'); }, glob('i18n/*.php'));

	$context = array(
		'register_link' => 'http://soldat.pl/en/page/register',
		'style_prefix' => '../'
	);

	foreach ($languages as $locale)
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

		file_put_contents($outdir . $locale . '/manual.html', render('manual', $context));
	}

	print('Done!' . PHP_EOL);
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
	if (file_exists('images/' . config::$locale . '/' . $path))
		return '<img src="' . config::$images_prefix_localized . $path . '">';

	return '<img src="' . config::$images_prefix . $path . '">';
}

function text($id)
{
	global $strings;

	$result = '';

	if (isset($strings[$id]))
		$result = nl2br(htmlspecialchars($strings[$id]));
	else
		return htmlspecialchars("---MISSING STRING '$id'---");

	if ($n = preg_match_all('/{.+?}/', $result, $matches, PREG_OFFSET_CAPTURE))
	{
		$args = array_slice(func_get_args(), 1);
		$nargs = count($args);
		$splitted = array(substr($result, 0, $matches[0][0][1]));

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

			// append raw string after replacement

			$offset = $matches[0][$i][1] + strlen($matches[0][$i][0]);

			if ($i < $n - 1)
				$splitted[] = substr($result, $offset, $matches[0][$i + 1][1] - $offset);
			else
				$splitted[] = substr($result, $offset);
		}

		$result = implode($splitted);
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
