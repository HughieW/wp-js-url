<?php
/*
Plugin Name: Javascript Theme Directory
Plugin URI: http://hughiew.co.uk
Description: Pulls the theme directory into your theme's Javascript
Version: 1.0
Author: Hughie Wilmshurst
Author URI: http://hughiew.co.uk
License: GPLv2 or later
*/

function javascript_theme_directory_init(){
	echo '<script type="text/javascript">var template_url = \''.get_bloginfo('template_url').'\'</script>';
}

add_action('wp_head', 'javascript_theme_directory_init');