<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= $images_prefix; ?>favicon.ico">
	<title><?= text('main_title', text('manual_title')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>index.css">
</head>
<body>
	<?= img('indextitle.gif') . PHP_EOL; ?>
	<h1><?= text('index_title'); ?></h1>
	<ul>
		<li><a href="<?= get_link('manual'); ?>"><?= text('index_manual'); ?></a></li>
		<li><a href="<?= get_link('register'); ?>"><?= text('index_register'); ?></a></li>
		<li><a href="<?= get_link('guides'); ?>"><?= text('index_guides'); ?></a></li>
	</ul>
</body>
</html>
