<?php
$this->registerJsFile('/js/contact.js', ['depends' => 'app\assets\AppAsset']);
?>
<div class="detailview contact">
    <div class="post">
        <div class="post__title">Задать вопрос</div>
        <form class="question-form">
            <div class="row">
                <div class="col-xs-12">
                    <label>Заголовок вопроса</label>
                    <input type="text" class="form-control" name="topic">
                </div>
                <div class="col-xs-12">
                    <label>Описание вопроса</label>
                    <textarea class="form-control" name="question" cols="30" rows="10"></textarea>
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
                    <button class="btn">Отправить</button>
                </div>
                <div class="error-summary"></div>
            </div>
        </form>
    </div>
</div>