<h1 style="font-size: 22px; margin-bottom: 30px;">Рузльтаты поиска</h1>
<?php if ($posts):?>
    <?= $this->render('posts', [
        'pages' => $pages,
        'posts' => $posts,
    ]); ?>
<?php else: ?>
    <h6>Ничего не найдено</h6>
<?php endif; ?>