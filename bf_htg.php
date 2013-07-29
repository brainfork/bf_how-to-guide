<?php
/*
Plugin Name: BF How-to Guide
Plugin URI: http://labs.BRAINfork.net
Description: A plugin that adds a WordPress how-to guide under the Dashboard tab. Guide is for Editor-level tasks.
Version: 0.1
Author: Kaleb J. Barker
Author URI: http://kaleb.BRAINfork.net
License: GPL2
*/
/*
Copyright 2013  Kaleb J. Barker  (email : kaleb@brainfork.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('BF_HTG')) {
	class BF_HTG {
		/**
		 * Construct the plugin object
		 */
		public function __construct() {
			add_action('admin_menu', array($this, 'admin_menu'));
		} // END public function __construct
	    
		/**
		 * Activate the plugin
		 */
		public static function activate() {
			// Do nothing
		} // END public static function activate
		
		/**
		 * Deactivate the plugin
		 */	
		public static function deactivate() {
			// Do nothing
		} // END public static function deactivate
		
		function admin_menu() {
			add_dashboard_page('WordPress How-to Guide', 'How-to Guide', 'publish_pages', 'bf_htg', array($this, 'admin_page_handler'));
    	}
		
		function admin_page_handler() {
			echo '<div class="wrap bf_htg">';
				echo '<header id="htg_head">';
					echo '<div class="icon32 icon-tools"></div>';
					echo '<h2>WordPress How-to Guide</h2>';
				echo '</header>';
				echo '<div id="htg_content">';
				
				$page = $_GET["topic"];
				
				if (isset($page)) {
					$file = dirname(__FILE__) . '/pages/' . $page . '.php';
				} else {
					$file = dirname(__FILE__) . '/pages/index.php';
				}
				
				require_once $file;		
				
				echo '</div>';
			echo '</div>';
		}
	
	} // END class BF_HTG
} // END if(!class_exists('BF_HTG'))

if(class_exists('BF_HTG')) {
	// load plugin functions
	require_once dirname( __FILE__ ) . '/functions.php';
	
	// load plugin styles
	wp_register_style('htg_style', plugins_url('style.css', __FILE__));
	wp_enqueue_style('htg_style');
	
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('BF_HTG', 'activate'));
	register_deactivation_hook(__FILE__, array('BF_HTG', 'deactivate'));

	// instantiate the plugin class
	$bf_htg = new BF_HTG();
}