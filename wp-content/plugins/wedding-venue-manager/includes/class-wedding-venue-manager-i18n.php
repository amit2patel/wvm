<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://techvalens.com/
 * @since      1.0.0
 *
 * @package    Wedding_Venue_Manager
 * @subpackage Wedding_Venue_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wedding_Venue_Manager
 * @subpackage Wedding_Venue_Manager/includes
 * @author     Amit patel <amit.patel@techvalens.com>
 */
class Wedding_Venue_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wedding-venue-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
