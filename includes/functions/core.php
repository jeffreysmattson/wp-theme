<?php
namespace guw\guwTheme\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since 0.1.0
 *
 * @uses add_action()
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',  $n( 'i18n' )        );
	add_action( 'after_setup_theme',  $n( 'menus')		  );
	add_action( 'wp_enqueue_scripts', $n( 'scripts' )     );
	add_action( 'wp_enqueue_scripts', $n( 'styles' )      );
	add_action( 'wp_head',            $n( 'header_meta' ) );
}

/**
 * Makes WP Theme available for translation.
 *
 * Translations can be added to the /lang directory.
 * If you're building a theme based on WP Theme, use a find and replace
 * to change 'wptheme' to the name of your theme in all template files.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 *
 * @since 0.1.0
 *
 * @return void
 */
function i18n() {
	load_theme_textdomain( 'wedu', WEDU_PATH . '/languages' );
}

/**
 * Enqueue scripts for front-end.
 *
 * @uses wp_enqueue_script() to load front end scripts.
 *
 * @since 0.1.0
 *
 * @return void
 */
function scripts() {
	/**
	 * Flag whether to enable loading uncompressed/debugging assets. Default false.
	 * 
	 * @param bool wedu_script_debug
	 */
	$debug = apply_filters( 'wedu_script_debug', false );
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	
	wp_enqueue_script(
		'foundationJs',
		WEDU_TEMPLATE_URL . '/assets/js/vendor/foundation/foundation.min.js',
		array('jquery'),
		WEDU_VERSION,
		true
	);

	wp_enqueue_script(
		'wedu',
		WEDU_TEMPLATE_URL . "/assets/js/-theme{$min}.js",
		array(),
		WEDU_VERSION,
		true
	);
}

/**
 * Enqueue styles for front-end.
 *
 * @uses wp_enqueue_style() to load front end styles.
 *
 * @since 0.1.0
 *
 * @return void
 */
function styles() {
	/**
	 * Flag whether to enable loading uncompressed/debugging assets. Default false.
	 *
	 * @param bool wedu_style_debug
	 */
	$debug = apply_filters( 'wedu_style_debug', false );
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style(
		'guwStyle',
		WEDU_URL . "/assets/css/-theme{$min}.css",
		array(),
		WEDU_VERSION
	);
}

/**
 * Does nothing.
 */
function header_meta() {
	return;
}

/**
 * Register menus
 *
 * @uses  register_nav_menus
 * @since  0.1.0
 * 
 * @return void
 */
function menus() {
  register_nav_menus( array(
	'primary' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
  ) );
}
