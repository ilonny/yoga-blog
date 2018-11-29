<?php
use yii\helpers\Url;
?>
<footer class="footer">
    <div class="content container">
        <div class="footer-top row">
            <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">Меню</div>
                <div class="footer-top-col-hrefs">
                    <?php foreach($cats as $cat): ?>
                        <a href="<?= Url::to(['site/category', 'id' => $cat->id]); ?>"><?= $cat->name; ?></a>
                    <?php endforeach; ?>
                    <a href="<?= Url::to(['/site/about']) ?>">Обо мне</a>
                    <a href="<?= Url::to(['/site/contact']) ?>">Задать вопрос</a>
                </div>
            </div>
            <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">Недавние публикации</div>
                <div class="footer-top-col-hrefs">
                    <?php foreach ($recent_posts as $post): ?>
                        <a href="<?= $post->getDetailLink(); ?>">
                            <?= yii\helpers\StringHelper::truncate($post->title, 37, '...'); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">Категории</div>
                <div class="footer-top-col-hrefs">
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                </div>
            </div> -->
            <div class="footer-top-col col-xs-12 col-md-6">
                <div class="footer-top-col__title"> немного О сайте</div>
                <div class="footer-top-col-hrefs" style="margin-bottom: 15px;">
                    <p>Вы зашли на мой - преподавателя йоги Алексей Соколовского - персональный сайт и блог. Намастэ! 
                    <br />
                    Как здесь сориентироваться и что здесь есть полезного? Этот сайт поможет вам:<br />
                    * Начать практику йоги с нуля (см. раздел &laquo;База знаний \ Начинающим&raquo;);<br />
                    * Укрепить здоровье и провести чистки организма (&laquo;База знаний \ Йога для здоровья&raquo;);<br />
                    * Узнать о том, как именно делать ту или иную асану или пранаяму (см. раздел &laquo;База знаний \ Асаны&raquo;);<br />
                    * Разобраться в особенностях разных стилей и практиках йоги, и выбрать своё (&laquo;База знаний \ Стили йоги&raquo;);<br />
                    * Продвинуться в практике йоги (&laquo;База знаний \ Продолжающим&raquo;);<br />
                    * Начать преподавать йогу (&laquo;Блог \ Преподавателям&raquo;).<br />
                    В блоге также помещаются обзоры главных товаров для йоги: ковриков и одежды (&laquo;Блог \ Обзоры&raquo;). <br />
                    <!-- А в разделах &laquo;Занятия&raquo; и &laquo;Ретриты&raquo; вы сможете узнать о моих ближайших занятиях и записаться на них со скидкой! <br />
                    Хотите задать вопрос о нюансах практики йоги и почитать мои ответы на самые типичные вопрос? Вам в раздел &laquo;Задать вопрос&raquo;.<br />
                    Считаете, что &laquo;лучше один раз увидеть&raquo;? &ndash; вам в раздел &laquo;Йога-видео&raquo;.<br />
                    В разделе &laquo;Блог&raquo; я публикую спорные статьи о самых актуальных трендах в йоге у нас и за рубежом. Хотите обсудить? Оставьте комментарий к статье.<br /> -->
                    </p>
                </div>
                <form class="site-search-wrap" action="/site/search" method="POST">
                    <label>Поиск по сайту</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-social row">
            <div class="social">
                <?php foreach ($social as $key => $soc): ?>
                    <?php $icon = $soc->getSocialIcon(); ?>
                    <a href=<?= $soc->link; ?> target="_blank"><i class="<?= $icon; ?>"></i></a>
                <?php endforeach; ?>
            </div>
            <a class="popup-with-zoom-anim" href="#policy-modal" style="color:#787878;">Политика конфиденциальности</a>
            <br>
            <span style="color:#787878;"><a href="#sub-modal" class="popup-with-zoom-anim" style="    display: inline;text-decoration: underline;cursor: pointer;color:#787878;">Подписаться</a> на рассылку для получения новостей сайта и эксклюзивных подарков: мини-книг, вебинаров, видео, статей &laquo;только по подписке&raquo;.</span>
        </div>
        <div class="footer footer-bottom row">
            <div class="col col-xs-12 col-md-6">Copyright © All rights reserved.</div>
            <div class="col col-xs-12 col-md-6 text-right">
                Блог Алексея Соколовского
                <br><a style="color:#fff;" href="https://fflames.ru" target="_blank">Создание сайтов</a>
            </div>
        </div>
    </div>
</footer>