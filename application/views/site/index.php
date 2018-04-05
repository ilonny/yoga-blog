<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->registerJsFile('/js/index.js', ['depends' => '\app\assets\AppAsset']);
$this->title = 'Блог | Главная';
?>
<?= $this->render('slider', [
        'slides' => $slides,
    ]);
?>