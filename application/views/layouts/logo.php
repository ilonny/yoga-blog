<a href="/" class="site-logo content">
    <img src="<?= $logo->img_src; ?>" class="site-logo__img" <?=$logo->max_width ? "style='max-width: {$logo->max_width}px; width: 100%;' " : ''; ?>>
    <?php if ($logo->text): ?>
        <p class="site-logo__text"><?= $logo->text; ?></p>
    <?php endif; ?>
</a>