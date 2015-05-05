<?php

class config
{
	static public $locale = 'en_US';
	static public $images_prefix = 'images/';
	static public $images_prefix_localized = 'images/en_US/';
	static public $compile_dir = '_compiled/';
	static public $views;
}

config::$views = array('manual', 'changelog');
