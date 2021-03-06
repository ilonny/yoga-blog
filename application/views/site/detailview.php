<?php
use yii\helpers\Url;
use app\helpers\FileHelper;
$this->registerJsFile('/js/detailview.js', ['depends' => 'app\assets\AppAsset']);
$this->registerMetatag(['name' => 'og:title', 'content' => $post->title]);
//Url::home(true)
$this->registerMetatag(['name' => 'og:image', 'content' => $post->img_src]);

$this->title = $post->title;
?>
<div class="detailview">
    <div class="post">
        <div class="post-top">
            <a href="<?= $cat_link; ?>" class="post__category"><?= $post->getCategoryName(); ?></a>
            <div class="post__date"><?= $post->formatPostDate(); ?></div>
        </div>
        <div class="post__title"><?= $post->title; ?></div>
        <div class="img-wrap">
            <img src="<?= $post->img_src; ?>">
        </div>
        <div class="post-text"><?= $post->text; ?></div>
    </div>
    <?php if ($related_posts): ?>
        <div class="related">
            <div class="related__title">Похожие публикации</div>
            <div class="row">
                <?php foreach ($related_posts as $model): ?>
                    <div class="col-xs-12 col-md-4 related-block">
                        <a href="<?= $model->getDetailLink(); ?>" class="img-wrap">
                            <img src="<?= FileHelper::getImageThumb($model->img_src_short, 345, 225); ?>">
                        </a>
                        <a href="<?= $model->getDetailLink(); ?>" class="related-block__title"><?= $model->title; ?></a>
                        <div class="related-block__date"><?= $model->formatPostDate(); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- share -->
    <div class="comments__title">Поделиться</div>    
    <div id="my-share"></div>    
    <!-- reviews -->
    <div class="comments">
    <?php $reviews = $post->getReviews(); ?>
        <div class="comments__title">Комментарии (<?= count($reviews); ?>)</div>
        <?php if ($reviews): ?>
            <?php foreach ($reviews as $comment): ?>
                <div class="question">
                    <div class="question__topic"><?= $comment->title; ?></div>
                    <div><blockquote class="q"><?= $comment->text; ?></blockquote></div>
                    <div class="question__answer"> <?= $comment->answer; ?> </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Комментриев нет, оставьте первый комментарий</p>
        <?php endif; ?>
        <div class="post__title">Оставить комментарий</div>        
        <form class="question-form">
            <input type="hidden" name="post_id" value="<?= $post->id; ?>">
            <div class="row">
                <div class="col-xs-12">
                    <label>Заголовок комментрия</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col-xs-12">
                    <label>Текст комментария</label>
                    <textarea class="form-control" name="text" cols="30" rows="10"></textarea>
                </div>
                <div class="col-xs-12 col-md-6">
                    <label>Ваше имя</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-xs-12 col-md-6">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-xs-12"> 
                    <button class="btn btn-hov">Отправить</button>
                </div>
                <div class="col-xs-12">
                    <div class="error-summary"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<script>
var myShare = document.getElementById('my-share');

Ya.share2('my-share', {
    content: {
        url: '<?= Url::home(true).Url::to(['site/detailview', id=> $post->id]); ?>',
        title: '<?= $post->title;  ?>',
        description: '<?= $post->text_short; ?>',
        image: 'http://yogalex.ru<?= $post->img_src; ?>'
    }
});
</script>