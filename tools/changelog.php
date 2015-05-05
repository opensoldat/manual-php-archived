<?php

chdir(dirname(__FILE__));

$changelogs = array_reverse(explode(PHP_EOL.PHP_EOL, file_get_contents('changelogs.txt')));

$changelogs = array_map(
	function($changelog) {
		list($title, $content) = array_pad(explode(PHP_EOL, $changelog, 2), 2, '');

		if ($content !== '' && ($n = preg_match_all('/- (.+?)(?=\n-|\Z)/s', $content, $m)))
		{
			$content = array_map(
				function($str) {
					return implode(PHP_EOL, array_map('trim', explode(PHP_EOL, $str)));
				},
				$m[1]
			);
		}
		else
		{
			$content = array();
		}

		return array(
			'title' => $title,
			'content' => $content
		);
	},
	$changelogs
);

for ($i = 0; $i < count($changelogs); $i++)
{
	extract($changelogs[$i]);

	print('$strings[\'changelog_' . $i . '_title\'] = ' . var_export($title, true) . ';' . PHP_EOL);

	for ($j = 0; $j < count($content); $j++)
		print('$strings[\'changelog_' . $i . '_' . $j . '\'] = ' . var_export($content[$j], true) . ';' . PHP_EOL);
}
