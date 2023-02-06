<?php
namespace BPIACRDNImageAccordion;

use BPIACRDNImageAccordion\PageSettings\Page_Settings;
define( "BPIACRDN_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BPIACRDN_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class Classbpiacrdnimageaccordion {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bpiacrdn_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bpiacrdn_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bpiacrdn_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bpiacrdn_the_pricing_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bpiacrdn-imageaccordion.php' );
	}

	public function bpiacrdn_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\bpiacrdnImageAccordion() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/blog-post-image-accordion-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bpiacrdn_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bpiacrdn-image-accordion-category',
			[
				'title' => esc_html__( 'Blog Post Image Accordion', 'blog-post-image-accordion' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bpiacrdn_all_assets_for_the_public(){
		$all_css_js_file = array(
            'image-accordion-fontAwesome' => array('bpiacrdn_path_define'=>BPIACRDN_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'image-accordion-style' => array('bpiacrdn_path_define'=>BPIACRDN_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bpiacrdn_path_define'], null, '1.0', 'all');
        }
	}
	public function bpiacrdn_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'image-accordion-admin-icon' => array('bpiacrdn_path_admin_define'=>BPIACRDN_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bpiacrdn_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bpiacrdn_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bpiacrdn_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bpiacrdn_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bpiacrdn_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bpiacrdn_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
Classbpiacrdnimageaccordion::instance();