<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo('name').' | '.get_bloginfo('description') ?></title>
        <?php wp_head() ?>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/libs/bootstrap/css/bootstrap.min.css') ?>"></link>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/libs/mdb/css/mdb.min.css') ?>"></link>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css') ?>"></link>

        <script src="<?php echo get_theme_file_uri('assets/libs/jquery-3.2.1.min.js') ?>"></script>
        <script src="<?php echo get_theme_file_uri('assets/libs/popper.min.js') ?>"></script>
        <script src="<?php echo get_theme_file_uri('assets/libs/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo get_theme_file_uri('assets/libs/mdb/js/mdb.min.js') ?>"></script>
        <script src="<?php echo get_theme_file_uri('assets/js/topbar.js') ?>"></script>
    </head>
    <body>
        <header>
            <?php get_template_part('menus/main-menu') ?>
            <?php get_template_part('banners/simple-banner') ?>
        </header>
