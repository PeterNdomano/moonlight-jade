<nav class="mn-topbar mn-topbar-fixed">
    <div class="d-flex mn-full-height container">
        <div class="mn-menu-btn align-self-center p-2" onclick="mnToggleMenu()">
            <i class="icon-menu"></i>
        </div>
        <div class="mn-topbar-title align-self-center p-1">
            <h3><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo('name') ?></a></h3>
        </div>
        <div class="mn-nav-items-container-lg flex-grow-1 mn-full-height d-flex justify-content-end">
            <div class="mn-nav-item align-self-center" data-active="true">
                <h3><a href="<?php echo get_bloginfo('url') ?>">Home</a></h3>
            </div>
            <div class="mn-nav-item align-self-center">
                <h3><a href="<?php echo get_bloginfo('url') ?>/index.php/blog">Blog</a></h3>
            </div>
            <div class="mn-nav-item align-self-center">
                <h3><a href="<?php echo get_bloginfo('url') ?>/index.php/products">Products</a></h3>
            </div>
            <div class="mn-nav-item align-self-center">
                <h3><a href="<?php echo get_bloginfo('url') ?>/index.php/services">Services</a></h3>
            </div>
            <div class="mn-nav-item align-self-center">
                <h3><a href="<?php echo get_bloginfo('url') ?>/index.php/about">About</a></h3>
            </div>
            <div class="mn-nav-item align-self-center">
                <h3><a href="#">Contact</a></h3>
            </div>
        </div>
    </div>
</nav>

<aside class="mn-nav-items-container-sm" data-open="false">
    <div class="mn-nav-item" data-active="true">
        <h3><a href="#">Home</a></h3>
    </div>
    <div class="mn-nav-item">
        <h3><a href="#">Blog</a></h3>
    </div>
    <div class="mn-nav-item">
        <h3><a href="#">Products</a></h3>
    </div>
    <div class="mn-nav-item">
        <h3><a href="#">Services</a></h3>
    </div>
    <div class="mn-nav-item">
        <h3><a href="#">About</a></h3>
    </div>
    <div class="mn-nav-item">
        <h3><a href="#">Contact</a></h3>
    </div>
</aside>
