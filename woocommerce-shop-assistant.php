<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.getright.nl
 * @since             1.0.0
 * @package           Woocommerce_Shop_Assistant
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Shop Assistant
 * Plugin URI:        https://github.com/lexlemmens/woocommerce-shop-assistant
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Lex Lemmens
 * Author URI:        https://www.getright.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-shop-assistant
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-shop-assistant-activator.php
 */
function activate_woocommerce_shop_assistant() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-shop-assistant-activator.php';
	Woocommerce_Shop_Assistant_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-shop-assistant-deactivator.php
 */
function deactivate_woocommerce_shop_assistant() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-shop-assistant-deactivator.php';
	Woocommerce_Shop_Assistant_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_shop_assistant' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_shop_assistant' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-shop-assistant.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_shop_assistant() {

	$plugin = new Woocommerce_Shop_Assistant();
	$plugin->run();

}
run_woocommerce_shop_assistant();
