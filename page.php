<?php
get_header();
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = "";
if(has_post_thumbnail()){
    $thumb_url = $thumb_url_array[0];
}
?>

<section class="mn-section">
    <?php
    if(has_post_thumbnail()){
        ?>
        <div data-aos="fade-up" class="card mn-post-img" style="background-image:url(<?php echo $thumb_url ?>)">
            <div class="card-img-overlay">
                <div class="container text-center">
                    <h1 class="mn-h1 text-light"><b><?php the_title() ?></b></h1>
                    <div class="mn-meta-container">
                        <h6>
                            <i>On <?php echo get_the_date() ?></i>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="container mn-section-pad" >
        <div class="row">
            <div data-aos="fade-up" class="col-md-4 p-3">
                <?php
                if(has_post_thumbnail()){
                    ?>
                    <h4 class="mn-section-title" style="width:100%;">
                        "<i><?php the_excerpt() ?></i>"
                    </h4>
                    <?php
                }
                else{
                    ?>
                    <h3 class="mn-section-title" style="width:100%;">
                        <?php the_title() ?>
                    </h3>
                    <h6>
                        <b><i>On <?php echo get_the_date() ?></i></b>
                    </h6>
                    <?php
                }
                ?>
            </div>
            <div data-aos="fade-right" class="col-md-8 p-2">
                <?php echo the_content() ?>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();
?>
