<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mock up</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/mdb/css/mdb.min.css"></link>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css"></link>

        <script src="<?php echo get_template_directory_uri() ?>/assets/libs/jquery-3.2.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/libs/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/libs/mdb/js/mdb.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/topbar.js"></script>
    </head>
    <body>
        <header>
            <nav class="mn-topbar mn-topbar-fixed">
                <div class="d-flex mn-full-height container">
                    <div class="mn-menu-btn align-self-center p-2" onclick="mnToggleMenu()">
                        <i class="icon-menu"></i>
                    </div>
                    <div class="mn-topbar-title align-self-center p-1">
                        <h3><a href="#">Site Title</a></h3>
                    </div>
                    <div class="mn-nav-items-container-lg flex-grow-1 mn-full-height d-flex justify-content-end">
                        <div class="mn-nav-item align-self-center" data-active="true">
                            <h3><a href="#">Home</a></h3>
                        </div>
                        <div class="mn-nav-item align-self-center">
                            <h3><a href="#">Blog</a></h3>
                        </div>
                        <div class="mn-nav-item align-self-center">
                            <h3><a href="#">Products</a></h3>
                        </div>
                        <div class="mn-nav-item align-self-center">
                            <h3><a href="#">Services</a></h3>
                        </div>
                        <div class="mn-nav-item align-self-center">
                            <h3><a href="#">About</a></h3>
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
        </header>
    </body>
</html>
