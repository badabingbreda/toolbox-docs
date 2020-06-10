<?php
/**
 * Toolbox Docs
 *
 * @package     Toolbox
 * @author      Badabingbreda
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Toolbox Docs
 * Plugin URI:  https://www.badabing.nl
 * Description: Create Docs section for WordPress and Beaver Builder
 * Version:     1.0.0
 * Author:      Badabingbreda
 * Author URI:  https://www.badabing.nl
 * Text Domain: toolbox-docs
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

define( 'TOOLBOXDOCS_VERSION' 	, '1.0.0' );
define( 'TOOLBOXDOCS_DIR'			, plugin_dir_path( __FILE__ ) );
define( 'TOOLBOXDOCS_FILE'		, __FILE__ );
define( 'TOOLBOXDOCS_URL' 		, plugins_url( '/', __FILE__ ) );

require_once( 'src/Timber.php' );
require_once( 'src/CustomFields.php' );
require_once( 'src/CustomPostType.php' );
require_once( 'src/Shortcodes.php' );
require_once( 'src/BBModules.php' );