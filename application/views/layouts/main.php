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
use app\models\YoutubeIframe;
use app\models\PracticeImage;
use app\models\WidgetIframe;
use app\models\Metatags;
use app\models\Logo;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
        <div class="content container">
            <div class="main-content">
                <?php $logo = Logo::findOne(1); ?>                
                <div class="left-side">
                    <?= $this->render('logo.php', ['logo' => $logo]); ?>                    
                    <?= $content ?>
                </div>
                <div class="right-side">
                    <?php
                        $author = Author::findOne(1);
                        $most_comment_posts = Post::getMostComments();
                        $popular_posts = Post::find()->andWhere(['popular' => 1])->orderBy('id DESC')->all();
                        $iframes = YoutubeIframe::find()->orderBy('position')->all();
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
            $recent_posts = Post::find()->orderBy('create_at DESC')->limit(7)->all();
        ?>
        <?= $this->render('footer', [
            'cats' => $menu_cats,
            'social' => $social,
            'recent_posts' => $recent_posts,
        ]); ?>
    </div>
<?php $this->endBody() ?>
<div class="bottom-offer">
    <div class="content">
        <div class="close">×</div>
        <div class="sub-modal-form__title popup-with-zoom-anim href" href="#sub-modal">Подпишитесь на рассылку эксклюзивных авторских материалов о йоге (мини-книги, вебинары) и скидок на занятия!</div>
    </div>
</div>
<div class="sub-modal mfp-hide zoom-anim-dialog std-modal" id="sub-modal">
    <form class="sub-modal-form" id="sub-modal-form">
        <div class="sub-modal-form__title">Подпишитесь на рассылку эксклюзивных авторских материалов о йоге (мини-книги, вебинары) и скидок на занятия!</div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Ваше имя" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="E-mail" class="form-control">
        </div>
        <button class="btn">Отправить</button>
        <div class="error-summary"></div>
    </form>
</div>

<div class="sub-modal mfp-hide zoom-anim-dialog std-modal" id="policy-modal">
    <div style="color:#fff">
        <p>Мы признаем важность конфиденциальности информации. В этом документе описывается, какую личную информацию мы получаем и собираем, когда вы пользуетесь сайтом. Мы надеемся, что эти сведения помогут вам принимать осознанные решения в отношении предоставляемой нам личной информации.
            <br><br><span>Общедоступная информация</span><br>
            Если вы просто просматриваете сайт, информация о вас не собирается и нигде не публикуется.
            <br><br><span>Электронная почта</span><br>
            Адрес электронной почты, указываемый вами при регистрации, не показывается другим посетителям сайта. Мы можем использовать ваш адрес электронной почты, чтобы отвечать на вопросы и рассылать информацию по нашему проекту при условии вашего согласия.
            <br><br><span>Оплата</span><br>
            При оплате участия в игре указываемые вами данные (Ф.И.О. и электронная почта) не сообщаются третьим лицам и используются только для того, чтобы высылать вам регистрационные данные и информацию по проекту. 
            <br><br><span>Протоколирование</span><br>
            При каждом посещении сайта наши серверы автоматически записывают информацию, которую ваш браузер передает при посещении веб-страниц. Как правило, эта информация включает запрашиваемую веб-страницу, IP-адрес компьютера, тип браузера, языковые настройки браузера, дату и время запроса, а также один или несколько файлов cookie, которые позволяют точно идентифицировать ваш браузер.
            <br><br><span>Изменения в политике конфиденциальности</span><br>
            Обратите внимание, что политика конфиденциальности может периодически изменяться. Все изменения политики конфиденциальности публикуются на этой странице.
        </p>
    </div>
</div>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48692360 = new Ya.Metrika({ id:48692360, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48692360" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118290864-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118290864-1');
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'ejaMH793YF';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE --> 
</body>
</html>
<?php $this->endPage() ?>
