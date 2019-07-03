<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/devang137/rtcamp-plugin-assignment-1-master
 *
 * @package    Rt_Plugin
 * @subpackage Rt_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Rt_Plugin
 * @subpackage Rt_Plugin/admin
 * @author     Devang Vachheta <Devangvachheta123@gmail.com>
 */
// echo Rtcamp_URL;
class Rt_Slideshow_Admin {

	function __construct() {
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
    }
    public function register_scripts() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }
    public function enqueue_scripts() {
        wp_enqueue_style("admin_css_file",Rtcamp_URL."/rtcamp-plugin-assignment-1-master/admin/css/rt-slideshow-admin.css",'',PLUGIN_VERSION);
        wp_enqueue_style("admin_css_bootstrap",Rtcamp_URL."/rtcamp-plugin-assignment-1-master/admin/css/bootstrap.min.css",'',PLUGIN_VERSION);
        wp_enqueue_script("admin_js_file",Rtcamp_URL."/rtcamp-plugin-assignment-1-master/admin/js/rt-slideshow-admin.js",'',PLUGIN_VERSION,true);
        wp_enqueue_script("admin_js_bootstrap",Rtcamp_URL."/rtcamp-plugin-assignment-1-master/admin/js/bootstrap.min.js",'',PLUGIN_VERSION,true);
    }
    public function add_options_page() {
        add_options_page('rtCamp Slideshow Plugin Assignment','Rt-Plugin','manage_options','Rt-plugin',array( $this, 'display_options_page' ));
    }
    public function display_options_page() {
        include_once 'data/rt-slideshow-admin-display.php';
	}

}