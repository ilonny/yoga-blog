<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Блог | Главная';
?>
<div class="slider-wrap">
    <?= $this->render('slider', [
            'slides' => $slides,
        ]);
    ?>
</div>