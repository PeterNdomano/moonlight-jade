<?php
$args = array(
    'post_type' => 'products',
    'post_per_page' => 3,
);
$the_query = new WP_Query( $args );
?>
<section class="mn-section">
    <div class="container">
        <h3 class="mn-section-title">
            <i class="mdi mdi-view-dashboard mn-section-icon"></i>
            Products
        </h3>

        <div class="row">
            <!--3 most recent products-->
            <?php if ( $the_query->have_posts() ): ?>
            <?php $count = 1; ?>
            <?php while( $the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
                if($count === 1){
                    ?>
                    <div class="col-md-6">
                        <div class="card mn-item-card" style="background-image: url(<?php echo $thumb_url ?>">
                            <div class="card-img-overlay">
                                <div>
                                    <h4 class="card-title"><?php the_title() ?></h4>
                                    <p style="card-text"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                else{
                    ?>

                    <?php
                }
            ?>
            <?php $count++ ?>
        <?php endwhile; wp_reset_postdata(); ?>
            <?php else: ?>
                <p><?php _e( 'Sorry, no products were found' ); ?></p>
            <?php endif; ?>
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
                <a class="btn mn-btn-next text-dark" href="<?php echo get_bloginfo('url') ?>/index.php/products">
                    More Products
                    <i class="icon-arrow-right-circle"></i>
                </a>
            </div>
        </div>
    </div>
</section>
