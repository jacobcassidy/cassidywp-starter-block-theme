<?php
/**
 * Getter functions that retrieve properties for assets set in the config settings below
 *
 * @package CassidyWP\StarterBlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyWP\StarterBlockTheme;

/**
 * Retrieves theme assets properties
 *
 * Configurable asset properties: `file|cat|handle|deps|(media|args)`.
 *
 * @since 1.0.0
 * @param string $asset_type The type of asset being retrieved: `style|script|editor_ui_style|editor_ui_script`.
 * @return array A list of assets properties.
 */
function get_theme_assets( string $asset_type ): array {
	// Theme stylesheet asset configuration settings: `file|handle|deps|media`.
	$styles_config = array(
		'type'   => 'style',
		'assets' => array(
			array(
				'file' => 'screen.css',
			),
		),
	);

	// Theme script asset configuration settings: `file|cat|handle|deps|args`.
	$scripts_config = array(
		'type'   => 'script',
		'assets' => array(
			array(
				'file' => 'script.js',
			),
			array(
				'file' => 'splide-config.js',
			),
			array(
				'file' => 'wow.min.js',
				'cat'  => 'library',
			),
			array(
				'file' => 'splide.min.js',
				'cat'  => 'library',
			),
		),
	);

	// Editor UI stylesheet asset configuration settings: `file|handle|deps|media`.
	$editor_ui_styles_config = array(
		'type'   => 'editor_ui_style',
		'assets' => array(),
	);

	// Editor UI script asset configuration settings: `file|handle|deps|args`.
	$editor_ui_scripts_config = array(
		'type'   => 'editor_ui_script',
		'assets' => array(
			array(
				'file' => 'editor.js',
			),
		),
	);

	// Sets which config settings to return.
	$assets_config = match ( $asset_type ) {
		'styles'            => $styles_config,
		'scripts'           => $scripts_config,
		'editor_ui_styles'  => $editor_ui_styles_config,
		'editor_ui_scripts' => $editor_ui_scripts_config,
	};

	return process_theme_assets( $assets_config );
}

/**
 * Retrieves editor stylesheets properties for `add_editor_style()`
 *
 * Configurable asset properties: `file`.
 *
 * @since 1.0.0
 * @return array A multidimensional array of editor stylesheet properties.
 */
function get_editor_styles(): array {
	$editor_styles_config = array(
		array(
			'file' => 'editor.css',
		),
	);

	return process_editor_styles( $editor_styles_config );
}

/**
 * Retrieves block pattern categories properties
 *
 * @since 1.0.0
 * @return array A multidimensional array of block pattern categories properties.
 */
function get_block_pattern_categories(): array {
	return array(
		'boxes'    => array(
			'label'       => __( 'Boxes', 'cassidywp-starter-block-theme' ),
			'description' => __( 'A collection of box patterns.', 'cassidywp-starter-block-theme' ),
		),
		'heros'    => array(
			'label'       => __( 'Heros', 'cassidywp-starter-block-theme' ),
			'description' => __( 'A collection of header heros patterns.', 'cassidywp-starter-block-theme' ),
		),
		'pages'    => array(
			'label'       => __( 'Pages', 'cassidywp-starter-block-theme' ),
			'description' => __( 'A collection of of full page layouts.', 'cassidywp-starter-block-theme' ),
		),
		'sections' => array(
			'label'       => __( 'Sections', 'cassidywp-starter-block-theme' ),
			'description' => __( 'A collection of page sections.', 'cassidywp-starter-block-theme' ),
		),
	);
}

/**
 * Retrieves individual block stylesheets properties
 *
 * Properties are auto-generated with `process_block_styles()`. Nothing to configure here.
 *
 * @since 2.0.7
 * @return array List of individual block stylesheet properties.
 */
function get_block_styles(): array {
	return process_block_styles();
}
