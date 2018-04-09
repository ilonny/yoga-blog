<?php
use yii\helpers\Url;
use app\helpers\FileHelper;
$formatter = \Yii::$app->formatter;
$cat_link = Url::to(['/site/category', 'id' => $post->category_id]);
$detail_link = Url::to(['/site/detailview', 'id' => $post->id]);
?>
<div class="detailview">
    <div class="post">
        <div class="post-top">
            <a href="<?= $cat_link; ?>" class="post__category"><?= $post->getCategoryName(); ?></a>
            <div class="post__date"><?= $formatter->asDatetime($post->create_at, "php:d-m-Y"); ?></div>
        </div>
        <div class="post__title">Nam eu nisi non quam ultrices lacinia</div>
        <div class="img-wrap">
            <img src="/images/post-preview.jpg">
        </div>
        <div class="post-text"><?= $post->text; ?></div>
    </div>
    <div class="related">
        <div class="related__title">Похожие публикации</div>
        <div class="row">
            <?php foreach ($related_posts as $model): ?>
                <?php $detail_link = Url::to(['/site/detailview', 'id' => $model->id]); ?>
                <div class="col-xs-4 related-block">
                    <a href="<?= $detail_link; ?>" class="img-wrap">
                        <img src="<?= FileHelper::getImageThumb($model->img_src_short, 345, 225); ?>">
                    </a>
                    <a href="<?= $detail_link; ?>" class="related-block__title">Nullam fringilla mattis velit</a>
                    <div class="related-block__date"><?= $formatter->asDatetime($model->create_at, "php:d-m-Y"); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>