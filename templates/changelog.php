<!doctype html>
<html id="top">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= $images_prefix; ?>favicon.ico">
	<title><?= text('main_title', text('version_title')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>manual.css">
</head>
<body class="changelog">
	<div class="header">
		<h1><?= text('header_title'); ?></h1>
		<?= img('title.gif') . PHP_EOL; ?>
	</div>
<?php $changelogs = get_changelogs(); ?>
	<h3><?= text('version_title'); ?></h3>
	<h4><?= text('index_title'); ?></h4>
	<ul class="flat">
<?php foreach ($changelogs as $i => $changelog) { ?>
		<li><a href="#changelog_<?= $i; ?>"><?= text($changelog['title']); ?></a></li>
<?php } ?>
	</ul>
	<br>
	<h4><?= text('version_current'); ?></h4>
<?php $first = array_shift($changelogs); ?>
	<strong id="changelog_0"><?= text($first['title']); ?></strong>
	<ul>
<?php foreach ($first['content'] as $item) { ?>
		<li><?= text($item); ?></li>
<?php } ?>
	</ul>
	<br>
	<h4><?= text('version_previous'); ?></h4>
<?php foreach ($changelogs as $i => $changelog) { ?>
	<strong id="changelog_<?= ($i + 1); ?>"><?= text($changelog['title']); ?></strong>
<?php if (count($changelog['content'])) { ?>
	<ul>
<?php foreach ($changelog['content'] as $item) { ?>
		<li><?= text($item); ?></li>
<?php } ?>
	</ul>
<?php } ?>
<?php } ?>
	<hr>
	<p><a href="#top"><?= text('index_link'); ?></a></p>
</body>
</html>
