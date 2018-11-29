<?php
use yii\helpers\Url;
use app\helpers\FileHelper;
$this->registerJsFile('/js/detailview.js', ['depends' => 'app\assets\AppAsset']);
$this->registerMetatag(['name' => 'og:title', 'content' => $post->title]);
//Url::home(true)
$this->registerMetatag(['name' => 'og:image', 'content' => $post->img_src]);

$this->title = "Блог Алексея Соколовского | Йога-видео";
?>
<style>
    iframe{
        display: block;
        margin: auto;
        margin-bottom: 30px;
    }
</style>
<div class="posts row">
    <div class="post__title">Йога-видео</div>
    <?php foreach($iframes as $model): ?>
        <?= $model->iframe_code; ?>
    <?php endforeach; ?>
</div>