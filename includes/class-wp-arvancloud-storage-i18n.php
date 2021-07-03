<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       khorshidlab.com
 * @since      1.0.0
 *
 * @package    Wp_Arvancloud_Storage
 * @subpackage Wp_Arvancloud_Storage/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Arvancloud_Storage
 * @subpackage Wp_Arvancloud_Storage/includes
 * @author     Khorshid <info@khorshidlab.com>
 */
class Wp_Arvancloud_Storage_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-arvancloud-storage',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
