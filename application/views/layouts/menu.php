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
                        <a href=""><?= $cat->name; ?></a>
                        <?php if ($subs): ?>
                            <ul>
                                <?php foreach ($subs as $sub): ?>
                                    <li><a href=""><?= $sub->name; ?></a></li>
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
        <div class="fa fa-phone"></div>
        <p>8 (800) 3221-232</p>
    </a>
</div>
<div class="mobile-menu">
    <ul class="menu-hrefs sm sm-mint" id="mobile-menu">
        <?php foreach ($cats as $key => $cat): ?>
            <?php $subs = $cat->getSubs($cat->id); ?>
            <li <?= $subs ? 'class="li has-ul"' : ''; ?>>
                <a href=""><?= $cat->name; ?></a>
                <?php if ($subs): ?>
                    <ul>
                        <?php foreach ($subs as $sub): ?>
                            <li><a href=""><?= $sub->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>