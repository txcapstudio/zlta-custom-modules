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
FLBuilder::register_module( 'ZLTAInteractiveMap', array(
    'general'       => array( // Tab
        'title'         => __('Modal Content', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Modal Content', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'modal_content_form'     => array(
                        'type'          => 'form',
                        'label'         => __('Add Modal', 'fl-builder'),
                        'form'          => 'map_modal_form',
                        'show_remove'   => false,
                        'multiple'      => true
                    ),
                )
            )
        )
    )
) );

/**
 * Register settings form
 */
FLBuilder::register_settings_form('map_modal_form', array(
    'title' => __('Map Modal Form Field', 'fl-builder'),
    'tabs'  => array(
        'general'      => array(
            'title'         => __('General', 'fl-builder'),
            'sections'      => array(
                'general'       => array(
                    'title'         => '',
                    'fields'        => array(
                        'run_title'         => array(
                            'type'          => 'text',
                            'label'         => __('Run Name', 'fl-builder')
                        ),
                        'run_photo'         => array(
                            'type'          => 'photo',
                            'label'         => __('Run Photo', 'fl-builder')
                        ),
                        'run_max_speed'         => array(
                            'type'          => 'text',
                            'label'         => __('Run Max Speed', 'fl-builder')
                        ),
                        'run_distance'         => array(
                            'type'          => 'text',
                            'label'         => __('Run Distance', 'fl-builder')
                        ),
                        'run_elevation'         => array(
                            'type'          => 'text',
                            'label'         => __('Run Elevation', 'fl-builder')
                        ),
                    )
                ),
            )
        )
    )
));