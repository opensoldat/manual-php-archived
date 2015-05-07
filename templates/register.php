<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= $images_prefix; ?>favicon.ico">
	<title><?= text('main_title', text('index_register')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>register.css">
</head>
<body>
	<p><?= img('registertitle.gif'); ?></p>
	<p class="intro"><?= text('reg_intro_0', '<a href="#register">%</a>'); ?></p>
	<p class="intro"><?= text('reg_intro_1'); ?></p>
	<hr>
	<h1><?= text('reg_benefits'); ?></h1>
	<p class="intro"><?= text('reg_benefits_body'); ?></p>
	<h2><?= text('reg_profiles'); ?></h2>
	<p><?= img('reg-profiles.jpg'); ?></p>
	<p><?= text('reg_profiles_body'); ?></p>
</body>
</html>
