<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title><?= text('manual_title'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>style.css">
</head>
<body>
	<div class="header">
		<h1><?= text('header_title'); ?></h1>
		<?= img('title.gif') . PHP_EOL; ?>
		<h2><?= text('header_subtitle'); ?></h2>
		<?= text('index_title') . PHP_EOL; ?>
		<ul>
			<li><a href="#intro"><?=     text('intro_title');     ?></a></li>
			<li><a href="#req"><?=       text('req_title');       ?></a></li>
			<li><a href="#story"><?=     text('story_title');     ?></a></li>
			<li><a href="#start"><?=     text('start_title');     ?></a></li>
			<li><a href="#controls"><?=  text('controls_title');  ?></a></li>
			<li><a href="#modes"><?=     text('modes_title');     ?></a></li>
			<li><a href="#options"><?=   text('options_title');   ?></a></li>
			<li><a href="#screen"><?=    text('screen_title');    ?></a></li>
			<li><a href="#weapons"><?=   text('weapons_title');   ?></a></li>
			<li><a href="#bonuses"><?=   text('bonuses_title');   ?></a></li>
			<li><a href="#commands"><?=  text('commands_title');  ?></a></li>
			<li><a href="#chat"><?=      text('chat_title');      ?></a></li>
			<li><a href="#server"><?=    text('server_title');    ?></a></li>
			<li><a href="#anticheat"><?= text('anticheat_title'); ?></a></li>
			<li><a href="#version"><?=   text('version_title');   ?></a></li>
			<li><a href="#license"><?=   text('license_title');   ?></a></li>
			<li><a href="#credits"><?=   text('credits_title');   ?></a></li>
			<li><a href="#contact"><?=   text('contact_title');   ?></a></li>
		</ul>
		<?= text('index_reg_info', '<a href="' . $register_link . '">%</a>') . PHP_EOL; ?>
		<hr>
	</div>
	<h3 id="intro"><?= text('intro_title'); ?></h3>
	<p class="indent"><?= text('intro_body'); ?></p>
	<hr>
	<h3 id="req"><?= text('req_title'); ?></h3>
	<h4><?= text('req_min_title'); ?></h4>
	<ul>
		<li><?= text('req_min_0'); ?></li>
		<li><?= text('req_min_1'); ?></li>
		<li><?= text('req_min_2'); ?></li>
		<li><?= text('req_min_3'); ?></li>
		<li><?= text('req_min_4'); ?></li>
		<li><?= text('req_min_5'); ?></li>
		<li><?= text('req_min_6'); ?></li>
		<li><?= text('req_min_7'); ?></li>
		<li><?= text('req_min_8'); ?></li>
		<li><?= text('req_min_9'); ?></li>
	</ul>
	<hr>
	<h3 id="story"><?= text('story_title'); ?></h3>
	<p class="indent"><?= text('story_body'); ?></p>
	<hr>
	<h3 id="start"><?= text('start_title'); ?></h3>
	<h4><?= text('start_sp_title'); ?></h4>
	<?= text('start_sp_body_0') . PHP_EOL; ?>
	<ul>
		<li><?= text('start_sp_body_1', '<em>%</em>'); ?></li>
		<li><?= text('start_sp_body_2', '<em>%</em>'); ?></li>
		<li><?= text('start_sp_body_3', '<em>%</em>'); ?></li>
	</ul>
	<h4><?= text('start_mp_title'); ?></h4>
	<?= text('start_mp_body') . PHP_EOL; ?>
	<ol class="start">
		<li>
			<?= text('start_mp_body_a') . PHP_EOL; ?>
			<p><?= text('start_mp_body_a_desc', '<em>%</em>'); ?></p>
		</li>
		<li>
			<?= text('start_mp_body_b') . PHP_EOL; ?>
			<p><?= text('start_mp_body_b_desc', '<em>%</em>'); ?></p>
		</li>
	</ol>
	<hr>
	<h3 id="controls"><?= text('controls_title'); ?></h3>
	<p><?= img('keys.png'); ?></p>
	<ul class="flat">
		<li><?= text('controls_left',        '<span class="ctrl_wasd">%</span>');  ?></li>
		<li><?= text('controls_right',       '<span class="ctrl_wasd">%</span>');  ?></li>
		<li><?= text('controls_jump',        '<span class="ctrl_wasd">%</span>');  ?></li>
		<li><?= text('controls_crouch',      '<span class="ctrl_wasd">%</span>');  ?></li>
		<li><?= text('controls_fire',        '<span class="ctrl_mouse">%</span>'); ?></li>
		<li><?= text('controls_fly',         '<span class="ctrl_mouse">%</span>'); ?></li>
		<li><?= text('controls_grenade',     '<span class="ctrl_e">%</span>');     ?></li>
		<li><?= text('controls_throw',       '<span class="ctrl_f">%</span>');     ?></li>
		<li><?= text('controls_prone',       '<span class="ctrl_x">%</span>');     ?></li>
		<li><?= text('controls_weapon',      '<span class="ctrl_q">%</span>');     ?></li>
		<li><?= text('controls_reload',      '<span class="ctrl_r">%</span>');     ?></li>
		<li><?= text('controls_chat',        '<span class="ctrl_t">%</span>');     ?></li>
		<li><?= text('controls_weapon_menu', '<span class="ctrl_tab">%</span>');   ?></li>
	</ul>
	<p><?= text('controls_note', '<em>%</em>'); ?></p>
	<?= text('controls_tricks') . PHP_EOL; ?>
	<ul class="flat">
		<li><?= text('controls_tricks_0'); ?></li>
		<li><?= text('controls_tricks_1'); ?></li>
	</ul>
	<br>
	<ul class="flat">
		<li><?= text('controls_cmd', '<span class="ctrl_cmd">%</span>');   ?></li>
		<li><?= text('controls_f1',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f2',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f3',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f4',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f5',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f6',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f7',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f8',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f9',  '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_f10', '<span class="ctrl_fkeys">%</span>'); ?></li>
		<li><?= text('controls_alt', '<span class="ctrl_alt">%</span>');   ?></li>
		<li><?= text('controls_esc', '<span class="ctrl_esc">%</span>');   ?></li>
	</ul>
	<hr>
	<h3 id="modes"><?= text('modes_title'); ?></h3>
	<ul class="flat modes">
		<li>
			<?= img('deathmatch.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_dm'); ?></h4>
			<p>
				<?= text('modes_dm_desc'); ?><br>
				<?= text('modes_respawn', '<em>%</em>', text('modes_respawn_dm')) . PHP_EOL; ?>
			</p>
		</li>
		<li>
			<?= img('pointmatch.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_pm'); ?></h4>
			<p>
				<?= text('modes_pm_desc', '<em>%</em>'); ?><br>
				<?= text('modes_respawn', '<em>%</em>', text('modes_respawn_pm')) . PHP_EOL; ?>
			</p>
		</li>
		<li>
			<?= img('rambomatch.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_rm'); ?></h4>
			<p>
				<?= text('modes_rm_desc'); ?><br>
				<?= text('modes_respawn', '<em>%</em>', text('modes_respawn_rm')) . PHP_EOL; ?>
			</p>
		</li>
		<li>
			<?= img('teammatch.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_tm'); ?></h4>
			<p><?= text('modes_tm_desc'); ?></p>
		</li>
		<li>
			<?= img('ctf.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_ctf'); ?></h4>
			<p><?= text('modes_ctf_desc'); ?></p>
		</li>
		<li>
			<?= img('infiltration.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_inf'); ?></h4>
			<p><?= text('modes_inf_desc'); ?></p>
		</li>
		<li>
			<?= img('htf.jpg') . PHP_EOL; ?>
			<h4><?= text('modes_htf'); ?></h4>
			<p><?= text('modes_htf_desc'); ?></p>
		</li>
	</ol>
	<hr>
	<h3 id="options"><?= text('options_title'); ?></h3>
	<hr>
	<h3 id="screen"><?= text('screen_title'); ?></h3>
	<hr>
	<h3 id="weapons"><?= text('weapons_title'); ?></h3>
	<hr>
	<h3 id="bonuses"><?= text('bonuses_title'); ?></h3>
	<hr>
	<h3 id="commands"><?= text('commands_title'); ?></h3>
	<hr>
	<h3 id="chat"><?= text('chat_title'); ?></h3>
	<hr>
	<h3 id="server"><?= text('server_title'); ?></h3>
	<hr>
	<h3 id="anticheat"><?= text('anticheat_title'); ?></h3>
	<hr>
	<h3 id="version"><?= text('version_title'); ?></h3>
	<hr>
	<h3 id="license"><?= text('license_title'); ?></h3>
	<hr>
	<h3 id="credits"><?= text('credits_title'); ?></h3>
	<hr>
	<h3 id="contact"><?= text('contact_title'); ?></h3>
	<hr>
</body>
</html>
