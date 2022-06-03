<?php // Template output for interactive map ?>
<?php $mapPath = esc_url(site_url() . "/wp-content/plugins/zlta-custom-modules/modules/zlta-interactive-map/assets/map.svg"); ?>
<?php echo file_get_contents($mapPath); ?>

<div class="zlta-interactive-map--wrapper">
    <h1>Map Here</h1>
    <div class="modal-box--wrapper">
        <div class="modal-box" id = "modal_Run3">
            <span class="close-btn">&times;</span>
            <h1 class="runHeader">Run #3</h1>
            <img src="images/cow.png" alt="moo">
            <ul id = "descriptorList" style="list-style-type:none;">
                <li class="speed">Speed: XXX </li>
                <li class="distance">Distance: XXX </li>
                <li class="elevation">Elevation: XXX</li>
            </ul>
        </div>

        <div class="modal-box" id = "modal_Run4">
            <span class="close-btn">&times;</span>
            <h1 class="runHeader">Run #4</h1>
            <img src="images/cow.png" alt="moo">
            <ul id = "descriptorList" style="list-style-type:none;">
                <li class="speed">Speed: XXXx </li>
                <li class="distance">Distance: XXXx </li>
                <li class="elevation">Elevation: XXXx</li>
            </ul>
        </div>

        <div class="modal-box" id = "modal_Run5">
            <span class="close-btn">&times;</span>
            <h1 class="runHeader">Run #5</h1>
            <img src="images/cow.png" alt="moo">
            <ul id = "descriptorList" style="list-style-type:none;">
                <li class="speed">Speed: XXXx </li>
                <li class="distance">Distance: XXXx </li>
                <li class="elevation">Elevation: XXXx</li>
            </ul>
        </div>

        <div class="modal-box" id = "modal_Run6">
            <span class="close-btn">&times;</span>
            <h1 class="runHeader">Run #6</h1>
            <img src="images/cow.png" alt="moo">
            <ul id = "descriptorList" style="list-style-type:none;">
                <li class="speed">Speed: XXXx </li>
                <li class="distance">Distance: XXXx </li>
                <li class="elevation">Elevation: XXXx</li>
            </ul>
        </div>

        <div class="modal-box" id = "modal_Run7">
            <span class="close-btn">&times;</span>
            <h1 class="runHeader">Run #7</h1>
            <img src="images/cow.png" alt="moo">
            <ul id = "descriptorList" style="list-style-type:none;">
                <li class="speed">Speed: XXXx </li>
                <li class="distance">Distance: XXXx </li>
                <li class="elevation">Elevation: XXXx</li>
            </ul>
        </div>

    </div>
</div>

<div id="tooltip" display="none" style="position: absolute; display: none;"></div>
