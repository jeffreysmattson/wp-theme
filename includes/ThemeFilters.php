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
		 * @return MainCalculator
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) ) {
				$className      = __CLASS__;
				self::$instance = new $className;
			}

			return self::$instance;
		}

		public function __construct() {
			// Add filter hooks here.
		}

		private function exampleFilterFunction(){
			// Does something here.
		}
	}
}
