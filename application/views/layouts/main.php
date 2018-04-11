<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Menu;
use app\models\UserSocial;
use app\models\Author;
use app\models\Post;
use app\models\Review;
use app\models\Logo;
use app\models\YoutubeIframe;
use app\models\PracticeImage;
use app\models\WidgetIframe;
use app\models\Metatags;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    $metatags = Metatags::find()->all();
    foreach ($metatags as $tag): ?>
        <?= $tag->value; ?>
    <?php endforeach; ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="container">
        <?php
            $menu_cats = Menu::find()
            ->andWhere(['<>', 'id', 1])
            ->andWhere(['parent_category' => 1])
            ->all();
            $social = UserSocial::find()->orderBy('sorting')->all();
        ?>
        <?= $this->render('menu.php', [
            'cats' => $menu_cats,
            'social' => $social,
        ]); ?>
        <?php $logo = Logo::findOne(1); ?>
        <?= $this->render('logo.php', ['logo' => $logo]); ?>
        <div class="content container">
            <div class="main-content">
                <div class="left-side">
                    <?= $content ?>
                </div>
                <div class="right-side">
                    <?php
                        $author = Author::findOne(1);
                        $most_comment_posts = Post::getMostComments();
                        $popular_posts = Post::find()->andWhere(['popular' => 1])->all();
                        $iframes = YoutubeIframe::find()->all();
                        $practice_image = PracticeImage::find()->all();
                        $widgets = WidgetIframe::find()->all();
                    ?>
                    <?= $this->render('right_side.php', [
                        'author' => $author,
                        'social' => $social,
                        'most_comment_posts' => $most_comment_posts,
                        'popular_posts' => $popular_posts,
                        'iframes' => $iframes,
                        'widgets' => $widgets,
                    ]); ?>
                </div>
            </div>
        </div>
        <?= $this->render('bottom_gallery'); ?>
        <?php
            $recent_posts = Post::find()->orderBy('create_at DESC')->limit(4)->all();
        ?>
        <?= $this->render('footer', [
            'cats' => $menu_cats,
            'social' => $social,
            'recent_posts' => $recent_posts,
        ]); ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
