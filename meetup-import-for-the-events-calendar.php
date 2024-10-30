<?php
/**
 * Plugin Name:       Meetup Import for The Events Calendar
 * Plugin URI:        https://xylusthemes.com/plugins/meetup-import-for-the-events-calendar/
 * Description:       Meetup Import for The Events Calendar allows you to automatically import Meetup (meetup.com) events into your WordPress site.
 * Version:           1.0.0
 * Author:            xylus
 * Author URI:        http://xylusthemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       xt-tec-meetup-import
 * Domain Path:       /languages
 *
 * @link       http://xylusthemes.com/
 * @since      1.0.0
 * @package    XT_TEC_Meetup_Import
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define Global variables.
 */
define( 'XTMI_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'XTMI_ADMIN_PATH', plugin_dir_path( __FILE__ ) . 'admin/' );
define( 'XTMI_INCLUDES_PATH', plugin_dir_path( __FILE__ ) . 'includes/' );
define( 'XTMI_OPTIONS', 'xtmi_meetup_options' );

/**
 * Runs during plugin activation.
 */
function activate_xt_tec_meetup_import() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-xt-tec-meetup-import-activator.php';
	XT_TEC_Meetup_Import_Activator::activate();
}

/**
 * Runs during plugin deactivation.
 */
function deactivate_xt_tec_meetup_import() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-xt-tec-meetup-import-deactivator.php';
	XT_TEC_Meetup_Import_Deactivator::deactivate();
}

/**
* Register Plugin activation and deactivation hooks
*/
register_activation_hook( __FILE__, 'activate_xt_tec_meetup_import' );
register_deactivation_hook( __FILE__, 'deactivate_xt_tec_meetup_import' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-xt-tec-meetup-import.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_xt_tec_meetup_import() {

	$plugin = new XT_TEC_Meetup_Import();
	$plugin->run();
	$plugin->xtmi_check_requirements( plugin_basename( __FILE__ ) );

}
run_xt_tec_meetup_import();
