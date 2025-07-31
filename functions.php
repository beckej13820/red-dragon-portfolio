<?php
/**
 * Red Dragon Portfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Red Dragon Portfolio 1.0
 */

// Removes WordPress.org core block patterns.

add_action( 'init', function() {
	remove_theme_support( 'core-block-patterns' );
});

// Adds theme support for post formats.
if ( ! function_exists( 'red_dragon_portfolio_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return void
	 */
	function red_dragon_portfolio_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'red_dragon_portfolio_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'red_dragon_portfolio_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return void
	 */
	function red_dragon_portfolio_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'red_dragon_portfolio_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'red_dragon_portfolio_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return void
	 */
	function red_dragon_portfolio_enqueue_styles() {
		wp_enqueue_style(
			'red-dragon-portfolio-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'red_dragon_portfolio_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'red_dragon_portfolio_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return void
	 */
	function red_dragon_portfolio_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'red-dragon-portfolio' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'red_dragon_portfolio_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'red_dragon_portfolio_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return void
	 */
	function red_dragon_portfolio_pattern_categories() {

		register_block_pattern_category(
			'red_dragon_portfolio_page',
			array(
				'label'       => __( 'Pages', 'red-dragon-portfolio' ),
				'description' => __( 'A collection of full page layouts.', 'red-dragon-portfolio' ),
			)
		);

		register_block_pattern_category(
			'red_dragon_portfolio_post-format',
			array(
				'label'       => __( 'Post formats', 'red-dragon-portfolio' ),
				'description' => __( 'A collection of post format patterns.', 'red-dragon-portfolio' ),
			)
		);

		register_block_pattern_category(
			'red_dragon_portfolio_portfolio-banners',
			array(
				'label'       => __( 'Portfolio Banners', 'red-dragon-portfolio' ),
				'description' => __( 'A collection of portfolio banner patterns.', 'red-dragon-portfolio' ),
			)
		);
		

		register_block_pattern_category(
			'red_dragon_portfolio/recent-project-showcase',
			array(
				'label'       => __( 'Recent Project Showcase', 'red-dragon-portfolio' ),
				'description' => __( 'A collection of recent project showcase patterns.', 'red-dragon-portfolio' ),
			)
		);

		register_block_pattern_category(
			'red_dragon_portfolio/list',
			array(
				'label'       => __( 'Lists', 'red-dragon-portfolio' ),
				'description' => __( 'A collection of list text style patterns.', 'red-dragon-portfolio' ),
			)
		);
	}
endif;
add_action( 'init', 'red_dragon_portfolio_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'red_dragon_portfolio_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return void
	 */
	function red_dragon_portfolio_register_block_bindings() {
		register_block_bindings_source(
			'red-dragon-portfolio/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'red-dragon-portfolio' ),
				'get_value_callback' => 'red_dragon_portfolio_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'red_dragon_portfolio_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'red_dragon_portfolio_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function red_dragon_portfolio_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
