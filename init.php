<?php
/*
Plugin Name: New Plugin Name
Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
Description: This describes my plugin in a short sentence
Version:     1.5
Author:      Nate Finch
Author URI:  http://URI_Of_The_Plugin_Author
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: new-plugin-name
*/

namespace new_plugin_name;

require_once plugin_dir_path( __FILE__ ) . 'inc/main.php';

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\add_these_plugin_styles_and_scripts' );

function add_these_plugin_styles_and_scripts() {

	wp_enqueue_style( 'included-styles', plugin_dir_url( __FILE__ ) . 'css/included_styles.css' );

	wp_enqueue_script( 'included-js', plugin_dir_url( __FILE__ ) . 'js/included_js.js', array( 'jquery' ), false, false );

}



