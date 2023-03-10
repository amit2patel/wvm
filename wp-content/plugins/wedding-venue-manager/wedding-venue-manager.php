<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://techvalens.com/
 * @since             1.0.0
 * @package           Wedding_Venue_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Wedding Venue Manager
 * Plugin URI:        https://techvalens.com/
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Amit patel
 * Author URI:        https://techvalens.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wedding-venue-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WEDDING_VENUE_MANAGER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wedding-venue-manager-activator.php
 */
function activate_wedding_venue_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wedding-venue-manager-activator.php';
	Wedding_Venue_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wedding-venue-manager-deactivator.php
 */
function deactivate_wedding_venue_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wedding-venue-manager-deactivator.php';
	Wedding_Venue_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wedding_venue_manager' );
register_deactivation_hook( __FILE__, 'deactivate_wedding_venue_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wedding-venue-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wedding_venue_manager() {

	$plugin = new Wedding_Venue_Manager();
	$plugin->run();

}
run_wedding_venue_manager();
