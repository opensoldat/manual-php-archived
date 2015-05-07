<?php

/**
 * Note: this template ends up in the root directory as index.html, so paths to images/css are
 * handled differently compared to other templates. It's also language independent because the
 * user hasn't chosen a language at this point, so text()/img() functions shouldn't be used here.
 */

?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>Soldat - Manual</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<img src="images/indextitle.gif">
	<h1>Choose Language:</h1>
	<ul>
<?php foreach ($locale_list as $locale) { ?>
		<li><a href="<?= get_link('index', $locale, true); ?>"><?= get_locale_name($locale); ?></a></li>
<?php } ?>
	</ul>
</body>
</html>
