<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= $images_prefix; ?>favicon.ico">
	<title><?= text('main_title', text('index_register')); ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $style_prefix; ?>register.css">
</head>
<body>
	<p class="header"><?= img('registertitle.gif'); ?></p>
	<p class="intro"><?= text('reg_intro_0', '<a href="#register">%</a>'); ?></p>
	<p class="intro"><?= text('reg_intro_1'); ?></p>
	<hr>
	<h1><?= text('reg_benefits'); ?></h1>
	<p class="intro"><?= text('reg_benefits_body'); ?></p>
	<h2><?= text('reg_profiles'); ?></h2>
	<p><?= img('reg-profiles.jpg'); ?></p>
	<p><?= text('reg_profiles_body'); ?></p>
	<h2><?= text('reg_interfaces'); ?></h2>
	<p><?= img('reg-interface.jpg'); ?></p>
	<p><?= text('reg_interfaces_body_0'); ?></p>
	<p><?= text('reg_interfaces_body_1'); ?></p>
	<br>
	<div class="screens">
		<p><?= img('reg-i1.jpg'); ?><?= img('reg-i2.jpg'); ?></p>
		<p><?= img('reg-i3.jpg'); ?><?= img('reg-i4.jpg'); ?></p>
		<p><?= img('reg-i5.jpg'); ?><?= img('reg-i6.jpg'); ?></p>
		<p><?= img('reg-i7.jpg'); ?></p>
	</div>
	<h2><?= text('reg_weaponstats'); ?></h2>
	<p><?= text('reg_weaponstats_body'); ?></p>
	<br>
	<p><?= img('weapon-stats.png'); ?></p>
	<h2><?= text('reg_nagscreen'); ?></h2>
	<p><?= text('reg_nagscreen_body', '<strong>%</strong>'); ?></p>
	<br>
	<p><?= img('nag-screen.png'); ?></p>
	<h2><?= text('reg_honored'); ?></h2>
	<p><?= text('reg_honored_body_0', '<em>%</em>'); ?></p>
	<p><?= text('reg_honored_body_1'); ?></p>
	<p><?= text('reg_honored_body_2'); ?></p>
	<br>
	<p><?= img('reg-star.jpg'); ?></p>
	<h2><?= text('reg_jetflames'); ?></h2>
	<p><?= text('reg_jetflames_body', '<strong>%</strong>'); ?></p>
	<br>
	<p>
		<?= img('reg-jet1.jpg') . PHP_EOL; ?>
		<?= img('reg-jet2.jpg') . PHP_EOL; ?>
		<?= img('reg-jet3.jpg') . PHP_EOL; ?>
	</p>
	<h2><?= text('reg_modinterface'); ?></h2>
	<p><?= text('reg_modinterface_body', '<strong>%</strong>'); ?></p>
	<h2><?= text('reg_createinterface'); ?></h2>
	<p><?= text('reg_createinterface_body'); ?></p>
	<h2><?= text('reg_moneyback'); ?></h2>
	<p><?= text('reg_moneyback_body'); ?></p>
	<p><?= text('reg_think', '<span>%</span>', '<em>%</em>'); ?></p>
	<br>
	<h2 id="register"><?= text('reg_how'); ?></h2>
	<p><?= text('reg_how_desc'); ?></p>
	<hr>
	<p><?= text('reg_payinfo_0', '<strong>%</strong>'); ?></p>
	<p><?= text('reg_payinfo_1', '<strong>%</strong>'); ?></p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input name="cmd" type="hidden" value="_s-xclick">
		<input name="hosted_button_id" type="hidden" value="5ALDFKKP3EUUG">
		<input alt="PayPal  The safer, easier way to pay online." border="0" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG_global.gif" type="image">
		<img width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
	</form>
	<hr>
	<p class="highlight"><?= text('reg_footnotes_0'); ?></p>
	<p><?= text('reg_footnotes_1', '<strong>%</strong>'); ?></p>
	<p><?= text('reg_footnotes_2', '<strong>%</strong>'); ?></p>
	<p><?= text('reg_footnotes_3', '<a href="mailto:%">%</a>'); ?></p>
	<p><?= text('reg_footnotes_4'); ?></p>
	<p class="signature"><?= text('reg_signature'); ?></p>
</body>
</html>
