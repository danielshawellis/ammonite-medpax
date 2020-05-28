<?php
/**
 * Plugin Name:       Ammonite MedPax
 * Plugin URI:
 * Description:
 * Version:           1.0.0
 * Requires at least:
 * Requires PHP:
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 * License:
 * License URI:
 * Text Domain:
 * Domain Path:
 */

 // If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit;

// Define plugin version
define( 'AMMONITE_MEDPAX_VERSION', '1.0.0' );

// Load the plugin's core file
require plugin_dir_path( __FILE__ ) . 'includes/class-ammonite-medpax.php';

// Begin execution of the plugin
function run_ammonite_medpax() {
	$plugin = new Ammonite_Medpax();
	$plugin->run();
}
run_ammonite_medpax();
