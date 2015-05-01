<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title><?= _t('manual_title'); ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1><?= _t('header_title'); ?></h1>
		<?= _img('title.gif') . PHP_EOL; ?>
		<h2><?= _t('header_subtitle'); ?></h2>
		<?= _t('index_title') . PHP_EOL; ?>
		<ul>
			<li><a href="#intro"><?= _t('intro_title'); ?></a></li>
			<li><a href="#req"><?= _t('req_title'); ?></a></li>
			<li><a href="#story"><?= _t('story_title'); ?></a></li>
			<li><a href="#start"><?= _t('start_title'); ?></a></li>
			<li><a href="#controls"><?= _t('controls_title'); ?></a></li>
			<li><a href="#modes"><?= _t('modes_title'); ?></a></li>
			<li><a href="#options"><?= _t('options_title'); ?></a></li>
			<li><a href="#screen"><?= _t('screen_title'); ?></a></li>
			<li><a href="#weapons"><?= _t('weapons_title'); ?></a></li>
			<li><a href="#bonuses"><?= _t('bonuses_title'); ?></a></li>
			<li><a href="#commands"><?= _t('commands_title'); ?></a></li>
			<li><a href="#chat"><?= _t('chat_title'); ?></a></li>
			<li><a href="#server"><?= _t('server_title'); ?></a></li>
			<li><a href="#anticheat"><?= _t('anticheat_title'); ?></a></li>
			<li><a href="#version"><?= _t('version_title'); ?></a></li>
			<li><a href="#license"><?= _t('license_title'); ?></a></li>
			<li><a href="#credits"><?= _t('credits_title'); ?></a></li>
			<li><a href="#contact"><?= _t('contact_title'); ?></a></li>
		</ul>
		<?= _t('index_reg_info', '<a href="' . $links['register'] . '">%</a>') . PHP_EOL; ?>
		<hr>
	</div>
	<h3 id="intro"><?= _t('intro_title'); ?></h3>
	<p><?= _t('intro_body'); ?></p>
	<hr>
	<h3 id="req"><?= _t('req_title'); ?></h3>
	<h4><?= _t('req_min_title'); ?></h4>
	<ul>
		<li><?= _t('req_min_0'); ?></li>
		<li><?= _t('req_min_1'); ?></li>
		<li><?= _t('req_min_2'); ?></li>
		<li><?= _t('req_min_3'); ?></li>
		<li><?= _t('req_min_4'); ?></li>
		<li><?= _t('req_min_5'); ?></li>
		<li><?= _t('req_min_6'); ?></li>
		<li><?= _t('req_min_7'); ?></li>
		<li><?= _t('req_min_8'); ?></li>
		<li><?= _t('req_min_9'); ?></li>
	</ul>
	<hr>
	<h3 id="story"><?= _t('story_title'); ?></h3>
	<p><?= _t('story_body'); ?></p>
	<hr>
	<h3 id="start"><?= _t('start_title'); ?></h3>
	<h4><?= _t('start_sp_title'); ?></h4>
	<?= _t('start_sp_body_0') . PHP_EOL; ?>
	<ul>
		<li><?= _t('start_sp_body_1', '<em>%</em>'); ?></li>
		<li><?= _t('start_sp_body_2', '<em>%</em>'); ?></li>
		<li><?= _t('start_sp_body_3', '<em>%</em>'); ?></li>
	</ul>
	<h4><?= _t('start_mp_title'); ?></h4>
	<?= _t('start_mp_body') . PHP_EOL; ?>
	<ol class="start">
		<li>
			<?= _t('start_mp_body_a') . PHP_EOL; ?>
			<p><?= _t('start_mp_body_a_desc', '<em>%</em>'); ?></p>
		</li>
		<li>
			<?= _t('start_mp_body_b') . PHP_EOL; ?>
			<p><?= _t('start_mp_body_b_desc', '<em>%</em>'); ?></p>
		</li>
	</ol>
	<hr>
	<h3 id="controls"><?= _t('controls_title'); ?></h3>
	<hr>
	<h3 id="modes"><?= _t('modes_title'); ?></h3>
	<hr>
	<h3 id="options"><?= _t('options_title'); ?></h3>
	<hr>
	<h3 id="screen"><?= _t('screen_title'); ?></h3>
	<hr>
	<h3 id="weapons"><?= _t('weapons_title'); ?></h3>
	<hr>
	<h3 id="bonuses"><?= _t('bonuses_title'); ?></h3>
	<hr>
	<h3 id="commands"><?= _t('commands_title'); ?></h3>
	<hr>
	<h3 id="chat"><?= _t('chat_title'); ?></h3>
	<hr>
	<h3 id="server"><?= _t('server_title'); ?></h3>
	<hr>
	<h3 id="anticheat"><?= _t('anticheat_title'); ?></h3>
	<hr>
	<h3 id="version"><?= _t('version_title'); ?></h3>
	<hr>
	<h3 id="license"><?= _t('license_title'); ?></h3>
	<hr>
	<h3 id="credits"><?= _t('credits_title'); ?></h3>
	<hr>
	<h3 id="contact"><?= _t('contact_title'); ?></h3>
	<hr>
</body>
</html>
