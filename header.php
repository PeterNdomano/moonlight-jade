<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo('name').' | '.get_bloginfo('description') ?></title>
        <?php wp_head() ?>
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
                        <h3><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo('name') ?></a></h3>
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

            <section class="mn-banner">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12" style="min-height: 70vh;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="mn-site-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/werenium_logo.png"/>
                                        <h1 class="mn-text-light mn-h2" style="color: var(--lightColor);">
                                            <?php echo get_bloginfo('name') ?>
                                        </h1>
                                        <h6 class="text-light mn-h3" style="margin-top: 30px;">
                                            <?php echo get_bloginfo('description') ?>
                                        </h6>
                                        <!-- you can add more text here to describe your site in summary-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card mn-intro-card bg-primary">
                                            <div class="card-body text-right text-light">
                                                <h1 class="mn-h1">130+</h1>
                                                <h5>Customers Served</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4"></div><!-- Just a spacer -->
                                            <div class="col-md-8">
                                                <div class="card mn-intro-card bg-warning">
                                                    <div class="card-body text-right">
                                                        <h1 class="mn-h1">24/7</h1>
                                                        <h5>Available</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
