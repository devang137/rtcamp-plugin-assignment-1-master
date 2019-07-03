<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package Rt_Plugin
 * @link https://github.com/devang137/rtcamp-plugin-assignment-1-master
 *
 * @wordpress-plugin
 * Plugin Name:       rtCamp Slideshow Plugin Assignment
 * Plugin URI:        https://github.com/devang137/rtcamp-plugin-assignment-1-master
 * Description:       This is a short description of what the plugin does.
 * Version:           1.0.0
 * Author:            Devang Vachheta
 * Author URI:        https://github.com/devang137
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
// If this file is called directly, abort.
defined('ABSPATH') || die("Hey, You can't access this file!");
define("Rtcamp_File", plugin_dir_path(__FILE__));	
define("Rtcamp_URL", plugins_url());										//	http://localhost/wordpress/wp-content/plugins
define("PLUGIN_VERSION","1.0.0");

function activate_rt_slideshow() {
   require_once Rtcamp_File.'includes/class-rt-slideshow-activator.php';
   Rt_Slideshow_Activator::activate();
}

function deactivate_rt_slideshow() {
   require_once Rtcamp_File.'includes/class-rt-slideshow-deactivator.php';
   Rt_Slideshow_Deactivator::deactivate();
}

register_activation_hook(__FILE__,'activate_rt_slideshow');
register_deactivation_hook(__FILE__,'deactivate_rt_slideshow');

require Rtcamp_File.'includes/class-rt-slideshow.php';

function run_rt_slideshow() {
	$plugin = new Rt_Slideshow();
	$plugin->run();

}
run_rt_slideshow();