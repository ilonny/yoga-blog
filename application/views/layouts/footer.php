<footer class="footer">
    <div class="content container">
        <div class="footer-top row">
            <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">Меню</div>
                <div class="footer-top-col-hrefs">
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                </div>
            </div>
            <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">Меню</div>
                <div class="footer-top-col-hrefs">
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                </div>
            </div>
            <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">Категории</div>
                <div class="footer-top-col-hrefs">
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                </div>
            </div>
            <div class="footer-top-col col-xs-12 col-md-3">
                <div class="footer-top-col__title">About theme</div>
                <div class="footer-top-col-hrefs">Blog way is minimal blog theme. This responsive theme is best to use for personal,  travel, food blog as well as informative websites. It comes with options to change the color of entire site, author profile widget, social links and more.</div>                    
            </div>
        </div>
        <div class="footer-social row">
            <div class="social">
                <?php foreach ($social as $key => $soc): ?>
                    <?php $icon = $soc->getSocialIcon(); ?>
                    <a href=<?= $soc->link; ?> target="_blank"><i class="<?= $icon; ?>"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer footer-bottom row">
            <div class="col col-xs-12 col-md-6">Copyright © All rights reserved.</div>
            <div class="col col-xs-12 col-md-6 text-right">Блог Алексея Соколовского</div>
        </div>
    </div>
</footer>