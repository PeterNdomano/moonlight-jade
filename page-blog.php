<?php
/*
Template Name: Blog Page Template
*/
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 15,
);
$the_query = new WP_Query( $args );

get_header();
?>

<section class="mn-section">
    <div class="container mn-section-pad">
        <h3 class="mn-section-title">
            <i class="mdi mdi-view-dashboard mn-section-icon"></i>
            Our Blog
        </h3>

        <div class="row">
            <!--most recent blog posts-->
            <?php if ( $the_query->have_posts() ): ?>
            <?php $count = 1; ?>
            <?php while( $the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
                if($count === 1){
                    ?>
                    <div class="col-md-12">
                        <?php
                        if(has_post_thumbnail()){
                            ?>
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card" style="background-image: url(<?php echo $thumb_url ?>">
                                <div class="card-img-overlay">
                                    <div>
                                        <h3 class="card-title"><?php the_title() ?></h3>
                                        <p class="card-text"><?php the_excerpt() ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card bg-light">
                                <div class="card-img-overlay">
                                    <div>
                                        <h4 class="card-title"><?php the_title() ?></h4>
                                        <p class="card-text"><?php the_excerpt() ?></p>
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

                    <div class="col-md-4">
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
                            <div onclick="window.location.href='<?php the_permalink() ?>'" class="card mn-item-card bg-light">
                                <div class="card-img-overlay">
                                    <div>
                                        <h4 class="card-title"><?php the_title() ?></h4>
                                        <p class="card-text"><?php the_excerpt() ?></p>
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
                <p><?php _e( 'Sorry, no blog posts were found' ); ?></p>
            <?php endif; ?>


            <div class="col-md-12 text-right">
                <!-- reserved for pagination -->
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
