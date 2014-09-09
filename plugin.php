<?php
/*
* Plugin Name: Wordpress Save Override
* Version: 1.0
* Plugin URI: http://heisenbug.ca/
* Description: Command+S, Control+S can be used to save posts/pages.
* Author: Tyler King
* Author URI: http://heisenbug.ca/
* Requires at least: 3.8
* Tested up to: 4.0
*/
if (! defined('ABSPATH')) {
    exit;
}

add_action('admin_init', 'wso_scripts');
function wso_scripts()
{
    wp_enqueue_script('wso-jquery-hotkeys', plugins_url('assets/jquery.hotkeys.js', __FILE__), array('jquery'), false, true);
    wp_enqueue_script('wso-plugin', plugins_url('assets/plugin.js', __FILE__), array('jquery', 'wso-jquery-hotkeys'), false, true);
}
