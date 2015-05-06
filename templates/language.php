<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>Soldat - Manual</title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>language.css">
</head>
<body>
	<img src="images/indextitle.gif">
	<h1>Choose Language:</h1>
	<ul>
<?php foreach ($locale_list as $locale) { ?>
		<li><a href="<?= get_link('manual', $locale, true); ?>"><?= get_locale_name($locale); ?></a></li>
<?php } ?>
	</ul>
</body>
</html>
