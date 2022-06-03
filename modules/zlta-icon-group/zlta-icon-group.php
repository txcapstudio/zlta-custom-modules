<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class FLBasicExampleModule
 */
class FLBasicExampleModule extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('ZLTA Icon Group', 'fl-builder'),
            'description'   => __('An icon block for the ZLTA amenities', 'fl-builder'),
            'category'		=> __('ZLTA Modules', 'fl-builder'),
            'dir'           => ZLTA_EXAMPLES_DIR . 'modules/zlta-icon-group/',
            'url'           => ZLTA_EXAMPLES_URL . 'modules/zlta-icon-group/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLBasicExampleModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Section Title', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'icon'     => array(
                        'type'          => 'photo',
                        'label'         => __('Icon', 'fl-builder'),
                        'show_remove'   => false,
                    ),
                    'title' => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                    ),
                    'description'    => array(
                        'type'          => 'textarea',
                        'label'         => __( 'Description', 'fl-builder' ),
                    ),
                )
            )
        )
    )
));