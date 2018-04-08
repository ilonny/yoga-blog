<?php 
$this->title = $model->topic;
use yii\helpers\Url;
?>
<?php if ($model->topic): ?>
<div class="questions post">
    <div class="question">
        <h1 class="question__topic"><?= $model->topic; ?></h1>
        <div><blockquote class="q"><?= $model->content; ?></blockquote></div>
        <div class="question__answer"> <?= $model->answer; ?> </div>
    </div>    
    <a href="<?= Url::to(['site/contact']); ?>" class="pd10 m10">Задать вопрос</a>    
</div>
<?php else:?>
    <p>Такого вопроса не существует</p>
    <a href="<?= Url::to(['site/contact']); ?>" class="pd10 m10">Задать вопрос</a>
<?php endif;?>