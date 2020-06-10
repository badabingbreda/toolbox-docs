<?php
/**
 * ToolboxDocs List Sections Module
 * @since 1.0
 */
\FLBuilder::register_module_alias( 'toolboxdocs-breadcrumbs', array(
	'module'      => 'acftimber',
	'name'        => __( 'Crumblepath', 'toolbox-docs' ),
	'description' => __( 'Crumblepath', 'toolbox-docs' ),
	'group'			=> __( 'Toolbox Docs', 'toolbox-docs' ),
	'category'    => __('Single', 'toolbox-docs' ),
	'enabled'           => true,
	//'icon'			=> TOOLBOXDOCS_DIR . 'modules/blog-segments.svg',
	'settings'    => array(
		'timber_template'         => file_get_contents( TOOLBOXDOCS_DIR . 'twig_templates/toolboxdocs-breadcrumbs.snippet' ),
		// 'sel_post_type'			=> 'posttype',
		// 'timber_getfunc'		=> 'postquery',
		// 'post_type'				=> array( 'events' ),
		// 'orderby'				=> 'date',
		// 'order'					=> 'ASC',
		// 'posts_per_page'		=> -1,
		// 'posts_filter'			=> 'mg_agenda_params',
		// 'margin_top_responsive' => 5,
		// 'margin_bottom_responsive' => 5,
		// 'margin_left_responsive' => 5,
		// 'margin_right_responsive' => 5,
		// 'margin_responsive_unit' => 'px',
	),
) );
