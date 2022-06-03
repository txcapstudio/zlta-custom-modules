<?php
/**
 * Plugin Name: ZLTA Beaver Builder Custom Modules
 * Plugin URI: http://www.wpbeaverbuilder.com
 * Description: An example plugin for creating custom builder modules.
 * Version: 2.0
 * Author: TXCAPstudio
 * Author URI: http://www.wpbeaverbuilder.com
 */
define( 'ZLTA_EXAMPLES_DIR', plugin_dir_path( __FILE__ ) );
define( 'ZLTA_EXAMPLES_URL', plugins_url( '/', __FILE__ ) );

require_once ZLTA_EXAMPLES_DIR . 'classes/class-zlta-modules-example-loader.php';