<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.getright.nl
 * @since      1.0.0
 *
 * @package    Woocommerce_Shop_Assistant
 * @subpackage Woocommerce_Shop_Assistant/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Shop_Assistant
 * @subpackage Woocommerce_Shop_Assistant/includes
 * @author     Lex Lemmens <l.lemmens@getright.nl>
 */
class Woocommerce_Shop_Assistant_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-shop-assistant',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
