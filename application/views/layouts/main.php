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

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="container" class="container">
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
        <?= $this->render('logo.php'); ?>
        <div class="content">
            <div class="main-content">
                <div class="left-side">
                    <?= $content ?>
                </div>
                <div class="right-side">
                    <?php
                        $author = Author::findOne(1);
                    ?>
                    <?= $this->render('right_side.php', [
                        'author' => $author,
                        'social' => $social
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
