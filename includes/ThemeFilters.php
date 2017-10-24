<?php
/**
 * Theme filters.
 *
 * @author  	Jeffrey S. Mattson <jeff@layer7web.com>
 * @link       	https://github.com/jeffreysmattson/wp-theme
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

if ( ! class_exists( 'ThemeFilters' )  ) {
	class ThemeFilters {

		protected static $instance;

		/**
		 * Static Singleton Factory Method
		 *
		 * @return ThemeFilters
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) ) {
				$className      = __CLASS__;
				self::$instance = new $className;
			}

			return self::$instance;
		}

		public function __construct() {
		    // Remove the meta that tells what version of WP we are using
		    add_filter('the_generator', '__return_empty_string'); 
		}
	}
}
ThemeFilters::instance();
