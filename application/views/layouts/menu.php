<?php
    use yii\helpers\Url;
?>
<header class="menu">
    <div class="content">
        <div class="left">
            <ul class="menu-hrefs">
                <?php foreach ($cats as $key => $cat): ?>
                <?php $subs = $cat->getSubs($cat->id); ?>
                    <li <?= $subs ? 'class="li has-ul"' : ''; ?>>
                        <a href="<?= Url::to(['site/category', 'id' => $cat->id]); ?>"><?= $cat->name; ?></a>
                        <?php if ($subs): ?>
                            <ul>
                                <?php $count_sub = 0; foreach ($subs as $key_sub => $sub): ?>
                                    <?php if ($sub->getPostsCount()): $count_sub++;?>
                                        <li><a href="<?= Url::to(['site/category', 'id' => $sub->id]); ?>"><?= $sub->name; ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                <li><a href="<?= Url::to(['/site/about']) ?>">Обо мне</a></li>
                <li><a href="<?= Url::to(['/site/contact']) ?>">Задать вопрос</a></li>
            </ul>
        </div>
        <div class="right">
            <a class="phone-wrap" href="tel:+79262537911">
                <i class="fa fa-phone"></i>
                <p>+7 (926)-253-79-11</p>
            </a>
            <div class="social-wrap">
                <?php foreach ($social as $key => $soc): ?>
                    <?php $icon = $soc->getSocialIcon(); ?>
                    <a href=<?= $soc->link; ?> target="_blank"><i class="<?= $icon; ?>"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu-top">
    <div class="hamburger">
        <div class="inner"></div>
    </div>
    <a href="" class="phone-link">
        <!-- <div class="fa fa-phone"></div> -->
        <p>Здесь более 400 статей про йогу</p>
    </a>
</div>
<div class="mobile-menu">
    <ul class="menu-hrefs sm sm-mint" id="mobile-menu">
        <?php foreach ($cats as $key => $cat): ?>
        <?php $subs = $cat->getSubs($cat->id); ?>
            <li <?= $subs ? 'class="li has-ul"' : ''; ?>>
                <a href="<?= Url::to(['site/category', 'id' => $cat->id]); ?>"><?= $cat->name; ?></a>
                <?php if ($subs): ?>
                    <ul>
                        <?php $count_sub = 0; foreach ($subs as $key_sub => $sub): ?>
                            <?php if ($sub->getPostsCount()): $count_sub++;?>
                                <li><a href="<?= Url::to(['site/category', 'id' => $sub->id]); ?>"><?= $sub->name; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
        <li><a href="<?= Url::to(['/site/about']) ?>">Обо мне</a></li>
        <li><a href="<?= Url::to(['/site/contact']) ?>">Задать вопрос</a></li>
    </ul>
</div>