<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class ZLTAInteractiveMap
 */
class ZLTAInteractiveMap extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('ZLTA Interactive Map', 'fl-builder'),
            'description'   => __('An interactive map for Zip Lake Travis', 'fl-builder'),
            'category'		=> __('ZLTA Modules', 'fl-builder'),
            'dir'           => ZLTA_EXAMPLES_DIR . 'modules/zlta-interactive-map/',
            'url'           => ZLTA_EXAMPLES_URL . 'modules/zlta-interactive-map/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module( 'ZLTAInteractiveMap', array() );