<?php
/**
 * Remove unwanted Core WordPress features
 *
 * @package CassidyWP\StarterBlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyWP\StarterBlockTheme;

/**
 * Remove unwanted core blocks
 */
if ( ! function_exists( 'CassidyWP\StarterBlockTheme\remove_core_blocks' ) ) :
	/**
	 * Remove unwanted core blocks
	 *
	 * @since 1.0.0
	 * @return string[] A list of core block slugs.
	 */
	function remove_core_blocks(): array {
		$blocks = \WP_Block_Type_Registry::get_instance()->get_all_registered();

		unset( $blocks['core/latest-comments'] );
		unset( $blocks['core/comments'] );
		unset( $blocks['core/post-comments-form'] );

		return array_keys( $blocks );
	}
endif;

add_action( 'allowed_block_types_all', 'CassidyWP\StarterBlockTheme\remove_core_blocks' );

/**
 * Remove core block patterns
 */
if ( ! function_exists( 'CassidyWP\StarterBlockTheme\remove_core_block_patterns' ) ) :
	/**
	 * Remove core block patterns
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function remove_core_block_patterns(): void {
		remove_theme_support( 'core-block-patterns' );
	}
endif;

add_action( 'after_setup_theme', 'CassidyWP\StarterBlockTheme\remove_core_block_patterns' );

/**
 * Remove Openverse
 */
if ( ! function_exists( 'CassidyWP\StarterBlockTheme\disable_openverse' ) ) :
	/**
	 * Remove Openverse from the editor
	 *
	 * @since 1.0.0
	 * @param array $editor_settings An array of settings for the editor.
	 * @return array The editor settings.
	 */
	function disable_openverse( array $editor_settings ): array {
		$editor_settings['enableOpenverseMediaCategory'] = false;
		return $editor_settings;
	}
endif;

add_filter( 'block_editor_settings_all', 'CassidyWP\StarterBlockTheme\disable_openverse', 10, 2 );

/**
 * Remove the WordPress font library UI
 */
if ( ! function_exists( 'CassidyWP\StarterBlockTheme\remove_font_library_ui' ) ) :
	/**
	 * Remove the WordPress font library UI
	 *
	 * @since 1.0.0
	 * @link https://developer.wordpress.org/reference/hooks/block_editor_settings_all/
	 * @param array $editor_settings An array of settings for the editor.
	 * @return array The editor settings.
	 */
	function remove_font_library_ui( array $editor_settings ): array {
		$editor_settings['fontLibraryEnabled'] = false;
		return $editor_settings;
	}
endif;

add_filter( 'block_editor_settings_all', 'CassidyWP\StarterBlockTheme\remove_font_library_ui' );

/**
 * Remove WordPress Remote Block Patterns from the editor block inserter.
 *
 * @since 1.0.0
 * @link https://developer.wordpress.org/block-editor/reference-guides/filters/editor-filters/#should_load_remote_block_patterns
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Remove WordPress Block Directory from the editor block inserter.
 *
 * @since 1.0.0
 * @link https://developer.wordpress.org/block-editor/reference-guides/filters/editor-filters/#block-directory
 */
remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );