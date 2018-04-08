<h1 style="font-size: 22px; margin-bottom: 30px;"><?= $category->name; ?></h1>
<?= $this->render('posts', [
    'pages' => $pages,
    'posts' => $posts,
]); ?>