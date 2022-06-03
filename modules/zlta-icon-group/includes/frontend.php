<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

?>


<?php 
 $classlist = ( !empty($settings->description) ) ? 'zlta-icon-group--wrapper has_description' : 'zlta-icon-group--wrapper';
?>

<div class="<?php echo $classlist; ?>">
    <div class="zlta-icon-group--icon-holder">
        <img src="<?php echo $settings->icon_src; ?>" />
    </div>
    <div class="zlta-icon-group--content-holder">
        <h4 class="zlta-icon-group--title"><?php echo $settings->title; ?></h4>
        <?php if ( !empty($settings->description) ) : ?>
            <p class="zlta-icon-group--description"><?php echo $settings->description; ?></p>
        <?php endif; ?>
    </div>
</div>