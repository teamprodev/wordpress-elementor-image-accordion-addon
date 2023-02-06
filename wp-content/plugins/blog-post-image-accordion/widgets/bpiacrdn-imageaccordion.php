<?php
namespace BPIACRDNImageAccordion\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly bpiacrdn_icon

class bpiacrdnImageAccordion extends \Elementor\Widget_Base {

	public function get_name() {
		return 'BlogPostImageAccordion';
	}

	public function get_title() {
		return esc_html__( 'Blog Post Image Accordion', 'bpiacrdn-image-accordion' );
	}

	public function get_icon() {
		return 'eicon-accordion bpiacrdn-image-accordion';
	}

	public function get_categories() {
		return [ 'bpiacrdn-image-accordion-category' ];
	}

	public function get_keywords() {
		return [ 'image', 'accordion', 'bwd', 'hover' ];
	}

	public function get_script_depends() {
		return [ 'bpiacrdn-iamge-accordion-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bpiacrdn_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'blog-post-image-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bpiacrdn_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'blog-post-image-accordion' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', 'blog-post-image-accordion' ),
					'2' => esc_html__( 'Style 2', 'blog-post-image-accordion' ),
					'3' => esc_html__( 'Style 3', 'blog-post-image-accordion' ),
					'4' => esc_html__( 'Style 4', 'blog-post-image-accordion' ),
					'5' => esc_html__( 'Style 5', 'blog-post-image-accordion' ),
					'6' => esc_html__( 'Style 6', 'blog-post-image-accordion' ),
					'7' => esc_html__( 'Style 7', 'blog-post-image-accordion' ),
					'8' => esc_html__( 'Style 8', 'blog-post-image-accordion' ),
					'9' => esc_html__( 'Style 9', 'blog-post-image-accordion' ),
					'10' => esc_html__( 'Style 10', 'blog-post-image-accordion' ),
					'11' => esc_html__( 'Style 11', 'blog-post-image-accordion' ),
					'12' => esc_html__( 'Style 12', 'blog-post-image-accordion' ),
					'13' => esc_html__( 'Style 13', 'blog-post-image-accordion' ),
					'14' => esc_html__( 'Style 14', 'blog-post-image-accordion' ),
					'15' => esc_html__( 'Style 15', 'blog-post-image-accordion' ),
					'16' => esc_html__( 'Style 16', 'blog-post-image-accordion' ),
					'17' => esc_html__( 'Style 17', 'blog-post-image-accordion' ),
					'18' => esc_html__( 'Style 18', 'blog-post-image-accordion' ),
					'19' => esc_html__( 'Style 19', 'blog-post-image-accordion' ),
					'20' => esc_html__( 'Style 20', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->add_control(
			'bpiacrdn_the_blog_type',
			[
				'label' => esc_html__( 'Blog Type', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post',
				'options' => [
					'post' => esc_html__( 'Post', 'blog-post-image-accordion' ),
					'page' => esc_html__( 'Page', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpiacrdn_image_link_show_switcher',
			[
				'label' => esc_html__( 'Image Link', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpiacrdn_title',
			[
				'label' => esc_html__( 'Title', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpiacrdn_title_link',
			[
				'label' => esc_html__( 'Title Link', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'bpiacrdn_title' => 'yes',
				],
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpiacrdn_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'div'  => esc_html__( 'Div', 'bwdib-icon-box' ),
					'h1' => esc_html__( 'H1', 'bwdib-icon-box' ),
					'h2' => esc_html__( 'H2', 'bwdib-icon-box' ),
					'h3' => esc_html__( 'H3', 'bwdib-icon-box' ),
					'h4' => esc_html__( 'H4', 'bwdib-icon-box' ),
					'h5' => esc_html__( 'H5', 'bwdib-icon-box' ),
					'h6' => esc_html__( 'H6', 'bwdib-icon-box' ),
					'p' => esc_html__( 'p', 'bwdib-icon-box' ),
				],
			]
		);
		$this->add_control(
			'bpiacrdn_description_show_switcher',
			[
				'label' => esc_html__( 'Description', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bpiacrdn_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'blog-post-image-accordion' ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', 'blog-post-image-accordion' ),
					'show' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->add_control(
			'bpiacrdn_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'blog-post-image-accordion' ),
				'placeholder' => esc_html__( 'j M y', 'blog-post-image-accordion' ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bpiacrdn_author_show_switcher',
			[
				'label' => esc_html__( 'Author', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bpiacrdn_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', 'blog-post-image-accordion' ),
					'gravatar' => esc_html__( 'Gravatar', 'blog-post-image-accordion' ),
					'icon' => esc_html__( 'Author Icon', 'blog-post-image-accordion' ),
				],
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
					'bpiacrdn_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_author_icon',
			[
				'label' => esc_html__( 'Icon', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
					'bpiacrdn_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bpiacrdn_products_actions_section',
			[
				'label' => esc_html__( 'Action', 'blog-post-image-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// =========================================
		$this->add_control(
			'bpiacrdn_cart_btn',
			[
				'label' => esc_html__( 'Status', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_cart_type',
			[
				'label' => esc_html__( 'Select Type', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text',
				'options' => [
					'text' => esc_html__( 'Text', 'blog-post-image-accordion' ),
					'icon' => esc_html__( 'Icon', 'blog-post-image-accordion' ),
				],
				'condition' => [
					'bpiacrdn_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_cart_button',
			[
				'label' => esc_html__('Button', 'blog-post-image-accordion'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Read More', 'blog-post-image-accordion'),
				'condition' => [
					'bpiacrdn_cart_type' => 'text',
					'bpiacrdn_cart_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bpiacrdn_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'bpiacrdn_cart_type' => 'icon',
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bpiacrdn_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$bpiacrdn_array = get_users();
		foreach ($bpiacrdn_array as $bpiacrdn_author){
			$bpiacrdn_id = $bpiacrdn_author->ID;
			$bpiacrdn_name = $bpiacrdn_author->display_name;
			$bpiacrdn_get_array[$bpiacrdn_id] = $bpiacrdn_name;
		}
		$this->add_control(
			'bpiacrdn_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'options' => $bpiacrdn_get_array,
			]
		);
		$this->add_control(
			'bpiacrdn_the_all_date',
			[
				'label' => esc_html__( 'Date', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'blog-post-image-accordion' ),
					'd' => esc_html__( 'Today', 'blog-post-image-accordion' ),
					'm' => esc_html__( 'Current Month', 'blog-post-image-accordion' ),
					'coustom' => esc_html__( 'Coustom', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'blog-post-image-accordion' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'blog-post-image-accordion' ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'blog-post-image-accordion' ),
					'1' => esc_html__( 'Jan', 'blog-post-image-accordion' ),
					'2' => esc_html__( 'Feb', 'blog-post-image-accordion' ),
					'3' => esc_html__( 'Mar', 'blog-post-image-accordion' ),
					'4' => esc_html__( 'Apr', 'blog-post-image-accordion' ),
					'5' => esc_html__( 'May', 'blog-post-image-accordion' ),
					'6' => esc_html__( 'Jun', 'blog-post-image-accordion' ),
					'7' => esc_html__( 'Jul', 'blog-post-image-accordion' ),
					'8' => esc_html__( 'Aug', 'blog-post-image-accordion' ),
					'9' => esc_html__( 'Sep', 'blog-post-image-accordion' ),
					'10' => esc_html__( 'Oct', 'blog-post-image-accordion' ),
					'11' => esc_html__( 'Nov', 'blog-post-image-accordion' ),
					'12' => esc_html__( 'Dec', 'blog-post-image-accordion' ),
				],
				'condition' => [
					'bpiacrdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'blog-post-image-accordion' ),
				'placeholder' => esc_html__( '00', 'blog-post-image-accordion' ),
				'condition' => [
					'bpiacrdn_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'blog-post-image-accordion' ),
					'author' => esc_html__( 'Author', 'blog-post-image-accordion' ),
					'title' => esc_html__( 'Title', 'blog-post-image-accordion' ),
					'id' => esc_html__( 'ID', 'blog-post-image-accordion' ),
					'date' => esc_html__( 'Date', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_order',
			[
				'label' => esc_html__( 'Order', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'blog-post-image-accordion' ),
					'ASC' => esc_html__( 'Ascending', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->add_control(
			'bpiacrdn_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 4,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'blog-post-image-accordion' ),
			]
		);
		$this->add_control(
			'bpiacrdn_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bpiacrdn_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_main_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'blog-post-image-accordion' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'blog-post-image-accordion' ),
				],
				'condition' => [
					'bpiacrdn_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$bpiacrdn_idObj = get_category_by_slug('category-slug');
		$bpiacrdn_order_options = array($bpiacrdn_idObj => 'All Categories');
		$bpiacrdn_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($bpiacrdn_categories as $category):
			$bpiacrdn_catids = $category->slug;
			$bpiacrdn_catname = $category->name;
			$bpiacrdn_order_options[$bpiacrdn_catids] = $bpiacrdn_catname;
		endforeach;
		$this->add_control(
			'bpiacrdn_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $bpiacrdn_order_options,
			]
		);
		$this->add_control(
			'bpiacrdn_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'blog-post-image-accordion' ),
				'label_off' => esc_html__( 'Hide', 'blog-post-image-accordion' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$bpiacrdn_idObj = get_tag('tags-slug');
		$bpiacrdn_order_optionst = array($bpiacrdn_idObj => 'All Tags');
		$bpiacrdn_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($bpiacrdn_ta as $tag):
			$bpiacrdn_tagids = $tag->slug;
			$bpiacrdn_tagname = $tag->name;
			$bpiacrdn_order_optionst[$bpiacrdn_tagids] = $bpiacrdn_tagname;
		endforeach;
		$this->add_control(
			'bpiacrdn_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => $bpiacrdn_idObj,
				'options' => $bpiacrdn_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bpiacrdn_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'blog-post-image-accordion' ),
					'number-and-text' => esc_html__( 'Number and Text', 'blog-post-image-accordion' ),
					'number' => esc_html__( 'Number', 'blog-post-image-accordion' ),
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'filter_center',
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'bpiacrdn_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item' => 'justify-content: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'blog-post-image-accordion' ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'blog-post-image-accordion' ),
				'label_block' => true,
				'condition' => [
					'bpiacrdn_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->end_controls_section();

		/**
		 * 
		 * @ Start style controls from here
		 * 
		 */

		 $this->start_controls_section(
			'bpiacrdn_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_title_alignment',
			[
				'label' => esc_html__( 'Title Alignment', 'blog-post-image-accordion' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'separator' => 'after',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bpiacrdn_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_title_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-title a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-title a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-title a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_content_horizontal_alignment',
			[
				'label' => esc_html__( 'Horizontal Alignment', 'blog-post-image-accordion' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'blog-post-image-accordion' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box' => 'align-items: {{VALUE}}',
					'{{WRAPPER}} .bpiacrdn-prodpriratwrap' => 'justify-content: {{VALUE}}',
					'{{WRAPPER}} .bpiacrdn-atcart-btn, {{WRAPPER}} .bpiacrdn-decs, {{WRAPPER}} .bpiacrdn-title' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_content_vertical_alignment',
			[
				'label' => esc_html__( 'Vertical Alignment', 'blog-post-image-accordion' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'top' => [
						'title' => esc_html__( 'Top', 'blog-post-image-accordion' ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'blog-post-image-accordion' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => esc_html__( 'Bottom', 'blog-post-image-accordion' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'toggle' => true,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'bpiacrdn_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_boxshadow',
				'label' => esc_html__( 'Content Shadow', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_border',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bpiacrdn_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-style-nine .bpiacrdn-content-box::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'bpiacrdn_select_style_selection' => 'nine',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpiacrdn-style-one .bpiacrdn-prodRatingWrap, {{WRAPPER}} .bpiacrdn-content-box:hover::before, {{WRAPPER}} .bpiacrdn-style-ten .bpiacrdn-content-box:hover .bpiacrdn-prodRatingWrap::before, {{WRAPPER}} .bpiacrdn-style-fourteen .bpiacrdn-prodRatingWrap, {{WRAPPER}} .bpiacrdn-style-twelve .bpiacrdn-content-box::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Wrap Shadow', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bpiacrdn_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_description_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_description_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodDesc .bpiacrdn-decs',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodDesc .bpiacrdn-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodDesc .bpiacrdn-decs' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-prodDesc .bpiacrdn-decs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_button_style_section',
			[
				'label' => esc_html__( 'Action Style', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_cart_btn' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_border',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bpiacrdn_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-cartBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_button_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-cartBtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img img' => 'width: {{SIZE}}px',
					'{{WRAPPER}} .bpiacrdn-single-img img' => 'height: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_categories_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_category_alignment',
			[
				'label' => esc_html__( 'Category Alignment', 'blog-post-image-accordion' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'blog-post-image-accordion' ),
						'icon' => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'blog-post-image-accordion' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => true,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img:hover .bpiacrdn-prodCat a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img:hover .bpiacrdn-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-single-img:hover .bpiacrdn-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_caategory_border',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img .bpiacrdn-prodCat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_price_options',
			[
				'label' => esc_html__( 'Date', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_date_show_switcher' => 'yes',
				],
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bpiacrdn_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-salePrice',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-salePrice:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-salePrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-salePrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_price_options',
			[
				'label' => esc_html__( 'Author', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_author_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bpiacrdn_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-regularPrice',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-regularPrice:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bpiacrdn_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-regularPrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-regularPrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_sale_style_section',
			[
				'label' => esc_html__( 'Tag', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_sale_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodSaleCount',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_sale_border',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_sale_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_sale_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodSaleCount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_type_style_section',
			[
				'label' => esc_html__( 'Comment', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bpiacrdn_blog_type_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_type_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_type_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_type_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodType',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn-content-box:hover .bpiacrdn-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_type_border',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_type_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_type_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-content-box .bpiacrdn-prodType' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bpiacrdn_blog_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bpiacrdn-for-overlay:before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bpiacrdn_blog_box2_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bpiacrdn_blog_box2_border_hover',
				'label' => esc_html__( 'Border', 'blog-post-image-accordion' ),
				'selector' => '{{WRAPPER}} .bpiacrdn-single-img',
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-for-overlay:before', '{{WRAPPER}} .bpiacrdn-single-img img', '{{WRAPPER}} .bpiacrdn-single-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn-single-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bpiacrdn_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'blog-post-image-accordion' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bpiacrdn_the_pagination_type' => ['number-and-text', 'number']
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Pagination Gap From Top', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'rem' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_pagi_item-gap',
			[
				'label' => esc_html__( 'Item Gap', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'rem' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'bpiacrdn_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'bpiacrdn_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'blog-post-image-accordion' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn_pagination_item a',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bpiacrdn_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'blog-post-image-accordion' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bpiacrdn_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .bpiacrdn_pagination_item span, {{WRAPPER}} .bpiacrdn_pagination_item a:hover',
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item span, {{WRAPPER}} .bpiacrdn_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bpiacrdn_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item span, {{WRAPPER}} .bpiacrdn_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_width',
			[
				'label' => esc_html__( 'Box Width', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bpiacrdn_blog_button_box_height',
			[
				'label' => esc_html__( 'Box Height', 'blog-post-image-accordion' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'bpiacrdn_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bpiacrdn_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'blog-post-image-accordion'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bpiacrdn_pagination_item a, {{WRAPPER}} .bpiacrdn_pagination_item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bpiacrdn_title_tags = $settings['bpiacrdn_title_tags'];
		$bpiacrdn_styles = $settings['bpiacrdn_products_zone_style'];
		$bpiacrdn_post_per_page = $settings['bpiacrdn_the_post_per_page'];
		$bpiacrdn_post_description_words = $settings['bpiacrdn_the_post_description_words'];
		$bpiacrdn_blog_word_trim_indi = $settings['bpiacrdn_blog_word_trim_indi'];
		$bpiacrdn_blog_date_format = $settings['bpiacrdn_blog_date_format'];

		$bpiacrdn_author_indicator = $settings['bpiacrdn_author_indicator'];
		$bpiacrdn_taxo_icon = $settings['bpiacrdn_taxo_icon'];

		$bpiacrdn_cart_type = $settings['bpiacrdn_cart_type'];
		$bpiacrdn_cart_btn = $settings['bpiacrdn_cart_btn'];
		$bpiacrdn_cart_button = $settings['bpiacrdn_cart_button'];
		$bpiacrdn_cart_button_icon = $settings['bpiacrdn_cart_button_icon']['value'];

		$bpiacrdn_title = $settings['bpiacrdn_title'];
		$bpiacrdn_image_link_show = $settings['bpiacrdn_image_link_show_switcher'];
		$bpiacrdn_title_link = $settings['bpiacrdn_title_link'];
		$bpiacrdn_description_swtcher = $settings['bpiacrdn_description_show_switcher'];
		$bpiacrdn_date_swtcher = $settings['bpiacrdn_date_show_switcher'];
		$bpiacrdn_author_swtcher = $settings['bpiacrdn_author_show_switcher'];
		$bpiacrdn_comments_swtcher = $settings['bpiacrdn_comments_show_switcher'];
		$bpiacrdn_categories_swtcher = $settings['bpiacrdn_categories_show_switcher'];
		$bpiacrdn_tags_swtcher = $settings['bpiacrdn_tags_show_switcher'];
		$bpiacrdn_tags_filter = $settings['bpiacrdn_the_tag_filter'];
		$bpiacrdn_cat_show_status = $settings['bpiacrdn_the_cat_show_status'];

		$bpiacrdn_categorys_dataa = $settings['bpiacrdn_the_cat_columnsdd'];
		$bpiacrdn_the_blog_type = $settings['bpiacrdn_the_blog_type'];
		$bpiacrdn_blog_order = $settings['bpiacrdn_blog_order'];
		$bpiacrdn_author = $settings['bpiacrdn_the_all_author'];
		$bpiacrdn_order_by = $settings['bpiacrdn_the_order_by'];
		
		$bpiacrdn_the_all_date = $settings['bpiacrdn_the_all_date'];
		$bpiacrdn_text_str = ' ';
		if('d' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_day = $bpiacrdn_text_str;
			$bpiacrdn_coustom_month = $bpiacrdn_text_str;
			$bpiacrdn_coustom_year = $bpiacrdn_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_day = $bpiacrdn_text_str;
			$bpiacrdn_coustom_month = $bpiacrdn_text_str;
			$bpiacrdn_coustom_year = $bpiacrdn_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_day = $bpiacrdn_text_str;
			$bpiacrdn_coustom_month = $bpiacrdn_text_str;
			$bpiacrdn_coustom_year = $bpiacrdn_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bpiacrdn_the_all_date){
			$bpiacrdn_coustom_year = $settings['bpiacrdn_blog_coustom_year'];
			$bpiacrdn_coustom_month = $settings['bpiacrdn_blog_coustom_month'];
			$bpiacrdn_coustom_day = $settings['bpiacrdn_blog_coustom_day'];
			$wdbp_time = $bpiacrdn_text_str;
		} else{
			$bpiacrdn_coustom_day = $bpiacrdn_text_str;
			$bpiacrdn_coustom_month = $bpiacrdn_text_str;
			$bpiacrdn_coustom_year = $bpiacrdn_text_str;
			$wdbp_time = $bpiacrdn_text_str;
		}

		$bpiacrdn_args = array(
			'post_type'=> $bpiacrdn_the_blog_type,
			'author__in' => $bpiacrdn_author,
			'orderby'   => $bpiacrdn_order_by,
			'order' => $bpiacrdn_blog_order,
			'post_status' => 'publish',
			'posts_per_page' => $bpiacrdn_post_per_page,
			'category_name' => $bpiacrdn_categorys_dataa,
			'date_query' => $wdbp_time,
			'year' => $bpiacrdn_coustom_year,
			'monthnum' => $bpiacrdn_coustom_month,
			'day' => $bpiacrdn_coustom_day,
		);
		$bpiacrdn_the_pagination_type = $settings['bpiacrdn_the_pagination_type'];
		$bpiacrdn_yes_value = 'yes';
		include( __DIR__ . '/template/styles.php' );
	}
	public function bpiacrdn_post_categories() {
        $bpiacrdn_categories_list = get_the_category_list(esc_html__(', ', 'blog-post-accordions'));
        if ($bpiacrdn_categories_list) {
            echo $bpiacrdn_categories_list;
        }
    }
	public function bpiacrdn_post_thumbnail_here(){
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
		} else{
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'blog-post-accordions') . '</h2>';
		}
	}
}