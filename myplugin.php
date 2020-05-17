<?php
/* 
Plugin Name: MyPlugin 
Plugin URI: 
Description: Mi primer plugin
Version: 1.0 
Author: Saúl Zuno Sahagún 
Author URI:  
License: GPLv2 or later 
License URI: https://www.gnu.org/licenses/gpl-2.0.html 
Text Domain: EGMB 
*/

/* Request Ajax */
require_once "admin/includes/ajax/ajax.php";

/* Request Admin */
require_once plugin_dir_path(__FILE__) . 'admin/admin.php';

add_action('wp_head', 'mypluginhead');

function mypluginhead(){
    echo get_option('myeffect');
}

?>