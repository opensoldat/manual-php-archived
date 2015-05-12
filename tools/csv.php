<?php

chdir(dirname(__FILE__));
chdir('..');

include('i18n/en_US.php');

$data = array_map(
	function($k) use($strings) { return array($k, $strings[$k]); },
	array_keys($strings)
);

$stdout = fopen('php://output', 'w');
array_walk($data, function($item) use($stdout) { fputcsv($stdout, $item); });
fclose($stdout);
