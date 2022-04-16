<?php
get_header();

?>

<section class="mn-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="mn-section-title" style="width:100%;">
                    <?php echo the_title() ?>
                </h3>
            </div>
            <div class="col-md-8 p-2">
                <?php echo the_content() ?>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();
?>
