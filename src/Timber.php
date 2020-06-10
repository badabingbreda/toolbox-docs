<?php

namespace Badabingbreda\ToolboxDocs;

add_filter( 'toolbox_twig_views_locations'      , __NAMESPACE__ . '\add_twigs_dir' , 25 ,1  );


/**
 * Filter to add the theme and child-theme dir to the views
 * put theme-child dir first, if not found look in theme dir
 * @param [type] $views [description]
 */
function add_twigs_dir( $views ) {

    return array_merge( $views, array(

                TOOLBOXDOCS_DIR . 'twig_templates',

            )
		);
}