<?php
    use yii\widgets\LinkPager;
    use yii\helpers\Url;
    use app\Helpers\FileHelper;
?>
<div class="posts row">
    <?php foreach ($posts as $key => $post): ?>
        <?php if ((++$key)%3): ?>
            <div class="col-xs-12 col-md-6">
                <div class="post">
                    <div class="post-top">
                        <a href="<?= $post->getCategoryLink(); ?>" class="post__category"><?= $post->getCategoryName(); ?></a>
                        <div class="post__date"><?= $post->formatPostDate(); ?></div>
                    </div>
                    <a href="<?= $post->getDetailLink(); ?>" class="post__title"><?= $post->title; ?></a>
                    <a href="<?= $post->getDetailLink(); ?>" class="img-wrap">
                        <img src="<?= FileHelper::getImageThumb($post->img_src_short, 345, 225); ?>">
                    </a>
                    <div class="post-description"> <?= yii\helpers\StringHelper::truncate($post->text_short, 119, '...'); ?> </div>
                    <a href="<?= $post->getDetailLink(); ?>" class="more">Читать далее</a>
                </div>
            </div>
        <?php else: ?>
            <div class="col-xs-12">
                <div class="post post--big">
                    <a href="<?= $post->getDetailLink(); ?>" class="img-wrap">
                        <img src="<?= FileHelper::getImageThumb($post->img_src_short, 345, 225); ?>">
                    </a>
                    <div class="right">
                        <div class="post-top">
                            <a href="<?= $post->getCategoryLink(); ?>" class="post__category"><?= $post->getCategoryName(); ?></a>
                            <div class="post__date"><?= $post->formatPostDate(); ?></div>
                        </div>
                        <a href="<?= $post->getDetailLink(); ?>" class="post__title">Nam eu nisi non quam ultrices lacinia</a>
                        <div class="post-description"><?= yii\helpers\StringHelper::truncate($post->text_short, 119, '...'); ?></div>
                        <a href="<?= $post->getDetailLink(); ?>" class="more">Читать далее</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<? echo LinkPager::widget([
    'pagination' => $pages,
    ]);
?>