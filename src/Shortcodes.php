<?php

namespace Badabingbreda\ToolboxDocs;

add_filter( 'the_content', __NAMESPACE__ . '\bweb_prevent_shortcode', 9);

/**
 * Allow shortcodes to be displayed without being rendered
 * wrap the shortcode in <code></code> or <pre</pre>
 * @param  [type] $content [description]
 * @return [type]          [description]
 */
function bweb_prevent_shortcode( $content ) {
	$pattern = '#(<pre.*?>|<code.*?>)(.*?)(<\/pre>|<\/code>)#imsu';

	return preg_replace_callback( $pattern, __NAMESPACE__ . '\bweb_replace_shortcode', $content );

}

function bweb_replace_shortcode($string) {

    $replace = array( '[' => '&#91;', ']' => '&#93;' );

    $newstring = str_replace( array_keys( $replace ), array_values( $replace ), $string[2] );

    return $string[1] . $newstring . $string[3];
}
