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
			'red_dragon_portfolio_recent-project-showcase',
			array(
				'label'       => __( 'Recent Project Showcase', 'red-dragon-portfolio' ),
				'description' => __( 'A collection of recent project showcase patterns.', 'red-dragon-portfolio' ),
			)
		);

		register_block_pattern_category(
			'red_dragon_portfolio_list',
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

// Disable theme blocks in post editor but allow them in site editor
if ( ! function_exists( 'red_dragon_portfolio_disable_theme_blocks' ) ) :
	/**
	 * Disables theme blocks in the post editor while keeping them available in the site editor.
	 *
	 * @since Red Dragon Portfolio 1.0
	 *
	 * @param bool|array $allowed_block_types Array of allowed block type slugs, or boolean to enable/disable all.
	 * @param WP_Block_Editor_Context $block_editor_context The current block editor context.
	 *
	 * @return array Array of allowed block types.
	 */
	function red_dragon_portfolio_disable_theme_blocks( $allowed_block_types, $block_editor_context ) {
		// Only apply restrictions in the post editor, not the site editor
		if ( isset( $block_editor_context->post ) && ! empty( $block_editor_context->post ) ) {
			// Get all registered blocks
			$registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();
			$all_blocks = array_keys( $registered_blocks );
			
			// Define theme blocks to exclude from post editor
			$theme_blocks = array(
				'core/navigation',
				'core/site-logo',
				'core/site-title',
				'core/site-tagline',
				'core/query',
				'core/post-title',
				'core/post-excerpt',
				'core/post-featured-image',
				'core/post-author',
				'core/post-author-name',
				'core/post-author-biography',
				'core/post-content',
				'core/post-date',
				'core/post-modified-date',
				'core/post-terms',
				'core/post-categories',
				'core/post-tags',
				'core/post-navigation-link',
				'core/read-more',
				'core/comments',
				'core/post-comments-form',
				'core/comments-title',
				'core/comments-pagination',
				'core/comments-pagination-next',
				'core/comments-pagination-numbers',
				'core/comments-pagination-previous',
				'core/comment-author-name',
				'core/comment-content',
				'core/comment-date',
				'core/comment-edit-link',
				'core/comment-reply-link',
				'core/comment-template',
				'core/loginout',
				'core/term-description',
				'core/archive-title',
				'core/search-results-title',
				'core/author-biography',
				'core/avatar',
				'core/template-part',
				'core/query-pagination',
				'core/query-pagination-next',
				'core/query-pagination-numbers',
				'core/query-pagination-previous',
				'core/query-title',
				'core/query-no-results'
			);
			
			// Filter out theme blocks from available blocks
			$allowed_blocks = array_diff( $all_blocks, $theme_blocks );
			
			// Return sequential array (important to avoid JS errors)
			return array_values( $allowed_blocks );
		}
		
		// Return all blocks for site editor and other contexts
		return $allowed_block_types;
	}
endif;
add_filter( 'allowed_block_types_all', 'red_dragon_portfolio_disable_theme_blocks', 10, 2 );
