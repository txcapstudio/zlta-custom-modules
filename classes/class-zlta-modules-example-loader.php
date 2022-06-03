<?php
	
/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class ZLTA_Modules_Example_Loader {
	
	/**
	 * Initializes the class once all plugins have loaded.
	 */
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}
	
	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	static public function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;	
		}
		
		// Load custom modules.
		add_action( 'init', __CLASS__ . '::load_modules' );
		
		// Register custom fields.
//		add_filter( 'fl_builder_custom_fields', __CLASS__ . '::register_fields' );
		
		// Enqueue custom field assets.
//		add_action( 'init', __CLASS__ . '::enqueue_field_assets' );
	}
	
	/**
	 * Loads our custom modules.
	 */
	static public function load_modules() {
		require_once ZLTA_EXAMPLES_DIR . 'modules/zlta-icon-group/zlta-icon-group.php';
        require_once ZLTA_EXAMPLES_DIR . 'modules/zlta-interactive-map/zlta-interactive-map.php';
	}
	
}

ZLTA_Modules_Example_Loader::init();