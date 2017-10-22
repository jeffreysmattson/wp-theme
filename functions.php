<?php
/**
 * wp-theme functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package wp-theme
 * @since 0.1.0
 */

// Useful global constants
define( 'WEDU_VERSION',      '0.1.0' );
define( 'WEDU_URL',          get_stylesheet_directory_uri() );
define( 'WEDU_TEMPLATE_URL', get_template_directory_uri() );
define( 'WEDU_PATH',         get_template_directory() . '/' );
define( 'WEDU_INC',          WEDU_PATH . 'includes/' );

// Include compartmentalized functions
require_once WEDU_INC . 'functions/core.php';

// Include lib classes
require_once WEDU_INC . 'ThemeFilters.php';

// Run the setup functions
guw\guwTheme\Core\setup();

ThemeFilters::instance();
