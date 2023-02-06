<?php
/**
 * Plugin Name: Blog Post Image Accordion
 * Description: WPoducts Image accordion is an Elementor plugin that has been decorated 19+ ready-made eye-catching styles. More designs will be included very soon stay tuned.
 * Plugin URI:  www.bwdplugins.com/plugins/blog-post-image-accordion
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  www.bestwpdeveloper.com/
 * Text Domain: blog-post-image-accordion
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';

final class FinalBPIACRDNImageAccordion{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bpiacrdn_init', array( $this, 'bpiacrdn_loaded_textdomain' ) );
		// bpiacrdn_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bpiacrdn_init' ) );
	}

	public function bpiacrdn_loaded_textdomain() {
		load_plugin_textdomain( 'blog-post-image-accordion' );
	}

	public function bpiacrdn_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bpiacrdn_admin_notice_missing_main_plugin');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bpiacrdn_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bpiacrdn_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bpiacrdn-boots.php' );
	}

	public function bpiacrdn_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'blog-post-image-accordion' ),
			'<strong>' . esc_html__( 'Blog Post Image Accordion', 'blog-post-image-accordion' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'blog-post-image-accordion' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'blog-post-image-accordion') . '</p></div>', $message );
	}
}

// Instantiate bpiacrdn-author-bio.
new FinalBPIACRDNImageAccordion();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );