<?php
/*
Plugin Name:    WP Compact Plugins Page
Plugin URI:     http://github.com/josephfusco/wp-compact-plugins-page/
Description:    View long lists of plugins with ease on the wp-admin plugins page.
Version:        1.1
Author:         Joseph Fusco
Author URI:     http://josephfus.co/
License:        GPLv2 or later
License URI:    http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit;

function wpcpp_styles() {
    wp_enqueue_style( 'acfv_theme_transparent', plugins_url( '/compact.css' , __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'wpcpp_styles' );
