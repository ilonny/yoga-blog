<?php
    use app\helpers\FileHelper;
?>
<div class="slider-wrap" id="index-slider">
    <?php foreach($slides as $key => $slide): ?>
        <a>
            <div class="img-wrap">
                <?= $slide->text; ?>
                <!-- <img src="<?= FileHelper::getImageThumb($slide->img_src, 770, 410); ?>"> -->
                <!-- <div class="img-wrap__text"></div> -->
            </div>
        </a>
    <?php endforeach; ?>
</div>