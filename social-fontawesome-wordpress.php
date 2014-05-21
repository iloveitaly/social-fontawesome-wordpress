<?php

/*
Plugin Name: Simple Social Icons via FontAwesome
Description: Simple Social Icons Using FontAwesome for Wordpress

Author: Michael Bianco
Author URI: http://cliffsidemedia.com/
Plugin URI: https://github.com/iloveitaly/wordpress-font-awesome-social

Description: Simple essential sharing icons with fontawesome. Clean code, easy to customize.

Version: 1.0
License: MIT
*/

if(!defined( 'ABSPATH' )) exit;

define('SOCIAL_FA_WIDGET_PATH', plugin_dir_path( __FILE__ ));
define('SOCIAL_FA_PLUGIN_URL', plugin_dir_url(  __FILE__  ) );

add_filter('the_content', 'social_fa_add_icons');
function social_fa_add_icons($content) {
	if(is_feed() || is_front_page()) {
		return $content;
	}

	return $content . social_generate_content('social-holder-horizontal');
}

add_action('wp_footer', 'social_floating_insert');
function social_floating_insert() {
	if(!is_single()) return;
	
	echo social_generate_content('social-holder-vertical');
}

function social_generate_content($holder_class = '') {
	$url = urlencode(get_permalink());
	$title = urlencode(get_the_title());

	ob_start();

	// allow the user to customize the template without forking the plugin
	if($overridden_template = locate_template('templates/social-fa-sharing.php')) {
		include $overridden_template;
	} else {
		include SOCIAL_FA_WIDGET_PATH . 'templates/sharing.php';
	}

	$output = ob_get_contents();
	ob_end_clean();

	return $output;
}

// add styles
add_action('wp_enqueue_scripts', 'social_fa_assets');
function social_fa_assets() {
	wp_enqueue_style('social-fa-style', SOCIAL_FA_PLUGIN_URL . 'style.css', array(), '1.0.0');
}
