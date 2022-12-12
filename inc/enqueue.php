<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function mp_enqueue_script() {

//  I just added the line again

wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_register_style( 'plugins-name', get_template_directory_uri() .'/assets/css/plugins.min.css', array(), '20130608');
wp_enqueue_style( 'plugins-name' );

//    Enqueueing Script
//
wp_register_script('custom-script', plugins_url('/assets/js/script.min.js', __FILE__), array('jquery'),'1.1', true);
wp_enqueue_script('custom-script');
wp_register_script('plugins_script', plugins_url('/assets/js/plugins.min.js', __FILE__), array('jquery'),'1.1', true);
wp_enqueue_script('plugins_script');
}
add_action( 'wp_enqueue_scripts', 'mp_enqueue_script' );