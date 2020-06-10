<?php

namespace Badabingbreda\ToolboxDocs;

add_action( 'init' , __NAMESPACE__ . '\register_modules' , 100, 1 );

function register_modules() {

	// bail early if Beaver Builder doesn't exist
	if ( !class_exists( 'FLBuilderModel' ) ) return;

	// bail early if Timber doesn't exist
	if ( !class_exists( 'Timber' ) ) return;

	foreach( array_filter( glob( TOOLBOXDOCS_DIR . 'modules/*' ) , 'is_dir' ) as $directory ) {
	    // $file contains the name and extension of the file
	    if ( file_exists( "$directory/settings.php" ) ) {
	    	require_once( "$directory/settings.php" );
	    }
	}

}
