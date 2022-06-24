<?php // Template output for interactive map ?>

<div class="zlta-interactive-map--wrapper">

    <div id="tooltip" style="position: absolute; display: none;"></div>

    <div class="zlta-interactive-map--image-container">
        <div class="zlta-interactive-map--svg">
            <?php
            $mapPath = ZLTA_EXAMPLES_DIR . '/modules/zlta-interactive-map/assets/ZLTA_Map_Runs_v3.svg';
            echo file_get_contents($mapPath);
            ?>
        </div>
        <div class="zlta-interactive-map--base">
            <img src="<?php echo esc_url(site_url() . '/wp-content/plugins/zlta-custom-modules/modules/zlta-interactive-map/assets/ZLTA_Map_Base_v2.png'); ?>" />
        </div>
    </div>


    <div class="modal-box--wrapper">

        <div class="modal-box--overlay"></div>

        <div class="modal-box--container">
            <a href="#" class="close-btn">&times;</a>

            <?php $run_index = 3; ?>
            <?php foreach ( $settings->modal_content_form as $modal) : ?>
                <div class="modal-box" id="modal_Run<?php echo $run_index; ?>">
                    <h3 class="runHeader"><?php echo $modal->run_title; ?></h3>
                    <div class = "ul-image--wrapper">
                    <img class = "modal-image" src="<?php echo $modal->run_photo_src; ?>" />
                    <ul id = "descriptorList" style="list-style-type:none;">
                        <li class="speed">Max Speed: <?php echo $modal->run_max_speed; ?> mph</li>
                        <li class="distance">Distance: <?php echo $modal->run_distance; ?>' </li>
                        <li class="elevation">Elevation: <?php echo $modal->run_elevation; ?>'</li>
                    </ul>
                    </div>
                </div>
            <?php $run_index++; ?>
            <?php endforeach; ?>
        </div>

    </div>
</div>
