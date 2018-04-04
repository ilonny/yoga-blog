<header class="menu">
    <div class="content">
        <div class="left">
            <ul class="menu-hrefs">
                <li class="li has-ul">
                    <a href="#">Home</a>
                    <ul>
                        <li><a href="">Home inside</a></li>
                        <li><a href="">Home inside 2</a></li>
                    </ul>
                </li>
                <li><a href="">Life style</a></li>
                <li><a href="">Nature</a></li>
                <li><a href="">Sports</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">View details</a></li>
                <li><a href="">buy now</a></li>
            </ul>
        </div>
        <div class="right">
            <div class="social-wrap">
                <a href="" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
                <a href="" target="_blank" class="vk"><i class="fa fa-vk"></i></a>
                <a href="" target="_blank" class="ph"><i class="fa fa-phone"></i></a>
                <a href="" target="_blank" class="yt"><i class="fa fa-youtube"></i></a>
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
        <li class="li has-ul">
            <a href="#">Home</a>
            <ul>
                <li><a href="">Home inside</a></li>
                <li><a href="">Home inside 2</a></li>
                <?php for ($i=1; $i<=10; $i++): ?>
                <li><a href="">Home inside 2</a></li>                
                <?php endfor; ?>
            </ul>
        </li>
        <li><a href="">Life style</a></li>
        <li><a href="">Nature</a></li>
        <li><a href="">Sports</a></li>
        <li><a href="">Shop</a></li>
        <li><a href="">View details</a></li>
        <li><a href="">buy now</a></li>
    </ul>
</div>