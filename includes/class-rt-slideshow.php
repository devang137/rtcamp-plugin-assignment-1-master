<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/devang137/rtcamp-plugin-assignment-1-master
 *
 * @package    Rt_Plugin
 * @subpackage Rt_Plugin/includes
 */

class Rt_Slideshow {
	protected $plugin_name;
	protected $version;
	public function __construct() {

		$this->plugin_name = 'rt-plugin';
		$this->version = PLUGIN_VERSION;
		$this->load_dependencies();
	}

	private function load_dependencies() {
		require_once Rtcamp_File.'public/class-rt-slideshow-public.php';
		require_once Rtcamp_File.'admin/class-rt-slideshow-admin.php';
	}

	public function run() {
		$shrt = new Rt_Slideshow_Admin();
		$shrt->enqueue_scripts();
	// 	$shrt = new Rt_Slideshow_Public();
	// 	$shrt->register_scripts();
	// 	$shrt->register_shortcode();
	// 	$sadmin = new Rt_Slideshow_Admin();
	// 	$sadmin->register_scripts();
	// 	//$sadmin->register_button();
	}
}