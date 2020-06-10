<?php
/**
 * ToolboxDocs List Sections Module
 * @since 1.0
 */
\FLBuilder::register_module_alias( 'toolboxdocs-sections-overview', array(
	'module'      => 'acftimber',
	'name'        => __( 'Sections Overview', 'toolbox-docs' ),
	'description' => __( 'Sections Overview', 'toolbox-docs' ),
	'group'			=> __( 'Toolbox Docs', 'toolbox-docs' ),
	'category'    => __('Single', 'toolbox-docs' ),
	'enabled'           => true,
	//'icon'			=> TOOLBOXDOCS_DIR . 'modules/blog-segments.svg',
	'settings'    => array(
		'timber_template'         => file_get_contents( TOOLBOXDOCS_DIR . 'twig_templates/toolboxdocs-sections-overview.snippet' ),
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
		'settings_form_name'	=> 'toolboxdocs-sections-overview-settings',
	),
) );

\FLBuilder::register_settings_form('toolboxdocs-sections-overview-settings', array(
    'title' => __('Sections Overview Settings', 'toolbox-docs'),
    'tabs'  => array(
        'general'      => array(
            'title'         => __('General', 'toolbox-docs'),
            'sections'      => array(
                'general'       => array(
                    'title'         => 'General',
                    'fields'        => array(

                    	// Search all pages.
                    	'parent_post' => array(
                    	    'type'          => 'suggest',
                    	    'label'         => __( 'Parent Post', 'toolbox-docs' ),
                    	    'action'        => 'fl_as_posts', // posts/terms/users/links
                    	    'data'          => 'docs', // Slug of the post type to search.
                    	    'limit'         => 3, // Limits the number of selections that can be made.
                    	),

                    	'style' 	=> array(
                    	    'type'          => 'select',
                    	    'label'         => __( 'Display Style', 'toolbox-docs' ),
                    	    'default'       => 'option-1',
                    	    'options'       => array(
                    	        'close'      => __( 'Accordion Sections', 'toolbox-docs' ),
                    	        'open'      => __( 'Show Everything', 'toolbox-docs' ),
                    	    ),
                    	    'multi-select'	=> false,
                    	),

/* section end */
					)
				),
            ),
        ),
    ),
));