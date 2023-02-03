<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://techvalens.com/
 * @since      1.0.0
 *
 * @package    Wedding_Venue_Manager
 * @subpackage Wedding_Venue_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wedding_Venue_Manager
 * @subpackage Wedding_Venue_Manager/admin
 * @author     Amit patel <amit.patel@techvalens.com>
 */
class Wedding_Venue_Manager_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wedding_Venue_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wedding_Venue_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wedding-venue-manager-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wedding_Venue_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wedding_Venue_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wedding-venue-manager-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function wvm_admin_menu() {
	//add_menu_page(  $page_title,  $menu_title,  $capability,  $menu_slug, callable $callback = '',  $icon_url = '', int|float $position = null ): 
	//add_submenu_page(  $parent_slug,  $page_title,  $menu_title,  $capability,  $menu_slug, callable $callback = '', int|float $position = null ): |false
	add_menu_page('wedding-venue-manager','WV Manager','manage_options','wvm_dashboard', array($this,'menu1'),'dashicons-schedule',
		70);
	add_submenu_page( 'wvm_dashboard', 'Dashboard', 'Dashboard', 'manage_options', 'wvm_dashboard', array($this,'menu1'), null );
	add_submenu_page( 'wvm_dashboard', 'Reservations', 'Reservations', 'manage_options', 'wvm_reservations', array($this,'menu1'),null );
	}
	public function menu1() {

		echo "haan humai hain";
	}

}
