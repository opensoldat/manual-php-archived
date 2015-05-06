<?php

class config
{
	static public $locale = 'en_US';
	static public $images_prefix = 'images/';
	static public $images_prefix_localized = 'images/en_US/';
	static public $compile_dir = '_compiled/';
	static public $views;
	static public $links;
}

config::$views = array('manual', 'changelog');

// external links. links that are hard coded in the text string aren't included here

config::$links = array(
	'ase' => 'http://en.wikipedia.org/wiki/The_All-Seeing_Eye',
	'shoozza' => 'http://shoozza.de/',
	'enesce' => 'http://enesce.com/',
	'flieslikeabrick' => 'http://www.u13.net/',
	'tablatures' => 'http://www.soldat.pl/downloads/tabs.zip'
);
