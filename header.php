<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo('name').' | '.get_bloginfo('description') ?></title>
        <?php wp_head() ?>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/libs/bootstrap/css/bootstrap.min.css') ?>"></link>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/libs/mdb/css/mdb.min.css') ?>"></link>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/libs/aos/aos.css') ?>"></link>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css') ?>"></link>
    </head>
    <body>
        <header>
            <?php get_template_part('menus/main-menu') ?>
        </header>
