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
        <?php for ($i=1; $i<=4; $i++): ?>
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

<div class="border-block practice">
    <div class="border-block__title">Для практики</div>
    <a href="" target="_blank">
        <img src="/images/practice.png">
    </a>
</div>

<div class="border-block video">
    <div class="border-block__title">Youtube video</div>
    <iframe src="https://www.youtube.com/embed/8OBfr46Y0cQ?list=PLpcSpRrAaOaqMA4RdhSnnNcaqOVpX7qi5" frameborder="0" width="100%"></iframe>
</div>

<div class="border-block video">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-page" data-href="https://www.facebook.com/promenadethemes/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/promenadethemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/promenadethemes/">Promenade Themes</a></blockquote></div>
</div>

<div class="border-block discusses">
    <div class="border-block__title">Популярное</div>
    <div class="list">
        <?php for ($i=1; $i<=4; $i++): ?>
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
    </