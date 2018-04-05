<?php
    use app\helpers\FileHelper;
?>
<div class="border-block author">
    <div class="border-block__title">Об авторе</div>
    <div class="author-img">
        <img src="<?= FileHelper::getImageThumb($author->img_src, 150, 150); ?>">
    </div>
    <div class="author__name"><?= $author->name; ?></div>
    <div class="author__text"><?= $author->text; ?></div>
    <div class="author-social">
        <?php foreach ($social as $key => $soc): ?>
            <?php $icon = $soc->getSocialIcon(); ?>
            <a href=<?= $soc->link; ?> target="_blank"><i class="<?= $icon; ?>"></i></a>
        <?php endforeach; ?>
    </div>
</div>

<div class="border-block discusses">
    <div class="border-block__title">Обсуждаемое</div>
    <div class="list">
        <?php for ($i=1; $i<=5; $i++): ?>
            <div class="item">
                <a href="" target="_blank" class="img-wrap">
                    <img src="<?=FileHelper::getImageThumb('/images/recent.jpg', 80, 80); ?>">
                </a>
                <div class="right">
                    <a href="" class="title">Nam eu nisi non quam ultrices lacinia</a>
                    <div class="date">February 20, 2017</div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>