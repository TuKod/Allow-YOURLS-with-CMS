<?php
/*
Plugin Name: Allow YOURLS with CMS
Plugin URI: http://tukod.com/tukod/allow-yourls-with-cms/
Description: Allows YOURLS to work on the same domain name with a CMS like WordPress, Mambo, or Joomla.  See the <a href="https://github.com/TuKod/Allow-YOURLS-with-CMS/blob/master/README.md">instructions</a>
Version: 1.0
Author: TuKod
Author URI: http://alantait.net/
*/

// List of plugin hooks http://yourls.org/hooklist.php

// Modifies the custom keyword to add a CMS safety character.
// functions-html.php 196
yourls_add_filter( 'custom_keyword', 'tukod_add_cms_safe_char' );

// Modifies the random keyword to add a CMS safety character.
// functions-html.php 223
yourls_add_filter( 'random_keyword', 'tukod_add_cms_safe_char' );

function tukod_add_cms_safe_char( $args ) {
	return TUKOD_YOURLS_CMS_PREFIX . $args['keyword'];
}
