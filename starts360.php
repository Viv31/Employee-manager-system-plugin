<?php
/**
 Plugin Name: Starts 360
Plugin URI: http://wordpress.org/plugins/
Description: This plugin mange employe manager functionality.
Author: Vaibhav Gangrade
Version: 1.0.0
Author URI: 
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Defining contants 
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());
define("SITE_URL",site_url());

// Add menu
function customplugin_menu() {

  add_menu_page("Starts360 Plugin", "Starts360 Plugin","manage_options", "Starts360", "uploadfile",plugins_url('/starts360/img/icon.png'));
  
  add_submenu_page("Starts360","Upload file", "Upload file","manage_options", "uploadfile", "uploadfile");
  

 

}
add_action("admin_menu", "customplugin_menu");

function uploadfile(){
  include "uploadfile.php";

}



//Calling Styles and scripts files
include_once("styles_and_scripts.php");
//Calling Manager Custom Post Types
include_once("Manager-cpt.php");
//Calling Employee Custom Post Types
include_once("Employee-cpt.php");
//Calling Taxonomies for Manager & Employees
include_once("taxonomies.php");
//Calling Employee Shortcode
include_once("Employee-shortcode.php");
//Calling Manager Shortcode
include_once("Manager-shortcode.php");




