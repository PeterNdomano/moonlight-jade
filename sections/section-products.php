<?php
$args = array(
    'post_type' => 'products',
    'posts_per_page' => 3,
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
                    <div class="col-md-6" data-aos="flip-right">
                        <?php
                        if(has_post_thumbnail()){
                            ?>
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card" style="background-image: url(<?php echo $thumb_url ?>">
                                <div class="card-img-overlay">
                                    <div>
                                        <h3 class="card-title"><?php the_title() ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card bg-light" >
                                <div class="card-img-overlay">
                                    <div>
                                        <h4 class="card-title"><?php the_title() ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                }
                else{
                    ?>
                    <div class="col-md-3" data-aos="flip-right">
                        <?php
                        if(has_post_thumbnail()){
                            ?>
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card" style="background-image: url(<?php echo $thumb_url ?>">
                                <div class="card-img-overlay">
                                    <div>
                                        <h4 class="card-title"><?php the_title() ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card bg-light" >
                                <div class="card-img-overlay">
                                    <div>
                                        <h4 class="card-title"><?php the_title() ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                }
            ?>
            <?php $count++ ?>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php else: ?>
                <p><?php echo 'Sorry, no products were found'; ?></p>
            <?php endif; ?>


            <div class="col-md-12 text-right">
                <a class="btn mn-btn-next text-dark" href="<?php echo esc_url( home_url() ) ?>/index.php/Products">
                    More Products
                    <i class="icon-arrow-right-circle"></i>
                </a>
            </div>
        </div>
    </div>
</section>
