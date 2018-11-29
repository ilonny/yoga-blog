<?php
use app\models\InstagramGallery;
use app\models\UserSocial;
use app\helpers\FileHelper;
$models = InstagramGallery::find()->orderBy('id DESC')->all();
$user_inst = UserSocial::find()->andWhere(['social_id' => 3])->one();
?>
<div class="bottom-gallery">
    <a href="<?= $user_inst->link; ?>" target="_blank" class="bottom-gallery-text">
        <div class="fa fa-instagram"></div>
        <p>Follow me</p>
    </a>
    <div class="wrap">
        <?php foreach ($models as $model): ?>
            <a class="block" href="<?= $model->link; ?>" target="_blank"> 
                <img src="<?= FileHelper::getImageThumb($model->img_src, 150, 150); ?>">
            </a>
        <?php endforeach; ?>
    </div>
</div>