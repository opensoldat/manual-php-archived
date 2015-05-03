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
	</ul>
	<hr>
	<h3 id="options"><?= text('options_title'); ?></h3>
	<h4><?= text('options_opt', '<em>%</em>'); ?></h4>
	<p><?= img('options.png') . PHP_EOL; ?></p>
	<ul class="options">
		<li>
			<strong><?= text('options_opt_game'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_opt_game_respawn'); ?></strong>
					<ul class="flat">
						<li>
							<strong><?= text('options_opt_game_respawn_normal'); ?></strong>
							<?= text('options_opt_game_respawn_normal_desc', '<em>%</em>') . PHP_EOL; ?>
						</li>
						<li>
							<strong><?= text('options_opt_game_respawn_max'); ?></strong>
							<?= text('options_opt_game_respawn_max_desc', '<em>%</em>') . PHP_EOL; ?>
						</li>
					</ul>
				</li>
				<li>
					<strong><?= text('options_opt_game_bonuses'); ?></strong>
					<?= text('options_opt_game_bonuses_desc') . PHP_EOL; ?>
					<ul class="flat">
						<li>
							<strong><?= text('options_opt_game_bonuses_freq'); ?></strong>
							<?= text('options_opt_game_bonuses_freq_desc') . PHP_EOL; ?>
						</li>
					</ul>
				</li>
				<li>
					<strong><?= text('options_opt_game_weapons'); ?></strong>
					<?= text('options_opt_game_weapons_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_game_grenades'); ?></strong>
					<?= text('options_opt_game_grenades_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_game_friendlyfire'); ?></strong>
					<?= text('options_opt_game_friendlyfire_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_game_bullettime'); ?></strong>
					<?= text('options_opt_game_bullettime_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_game_sensitivity'); ?></strong>
					<?= text('options_opt_game_sensitivity_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_opt_net'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_opt_net_connection'); ?></strong>
					<?= text('options_opt_net_connection_desc', '<em>%</em>') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_net_maxplayers'); ?></strong>
					<?= text('options_opt_net_maxplayers_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_net_register'); ?></strong>
					<?= text('options_opt_net_register_desc', '<em>%</em>') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_net_name'); ?></strong>
					<?= text('options_opt_net_name_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_net_pass'); ?></strong>
					<?= text('options_opt_net_pass_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_net_balance'); ?></strong>
					<?= text('options_opt_net_balance_desc', '<em>%</em>') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_opt_visuals'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_opt_visuals_interface'); ?></strong>
					<?= text('options_opt_visuals_interface_desc', '<em>%</em>') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_visuals_playerindicator'); ?></strong>
					<?= text('options_opt_visuals_playerindicator_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_visuals_sniperline'); ?></strong>
					<?= text('options_opt_visuals_sniperline_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_opt_bots'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_opt_bots_difficulty'); ?></strong>
					<?= text('options_opt_bots_difficulty_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_bots_chat'); ?></strong>
					<?= text('options_opt_bots_chat_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_opt_sound'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_opt_sound_vol'); ?></strong>
					<?= text('options_opt_sound_vol_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_sound_musicvol'); ?></strong>
					<?= text('options_opt_sound_musicvol_desc', '<em>%</em>') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_sound_explosion'); ?></strong>
					<?= text('options_opt_sound_explosion_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_sound_distant'); ?></strong>
					<?= text('options_opt_sound_distant_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_opt_sound_music'); ?></strong>
					<?= text('options_opt_sound_music_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
	</ul>
	<br>
	<h4><?= text('options_start'); ?></h4>
	<ul>
		<li>
			<strong><?= text('options_start_kills'); ?></strong>
			<?= text('options_start_kills_desc', '<em>%</em>') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('options_start_capture'); ?></strong>
			<?= text('options_start_capture_desc', '<em>%</em>') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('options_start_time'); ?></strong>
			<?= text('options_start_time_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('options_start_survival'); ?></strong>
			<?= text('options_start_survival_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('options_start_realistic'); ?></strong>
			<?= text('options_start_realistic_desc') . PHP_EOL; ?>
			<ul>
				<li><?= text('options_start_realistic_desc_0'); ?></li>
				<li><?= text('options_start_realistic_desc_1'); ?></li>
				<li><?= text('options_start_realistic_desc_2'); ?></li>
				<li><?= text('options_start_realistic_desc_3'); ?></li>
				<li><?= text('options_start_realistic_desc_4'); ?></li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_start_loop'); ?></strong>
			<?= text('options_start_loop_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('options_start_bots'); ?></strong>
			<?= text('options_start_bots_desc') . PHP_EOL; ?>
		</li>
	</ul>
	<br>
	<h4><?= text('options_setup'); ?></h4>
	<ul class="options">
		<li>
			<strong><?= text('options_setup_gfx'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_setup_gfx_fullscreen'); ?></strong>
					<?= text('options_setup_gfx_fullscreen_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_gfx_dithering'); ?></strong>
					<?= text('options_setup_gfx_dithering_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_gfx_antialiasing'); ?></strong>
					<?= text('options_setup_gfx_antialiasing_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_gfx_bitrate'); ?></strong>
					<?= text('options_setup_gfx_bitrate_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_gfx_refresh'); ?></strong>
					<?= text('options_setup_gfx_refresh_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_gfx_adapter'); ?></strong>
					<?= text('options_setup_gfx_adapter_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_setup_sound'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_setup_sound_quality'); ?></strong>
					<?= text('options_setup_sound_quality_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_sound_device'); ?></strong>
					<?= text('options_setup_sound_device_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_sound_driver'); ?></strong>
					<?= text('options_setup_sound_driver_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_setup_perf'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_setup_perf_particles'); ?></strong>
					<?= text('options_setup_perf_particles_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_botquality'); ?></strong>
					<?= text('options_setup_perf_botquality_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_trails'); ?></strong>
					<?= text('options_setup_perf_trails_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_weather'); ?></strong>
					<?= text('options_setup_perf_weather_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_smooth'); ?></strong>
					<?= text('options_setup_perf_smooth_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_death'); ?></strong>
					<?= text('options_setup_perf_death_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_logging'); ?></strong>
					<?= text('options_setup_perf_logging_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_perf_autorecord'); ?></strong>
					<?= text('options_setup_perf_autorecord_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_setup_net'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_setup_net_port'); ?></strong>
					<?= text('options_setup_net_port_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_net_speed'); ?></strong>
					<?= text('options_setup_net_speed_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_net_ping'); ?></strong>
					<?= text('options_setup_net_ping_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_net_msg'); ?></strong>
					<?= text('options_setup_net_msg_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_net_forward'); ?></strong>
					<?= text('options_setup_net_forward_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_net_ase'); ?></strong>
					<?= text('options_setup_net_ase_desc', '<a href="%">%</a>') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_net_link'); ?></strong>
					<?= text('options_setup_net_link_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
		<li>
			<strong><?= text('options_setup_more'); ?></strong>
			<ul>
				<li>
					<strong><?= text('options_setup_more_compat'); ?></strong>
					<?= text('options_setup_more_compat_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_more_software'); ?></strong>
					<?= text('options_setup_more_software_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_more_blankfix'); ?></strong>
					<?= text('options_setup_more_blankfix_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_more_filter'); ?></strong>
					<?= text('options_setup_more_filter_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_more_backbuffer'); ?></strong>
					<?= text('options_setup_more_backbuffer_desc') . PHP_EOL; ?>
				</li>
				<li>
					<strong><?= text('options_setup_more_lang'); ?></strong>
					<?= text('options_setup_more_lang_desc') . PHP_EOL; ?>
				</li>
			</ul>
		</li>
	</ul>
	<br>
	<p><em><?= text('options_footnote'); ?></em></p>
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
