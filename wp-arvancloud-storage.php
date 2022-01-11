<?php

/**
 * @link              khorshidlab.com
 * @since             1.0.0
 * @package           Wp_Arvancloud_Storage
 *
 * @wordpress-plugin
 * Plugin Name:       ArvanCloud Object Storage
 * Plugin URI:        https://www.arvancloud.com/fa/products/cloud-storage
 * Description:       Using ArvanCloud Storage Plugin you can offload, back up and upload your WordPress files and databases directly to your ArvanCloud object storage bucket. This easy-to-use plugin allows you to back up, restore and store your files simply and securely to a cost-effective, unlimited cloud storage. No need for expensive hosting services anymore.
 * Version:           0.5
 * Author:            Khorshid, ArvanCloud
 * Author URI:        https://www.arvancloud.com/en/products/cloud-storage
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       arvancloud-object-storage
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'ACS_VERSION', '0.5' );
define( 'ACS_NAME', __( 'ArvanCloud Storage', 'arvancloud-object-storage' ) );
define( 'ACS_SLUG', 'wp-arvancloud-storage');
define( 'ACS_PLUGIN_ROOT', plugin_dir_path( __FILE__ ) );
define( 'ACS_PLUGIN_ROOT_URL', plugin_dir_url( __FILE__ ) );
define( 'ACS_PLUGIN_ABSOLUTE', __FILE__ );
define( 'ACS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-arvancloud-storage-activator.php
 */
function activate_wp_arvancloud_storage() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-arvancloud-storage-activator.php';
	Wp_Arvancloud_Storage_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-arvancloud-storage-deactivator.php
 */
function deactivate_wp_arvancloud_storage() {

}

register_activation_hook( __FILE__, 'activate_wp_arvancloud_storage' );
register_deactivation_hook( __FILE__, 'deactivate_wp_arvancloud_storage' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-arvancloud-storage.php';

require plugin_dir_path( __FILE__ ) . 'includes/wp-arvancloud-storage-helper.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_arvancloud_storage() {

	$plugin = new Wp_Arvancloud_Storage();
	$plugin->run();

}
run_wp_arvancloud_storage();
