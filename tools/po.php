<?php

chdir(dirname(__FILE__));
chdir('..');

include('i18n/en_US.php');

print('msgid ""' . PHP_EOL);
print('msgstr ""' . PHP_EOL);

foreach ($strings as $k => $v)
{
	$v = array_map(
		function($str) {
			return addslashes($str);
		},
		explode(PHP_EOL, $v)
	);

	print(PHP_EOL);
	print('msgid "' . $k . '"' . PHP_EOL);

	if (count($v) > 1)
		print('msgstr ""' . PHP_EOL . '"' . implode('\n"' . PHP_EOL . '"', $v) . '"' . PHP_EOL);
	else
		print('msgstr "' . $v[0] . '"' . PHP_EOL);
}
