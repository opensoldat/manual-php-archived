<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= $images_prefix; ?>favicon.ico">
	<title><?= text('main_title', text('index_guides')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>index.css">
</head>
<body>
	<?= img('indextitle.gif') . PHP_EOL; ?>
	<h1><?= text('index_guides'); ?>:</h1>
	<ul>
<?php $guides = get_guides(); ?>
<?php foreach ($guides as $name => $link) { ?>
		<li><a href="<?= $link; ?>"><?= $name; ?></a></li>
<?php } ?>
	</ul>
</body>
</html>
