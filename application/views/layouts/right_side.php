<?php
    use app\helpers\FileHelper;
    use yii\helpers\Url;
?>
<div class="border-block author">
    <a href="<?= Url::to(['site/about']); ?>" class="border-block__title">Об авторе</a>
    <a href="<?= Url::to(['site/about']); ?>" class="author-img">
        <img src="<?= FileHelper::getImageThumb($author->img_src, 150, 150); ?>">
    </a>
    <a href="<?= Url::to(['site/about']); ?>" class="author__name"><?= $author->name; ?></a>
    <div class="author__text"><?= $author->text; ?></div>
    <div class="author-social">
        <?php foreach ($social as $key => $soc): ?>
            <?php $icon = $soc->getSocialIcon(); ?>
            <a href=<?= $soc->link; ?> target="_blank"><i class="<?= $icon; ?>"></i></a>
        <?php endforeach; ?>
    </div>
</div>

<?php if ($most_comment_posts): ?>
    <div class="border-block discusses">
        <div class="border-block__title">Обсуждаемое</div>
        <div class="list">
            <?php foreach ($most_comment_posts as $post): ?>
                <div class="item">
                    <a href="<?= $post->getDetailLink(); ?>" target="_blank" class="img-wrap">
                        <img src="<?=FileHelper::getImageThumb($post->img_src_short, 80, 80); ?>">
                    </a>
                    <div class="right">
                        <a href="<?= $post->getDetailLink(); ?>" class="title"><?= $post->title; ?></a>
                        <div class="date"><?=$post->formatPostDate(); ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
<?php if ($practice_image): ?>
    <div class="border-block practice">
        <div class="border-block__title">Для практики</div>
        <?php foreach ($practice_image as $practice_model): ?>
            <a href="<?= $practice_model->link; ?>" target="_blank">
                <img src="<?= $practice_model->img_src; ?>">
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if ($iframes): ?>
    <?php foreach($iframes as $iframe): ?>
        <div class="border-block video">
            <div class="border-block__title">Youtube video</div>
            <?= $iframe->iframe_code; ?>
        </div>
    <?php endforeach;?>
<?php endif; ?>

<?php if ($widgets): ?>
    <?php foreach($widgets as $widget): ?>
        <div class="border-block video">
            <?= $widget->iframe_code; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php if ($popular_posts): ?>
<div class="border-block discusses">
    <div class="border-block__title">Популярное</div>
    <div class="list">
        <?php foreach ($popular_posts as $post): ?>
            <div class="item">
                <a href="<?= $post->getDetailLink(); ?>" target="_blank" class="img-wrap">
                    <img src="<?=FileHelper::getImageThumb($post->img_src_short, 80, 80); ?>">
                </a>
                <div class="right">
                    <a href="<?= $post->getDetailLink(); ?>" class="title"><?= $post->title; ?></a>
                    <div class="date"><?= $post->formatPostDate(); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>