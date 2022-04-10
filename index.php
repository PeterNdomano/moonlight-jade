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

            <section class="mn-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12" style="min-height: 70vh;">
                            <h1 class="mn-text-light mn-h1" style="color: var(--lightColor);">
                                Welcome Message comes here
                            </h1>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <!--two products types-->
                                <div class="col-md-6">
                                    <div class="card mn-intro-card">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mn-intro-card">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--two service types-->
                                <div class="col-md-6">
                                    <div class="card mn-intro-card">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mn-intro-card">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <section class="mn-section">
            <div class="container">
                <h3 class="mn-section-title">
                    <i class="mdi mdi-view-dashboard mn-section-icon"></i>
                    Products
                </h3>

                <div class="row">
                    <!--3 most recent products-->
                    <div class="col-md-6">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/img1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Product 1</h4>
                                    <p style="card-text">Product short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/bg1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Product 2</h4>
                                    <p style="card-text">Product short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/img1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Product 3</h4>
                                    <p style="card-text">Product short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <a class="btn mn-btn-next text-dark" href="#">
                            More Products
                            <i class="icon-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="mn-section">
            <div class="container">
                <h3 class="mn-section-title">
                    <i class="mdi mdi-view-dashboard mn-section-icon"></i>
                    Services
                </h3>

                <div class="row">
                    <!--3 most recent services-->
                    <div class="col-md-3">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/img1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Service 1</h4>
                                    <p style="card-text">Service short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/bg1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Service 2</h4>
                                    <p style="card-text">Service short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/img1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Service 3</h4>
                                    <p style="card-text">Service short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <a class="btn mn-btn-next text-dark" href="#">
                            More Services
                            <i class="icon-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mn-section">
            <div class="container">
                <h3 class="mn-section-title">
                    <i class="mdi mdi-view-dashboard mn-section-icon"></i>
                    Reviews
                </h3>

                <div class="row">
                    <!--3 most recent reviews-->
                    <div class="col-md-12 text-right">
                        <div id="reviews" class="carousel slide mn-carousel" data-ride="carousel">
                            <!-- The slideshow -->
                            <div class="carousel-inner mn-full-height">
                                <div class="carousel-item mn-full-height active">
                                    <div class="jumbotron mn-full-height text-center">
                                        <div>
                                            <i class="icon-note mn-review-quote"></i>
                                            <h3>
                                                Best Software products are here
                                            </h3>
                                            <p>Customer name, company, role</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item mn-full-height">
                                    <div class="jumbotron mn-full-height text-center">
                                        <div>
                                            <i class="icon-note mn-review-quote"></i>
                                            <h3>
                                                Best Software products are here
                                            </h3>
                                            <p>Customer name, company, role</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item mn-full-height">
                                    <div class="jumbotron mn-full-height text-center">
                                        <div>
                                            <i class="icon-note mn-review-quote"></i>
                                            <h3>
                                                Best Software products are here
                                            </h3>
                                            <p>Customer name, company, role</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev mn-carousel-btn" href="#reviews" data-slide="prev">
                                <i class="icon-arrow-left"></i>
                            </a>
                            <a class="carousel-control-next mn-carousel-btn" href="#reviews" data-slide="next">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mn-section">
            <div class="container">
                <h3 class="mn-section-title">
                    <i class="mdi mdi-view-dashboard mn-section-icon"></i>
                    Blog
                </h3>

                <div class="row">
                    <!--2 most recent blog posts-->
                    <div class="col-md-8">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/img1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Post title</h4>
                                    <p style="card-text">Service short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mn-item-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/bg1.jpg)">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title">Post title</h4>
                                    <p style="card-text">Service short description comes here hhhh hhhh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <a class="btn mn-btn-next text-dark" href="#">
                            More Blog Posts
                            <i class="icon-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <footer class="mn-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="mn-footer-info-title">Contacts</h3>
                        <p>
                            <i class="icon-phone mn-social-icon"></i>
                            +255 767 XXX XXX
                        </p>
                        <p>+254 767 XXX XXX</p>
                        <p>support@site.com</p>
                        <p>admin@site.com</p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="mn-footer-info-title">Main Office</h3>
                        <p>Lindi Tanzania</p>
                        <p>P.O.Box 236</p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="mn-footer-info-title">Social Media</h3>
                        <p>
                            <i class="icon-social-facebook mn-social-icon"></i>
                            <a href="#">Facebook</a>
                        </p>
                        <p>
                            <i class="icon-social-instagram mn-social-icon"></i>
                            <a href="#">Instagram</a>
                        </p>
                        <p>
                            <i class="icon-social-twitter mn-social-icon"></i>
                            <a href="#">Twitter</a>
                        </p>
                    </div>

                    <div class="col-md-12 text-left mn-footer-credit">
                        <hr />
                        <h6><a href="#">Theme By Peter Ndomano</a></h6>
                        <h6><a href="#">Powered By WordPress</a></h6>
                        <h6>&copy;siteowner</h6>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
