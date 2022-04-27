<section class="mn-banner">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div  class="col-md-6 col-sm-12" style="min-height: 70vh;">
                    <div class="row">
                        <div data-aos="fade-up-right" class="col-md-12">
                            <?php
                            if( get_custom_logo() ){
                                the_custom_logo();
                            }
                            else{
                                ?>
                                <!-- Upload site logo to disable the default logo -->
                                <img class="mn-site-logo" src="<?php echo get_theme_file_uri('assets/images/internet.png') ?>"/>
                                <?php
                            }
                            ?>
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
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
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
