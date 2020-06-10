<?php

namespace Badabingbreda\ToolboxDocs;

add_action( 'init', __NAMESPACE__ . '\register_custom_post_type_docs' );
add_action( 'init', __NAMESPACE__ . '\register_taxonomy_section' );

function register_custom_post_type_docs() {

	/**
	 * Post Type: Docs.
	 */

	$labels = [
		"name" => __( "Docs", "toolbox-docs" ),
		"singular_name" => __( "Doc", "toolbox-docs" ),
	];

	$args = [
		"label" => __( "Docs", "toolbox-docs" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "docs", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-aside",
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"taxonomies" => [ ],
	];

	register_post_type( "docs", $args );

}

function register_taxonomy_section() {

	/**
	 * Taxonomy: Sections.
	 */

	$labels = [
		"name" => __( "Sections", "toolbox-docs" ),
		"singular_name" => __( "Section", "toolbox-docs" ),
	];

	$args = [
		"label" => __( "Sections", "toolbox-docs" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'section', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "section",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];

	register_taxonomy( "section", [ "docs" ], $args );
}
