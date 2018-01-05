<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= $images_prefix; ?>favicon.ico">
	<title><?= text('main_title', text('manual_title')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>manual.css">
</head>
<body id="top">
	<div class="header">
		<h1><?= text('header_title', $version); ?></h1>
		<?= img('title.gif') . PHP_EOL; ?>
		<h2><?= text('header_subtitle', $version); ?></h2>
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
		<?= text('index_reg_info', '<a href="' . get_link('register') . '">%</a>') . PHP_EOL; ?>
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
	<p><?= img('options.png'); ?></p>
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
					<?= text('options_setup_net_ase_desc',
						'<a href="' . $links['ase'] . '">%</a>') . PHP_EOL; ?>
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
	<h4><?= text('screen_hud'); ?></h4>
	<p><?= img('paski.png'); ?></p>
	<p><?= text('screen_bars'); ?></p>
	<ul>
		<li><?= text('screen_bars_health',   '<strong>%</strong>'); ?></li>
		<li><?= text('screen_bars_ammo',     '<strong>%</strong>'); ?></li>
		<li><?= text('screen_bars_interval', '<strong>%</strong>'); ?></li>
		<li><?= text('screen_bars_jet',      '<strong>%</strong>'); ?></li>
	</ul>
	<p><?= text('screen_status', '<strong>%</strong>', '<em>%</em>'); ?></p>
	<ul>
		<li><?= text('screen_status_place', '<strong>%</strong>'); ?></li>
		<li><?= text('screen_status_kills', '<strong>%</strong>'); ?></li>
		<li><?= text('screen_status_limit', '<strong>%</strong>'); ?></li>
	</ul>
	<p><?= text('screen_lag'); ?></p>
	<p><?= img('teamscore.png'); ?></p>
	<p><?= text('screen_teamscore', '<em>%</em>'); ?></p>
	<p><?= img('flags.png'); ?></p>
	<p><?= text('screen_flags', '<em>%</em>'); ?></p>
	<hr>
	<h3 id="weapons"><?= text('weapons_title'); ?></h3>
	<p class="indent"><?= text('weapons_intro'); ?></p>
	<p><?= img('guns.png'); ?></p>
	<p><?= text('weapons_selectable'); ?></p>
	<ol class="weapons">
		<li>
			<?= text('weapons_eagles') . PHP_EOL; ?>
			<p><?= text('weapons_eagles_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_mp5') . PHP_EOL; ?>
			<p><?= text('weapons_mp5_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_ak74') . PHP_EOL; ?>
			<p><?= text('weapons_ak74_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_steyr') . PHP_EOL; ?>
			<p><?= text('weapons_steyr_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_spas') . PHP_EOL; ?>
			<p><?= text('weapons_spas_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_ruger') . PHP_EOL; ?>
			<p><?= text('weapons_ruger_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_m79') . PHP_EOL; ?>
			<p><?= text('weapons_m79_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_barret') . PHP_EOL; ?>
			<p><?= text('weapons_barret_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_minimi') . PHP_EOL; ?>
			<p><?= text('weapons_minimi_desc'); ?></p>
		</li>
		<li>
			<?= text('weapons_minigun') . PHP_EOL; ?>
			<p><?= text('weapons_minigun_desc'); ?></p>
		</li>
	</ol>
	<br>
	<p><?= text('weapons_standard'); ?></p>
	<ul class="weapons">
		<li>
			<strong><?= text('weapons_ussocom'); ?></strong><br>
			<?= text('weapons_ussocom_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('weapons_knife'); ?></strong><br>
			<?= text('weapons_knife_desc', '<em>%</em>') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('weapons_chainsaw'); ?></strong><br>
			<?= text('weapons_chainsaw_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('weapons_law'); ?></strong><br>
			<?= text('weapons_law_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('weapons_fists'); ?></strong><br>
			<?= text('weapons_fists_desc') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('weapons_grenades'); ?></strong><br>
			<?= text('weapons_grenades_desc') . PHP_EOL; ?>
		</li>
	</ul>
	<br>
	<p><?= text('weapons_special'); ?></p>
	<ul class="weapons">
		<li>
			<strong><?= text('weapons_bow'); ?></strong><br>
			<?= text('weapons_bow_desc', '<em>%</em>') . PHP_EOL; ?>
		</li>
		<li>
			<strong><?= text('weapons_flamethrower'); ?></strong><br>
			<?= text('weapons_flamethrower_desc', '<em>%</em>') . PHP_EOL; ?>
		</li>
	</ul>
	<br>
	<p><?= text('weapons_footnote', '<em>%</em>'); ?></p>
	<hr>
	<h3 id="bonuses"><?= text('bonuses_title'); ?></h3>
	<p><?= text('bonuses_intro'); ?></p>
	<ul class="flat bonuses">
		<li>
			<?= img('medikit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_medikit'); ?></strong>
			<p><?= text('bonuses_medikit_desc'); ?></p>
		</li>
		<li>
			<?= img('grenadekit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_grenades'); ?></strong>
			<p><?= text('bonuses_grenades_desc'); ?></p>
		</li>
		<li>
			<?= img('clusterkit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_cluster'); ?></strong>
			<p><?= text('bonuses_cluster_desc'); ?></p>
		</li>
		<li>
			<?= img('vestkit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_vest'); ?></strong>
			<p><?= text('bonuses_vest_desc'); ?></p>
		</li>
		<li>
			<?= img('flamerkit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_flamegod'); ?></strong>
			<p><?= text('bonuses_duration', text('bonuses_duration_flamegod')); ?></p>
			<p><?= text('bonuses_flamegod_desc'); ?></p>
		</li>
		<li>
			<?= img('berserkerkit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_berserker'); ?></strong>
			<p><?= text('bonuses_duration', text('bonuses_duration_berserker')); ?></p>
			<p><?= text('bonuses_berserker_desc'); ?></p>
		</li>
		<li>
			<?= img('predatorkit.png') . PHP_EOL; ?>
			<strong><?= text('bonuses_predator'); ?></strong>
			<p><?= text('bonuses_duration', text('bonuses_duration_predator')); ?></p>
			<p><?= text('bonuses_predator_desc'); ?></p>
		</li>
	</ul>
	<hr>
	<h3 id="commands"><?= text('commands_title'); ?></h3>
	<p><?= text('commands_intro'); ?></p>
	<h4><?= text('commands_player'); ?></h4>
	<table>
		<tr>
			<td><?= text('commands_player_kill'); ?></td>
			<td><?= text('commands_player_kill_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_player_brutalkill'); ?></td>
			<td><?= text('commands_player_brutalkill_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_player_smoke'); ?></td>
			<td><?= text('commands_player_smoke_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_player_tabac'); ?></td>
			<td><?= text('commands_player_tabac_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_player_takeoff'); ?></td>
			<td><?= text('commands_player_takeoff_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_player_victory'); ?></td>
			<td><?= text('commands_player_victory_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_player_pause'); ?></td>
			<td><?= text('commands_player_pause_desc'); ?></td>
		</tr>
	</table>
	<br>
	<h4><?= text('commands_server'); ?></h4>
	<table>
		<tr>
			<td><?= text('commands_server_addbot'); ?></td>
			<td><?= text('commands_server_addbot_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_kick'); ?></td>
			<td><?= text('commands_server_kick_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_ban'); ?></td>
			<td><?= text('commands_server_ban_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_banip'); ?></td>
			<td><?= text('commands_server_banip_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_unban'); ?></td>
			<td><?= text('commands_server_unban_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_map'); ?></td>
			<td><?= text('commands_server_map_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_restart'); ?></td>
			<td><?= text('commands_server_restart_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_nextmap'); ?></td>
			<td><?= text('commands_server_nextmap_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_adm'); ?></td>
			<td><?= text('commands_server_adm_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_admip'); ?></td>
			<td><?= text('commands_server_admip_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_unadm'); ?></td>
			<td><?= text('commands_server_unadm_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_kicklast'); ?></td>
			<td><?= text('commands_server_kicklast_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_respawntime'); ?></td>
			<td><?= text('commands_server_respawntime_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_maxrespawntime'); ?></td>
			<td><?= text('commands_server_maxrespawntime_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_limit'); ?></td>
			<td><?= text('commands_server_limit_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_timelimit'); ?></td>
			<td><?= text('commands_server_timelimit_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_password'); ?></td>
			<td><?= text('commands_server_password_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_setteam'); ?></td>
			<td><?= text('commands_server_setteam_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_addbotx'); ?></td>
			<td><?= text('commands_server_addbotx_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_friendlyfire'); ?></td>
			<td><?= text('commands_server_friendlyfire_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_vote'); ?></td>
			<td><?= text('commands_server_vote_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_bonus'); ?></td>
			<td><?= text('commands_server_bonus_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_maxplayers'); ?></td>
			<td><?= text('commands_server_maxplayers_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_loadcon'); ?></td>
			<td><?= text('commands_server_loadcon_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_loadlist'); ?></td>
			<td><?= text('commands_server_loadlist_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_loadwep'); ?></td>
			<td><?= text('commands_server_loadwep_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_gamemode'); ?></td>
			<td><?= text('commands_server_gamemode_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_realistic'); ?></td>
			<td><?= text('commands_server_realistic_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_advance'); ?></td>
			<td><?= text('commands_server_advance_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_survival'); ?></td>
			<td><?= text('commands_server_survival_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_kill'); ?></td>
			<td><?= text('commands_server_kill_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_banlast'); ?></td>
			<td><?= text('commands_server_banlast_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_unbanlast'); ?></td>
			<td><?= text('commands_server_unbanlast_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_lobby'); ?></td>
			<td><?= text('commands_server_lobby_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_server_say'); ?></td>
			<td><?= text('commands_server_say_desc'); ?></td>
		</tr>
	</table>
	<br>
	<h4><?= text('commands_clientserver'); ?></h4>
	<table>
		<tr>
			<td><?= text('commands_clientserver_adminlog'); ?></td>
			<td><?= text('commands_clientserver_adminlog_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_clientserver_info'); ?></td>
			<td><?= text('commands_clientserver_info_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_clientserver_mute'); ?></td>
			<td><?= text('commands_clientserver_mute_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_clientserver_unmute'); ?></td>
			<td><?= text('commands_clientserver_unmute_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_clientserver_record'); ?></td>
			<td><?= text('commands_clientserver_record_desc'); ?></td>
		</tr>
		<tr>
			<td><?= text('commands_clientserver_stop'); ?></td>
			<td><?= text('commands_clientserver_stop_desc'); ?></td>
		</tr>
	</table>
	<br>
	<h4><?= text('commands_cli'); ?></h4>
	<p><?= text('commands_cli_intro'); ?></p>
	<ul>
		<li>
			<?= text('commands_cli_dedicated', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('commands_cli_dedicated_desc'); ?></p>
		</li>
		<li>
			<?= text('commands_cli_start', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('commands_cli_start_desc'); ?></p>
		</li>
		<li>
			<?= text('commands_cli_dedicatedstart', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('commands_cli_dedicatedstart_desc'); ?></p>
		</li>
		<li>
			<?= text('commands_cli_join', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('commands_cli_join_desc', '<em>%</em>'); ?></p>
			<p><?= text('commands_cli_join_example'); ?></p>
		</li>
		<li>
			<?= text('commands_cli_demo', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('commands_cli_demo_desc', '<em>%</em>'); ?></p>
			<ul class="flat">
				<li><?= text('commands_cli_demo_freecam'); ?></li>
				<li><?= text('commands_cli_demo_speed'); ?></li>
				<li><?= text('commands_cli_demo_notexts'); ?></li>
				<li><?= text('commands_cli_demo_extract'); ?></li>
			</ul>
			<p><?= text('commands_cli_demo_sound'); ?></p>
			<p><?= text('commands_cli_demo_example'); ?></p>
		</li>
		<li>
			<?= text('commands_cli_mod', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('commands_cli_mod_desc'); ?></p>
		</li>
	</ul>
	<hr>
	<h3 id="chat"><?= text('chat_title'); ?></h3>
	<p><?= text('chat_intro', '<em>%</em>'); ?></p>
	<h4><?= text('chat_taunts'); ?></h4>
	<p><?= text('chat_taunts_desc', '<em>%</em>'); ?></p>
	<h4><?= text('chat_teamchat'); ?></h4>
	<p><?= text('chat_teamchat_desc'); ?></p>
	<hr>
	<h3 id="server"><?= text('server_title'); ?></h3>
	<p><?= text('server_intro'); ?></p>
	<p><?= text('server_how'); ?></p>
	<ol class="server">
		<li><?= text('server_how_ini', '<em>%</em>'); ?></li>
		<li>
			<?= text('server_how_arg') . PHP_EOL; ?>
			<p><?= text('server_how_arg_auto'); ?></p>
			<ul>
				<li><?= text('server_how_arg_auto_0'); ?></li>
				<li><?= text('server_how_arg_auto_1'); ?></li>
				<li><?= text('server_how_arg_auto_2'); ?></li>
			</ul>
		</li>
	</ol>
	<h4><?= text('server_admin'); ?></h4>
	<p><?= text('server_admin_desc', '<a href="#commands">%</a>'); ?></p>
	<h4><?= text('server_ports'); ?></h4>
	<p><?= text('server_ports_desc_0'); ?></p>
	<p><?= text('server_ports_desc_1'); ?></p>
	<hr>
	<h3 id="anticheat"><?= text('anticheat_title'); ?></h3>
	<p><?= text('anticheat_intro_0'); ?></p>
	<p><?= text('anticheat_intro_1'); ?></p>
	<ol class="anticheat">
		<li>
			<?= text('anticheat_part_0', '<strong>%</strong>') . PHP_EOL; ?>
			<p><?= text('anticheat_part_0_note'); ?></p>
		</li>
		<li><?= text('anticheat_part_1'); ?></li>
	</ol>
	<p><?= text('anticheat_note'); ?></p>
	<hr>
	<h3 id="version"><?= text('version_title'); ?></h3>
	<p><?= text('version_body', '<a href="' . get_link('changelog') . '">%</a>'); ?></p>
	<hr>
	<h3 id="license"><?= text('license_title'); ?></h3>
	<p class="license"><?= text('license_body'); ?></p>
	<hr>
	<h3 id="credits"><?= text('credits_title'); ?></h3>
	<p class="credits"><?= text('credits_header'); ?></p>
	<h4><?= text('credits_devteam'); ?></h4>
	<ul class="flat">
		<li><?= text('credits_devteam_shoozza', '<a href="' . $links['shoozza'] . '">%</a>'); ?></li>
		<li><?= text('credits_devteam_zakath'); ?></li>
		<li><?= text('credits_devteam_jrgp'); ?></li>
		<li><?= text('credits_devteam_skoskav'); ?></li>
		<li><?= text('credits_devteam_falcon'); ?></li>
		<li><?= text('credits_devteam_exhunter'); ?></li>
	</ul>
	<h4><?= text('credits_former'); ?></h4>
	<ul class="flat">
		<li><?= text('credits_former_fryer'); ?></li>
		<li><?= text('credits_former_rekot'); ?></li>
		<li><?= text('credits_former_tmtgr'); ?></li>
		<li><?= text('credits_former_enesce', '<a href="' . $links['enesce'] . '">%</a>'); ?></li>
		<li><?= text('credits_former_chrisgbk'); ?></li>
		<li><?= text('credits_former_mm'); ?></li>
	</ul>
	<h4><?= text('credits_lobby'); ?></h4>
	<ul class="flat">
		<li><?= text('credits_lobby_flieslikeabrick',
			'<a href="' . $links['flieslikeabrick'] . '">%</a>'); ?></li>
		<li><?= text('credits_lobby_jrgp'); ?></li>
	</ul>
	<h4><?= text('credits_music'); ?></h4>
	<ul class="flat">
		<li><?= text('credits_music_bsg', '<a href="' . $links['tablatures'] . '">%</a>'); ?></li>
	</ul>
	<h4><?= text('credits_maps'); ?></h4>
	<ul class="flat">
		<li><?= text('credits_maps_xtender'); ?></li>
		<li><?= text('credits_maps_chakapoko'); ?></li>
		<li><?= text('credits_maps_avarax'); ?></li>
		<li><?= text('credits_maps_viggoloniggolo'); ?></li>
		<li><?= text('credits_maps_doggfather'); ?></li>
		<li><?= text('credits_maps_deo'); ?></li>
		<li><?= text('credits_maps_boxo'); ?></li>
		<li><?= text('credits_maps_enjoyincubus'); ?></li>
		<li><?= text('credits_maps_sticky'); ?></li>
		<li><?= text('credits_maps_granddiablo'); ?></li>
		<li><?= text('credits_maps_demonic'); ?></li>
		<li><?= text('credits_maps_troskal'); ?></li>
		<li><?= text('credits_maps_michal'); ?></li>
		<li><?= text('credits_maps_geologist'); ?></li>
		<li><?= text('credits_maps_demonic_again'); ?></li>
		<li><?= text('credits_maps_keroncyst'); ?></li>
	</ul>
	<p><?= text('credits_waypoints'); ?></p>
	<?= text('credits_remakes') . PHP_EOL; ?>
	<ul class="flat">
		<li><?= text('credits_remakes_nuzz'); ?></li>
		<li><?= text('credits_remakes_stalky'); ?></li>
		<li><?= text('credits_remakes_granddiablo'); ?></li>
	</ul>
	<br>
	<?= text('credits_improved') . PHP_EOL; ?>
	<ul class="flat">
		<li><?= text('credits_improved_enjoyincubus'); ?></li>
	</ul>
	<h4><?= text('credits_interfaces'); ?></h4>
	<ul class="flat">
		<li><?= text('credits_interfaces_nightcabbage'); ?></li>
		<li><?= text('credits_interfaces_granddiablo'); ?></li>
		<li><?= text('credits_interfaces_urhos'); ?></li>
		<li><?= text('credits_interfaces_michal'); ?></li>
	</ul>
	<p><?= text('credits_evo'); ?></p>
	<h4><?= text('credits_translations'); ?></h4>
	<p><?= text('credits_translations_intro'); ?></p>
	<ul class="flat">
		<li><?= text('credits_translations_belarussian'); ?></li>
		<li><?= text('credits_translations_brazilian'); ?></li>
		<li><?= text('credits_translations_catalan'); ?></li>
		<li><?= text('credits_translations_chinesetrad'); ?></li>
		<li><?= text('credits_translations_croatian'); ?></li>
		<li><?= text('credits_translations_czech'); ?></li>
		<li><?= text('credits_translations_dutch'); ?></li>
		<li><?= text('credits_translations_estonian'); ?></li>
		<li><?= text('credits_translations_finnish'); ?></li>
		<li><?= text('credits_translations_french'); ?></li>
		<li><?= text('credits_translations_german'); ?></li>
		<li><?= text('credits_translations_greek'); ?></li>
		<li><?= text('credits_translations_hebrew'); ?></li>
		<li><?= text('credits_translations_hungarian'); ?></li>
		<li><?= text('credits_translations_italian'); ?></li>
		<li><?= text('credits_translations_japanese'); ?></li>
		<li><?= text('credits_translations_korean'); ?></li>
		<li><?= text('credits_translations_lithuanian'); ?></li>
		<li><?= text('credits_translations_norwegian'); ?></li>
		<li><?= text('credits_translations_polish'); ?></li>
		<li><?= text('credits_translations_russian'); ?></li>
		<li><?= text('credits_translations_slovak'); ?></li>
		<li><?= text('credits_translations_spanish'); ?></li>
		<li><?= text('credits_translations_swedish'); ?></li>
		<li><?= text('credits_translations_thai'); ?></li>
		<li><?= text('credits_translations_turkish'); ?></li>
		<li><?= text('credits_translations_ukrainian'); ?></li>
	</ul>
	<h4><?= text('credits_tools'); ?></h4>
	<ul>
		<li><?= text('credits_tools_borland',            '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_dx8',                '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_fmod',               '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_flatstyle',          '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_tntunicodecontrols', '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_blackudp'                               ); ?></li>
		<li><?= text('credits_tools_indy',               '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_modeenumunit',       '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_dcpcrypt',           '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_zlib',               '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_jvcl',               '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_remobjects',         '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_tools_autoupgraderpro',    '<a href="%">%</a>'); ?></li>
	</ul>
	<h4><?= text('credits_thanks'); ?></h4>
	<ul>
		<li><?= text('credits_thanks_community'); ?></li>
		<li><?= text('credits_thanks_warsztat', '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_thanks_jakobsen', '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_thanks_number27'); ?></li>
		<li><?= text('credits_thanks_flieslikeabrick', '<a href="%">%</a>'); ?></li>
		<li><?= text('credits_thanks_dnastyx'); ?></li>
		<li><?= text('credits_thanks_communitymembers'); ?></li>
		<li><?= text('credits_thanks_betatesting'); ?></li>
		<li><?= text('credits_thanks_dolny'); ?></li>
		<li><?= text('credits_thanks_trssam'); ?></li>
		<li><?= text('credits_thanks_testedsoldat'); ?></li>
		<li><?= text('credits_thanks_misc'); ?></li>
		<li><?= text('credits_thanks_notreminded'); ?></li>
	</ul>
	<hr>
	<h3 id="contact"><?= text('contact_title'); ?></h3>
	<p><?= text('contact_body', '<a href="%">%</a>'); ?></p>
	<hr>
	<p><a href="#top"><?= text('index_link'); ?></a></p>
</body>
</html>
