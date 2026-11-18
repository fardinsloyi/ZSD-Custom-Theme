<?php
/**
 * ZSD Custom theme bootstrap.
 *
 * Presentation only: order workflows, price synchronization, Telegram
 * integrations and other business logic must remain in dedicated plugins.
 */

defined( 'ABSPATH' ) || exit;

define( 'ZSD_CUSTOM_VERSION', '0.1.0' );
define( 'ZSD_CUSTOM_DIR', get_template_directory() );
define( 'ZSD_CUSTOM_URI', get_template_directory_uri() );

function zsd_custom_setup() {
	load_theme_textdomain( 'zsd-custom', ZSD_CUSTOM_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );

	register_nav_menus( array(
		'primary' => __( 'منوی اصلی', 'zsd-custom' ),
		'footer'  => __( 'منوی پایین سایت', 'zsd-custom' ),
	) );
}
add_action( 'after_setup_theme', 'zsd_custom_setup' );

function zsd_custom_enqueue_assets() {
	$css_file = ZSD_CUSTOM_DIR . '/assets/css/theme.css';
	$js_file  = ZSD_CUSTOM_DIR . '/assets/js/theme.js';

	wp_enqueue_style(
		'zsd-custom-theme',
		ZSD_CUSTOM_URI . '/assets/css/theme.css',
		array(),
		file_exists( $css_file ) ? (string) filemtime( $css_file ) : ZSD_CUSTOM_VERSION
	);

	wp_enqueue_script(
		'zsd-custom-theme',
		ZSD_CUSTOM_URI . '/assets/js/theme.js',
		array(),
		file_exists( $js_file ) ? (string) filemtime( $js_file ) : ZSD_CUSTOM_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'zsd_custom_enqueue_assets' );

/**
 * Add a body class for theme-specific styling without changing plugin behavior.
 */
function zsd_custom_body_classes( $classes ) {
	$classes[] = 'zsd-custom-theme';
	if ( is_rtl() ) {
		$classes[] = 'zsd-rtl';
	}
	return $classes;
}
add_filter( 'body_class', 'zsd_custom_body_classes' );
