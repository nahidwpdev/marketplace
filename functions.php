<?php
/**
 * Marketplace functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$theme = wp_get_theme();

define( 'THEME_NAME', $theme['Name'] );
define( 'THEME_VERSION', $theme['Version'] );
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

require_once( THEME_DIR . '/inc/enqueue.php');







