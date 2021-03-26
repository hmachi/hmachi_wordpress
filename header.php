<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="keywords" content="社谷内,能登,教育,子供,陸上,プログラミング" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/front-page.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page-programming.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/archive.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" />
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <div id="first-image-wrap">
        <div class="first-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
        </div>
    </div>

    <header>
        <div class="icon">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" alt="アイコン">
            </a>
        </div>
        <div class="title">
            <a href="<?php echo get_home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="header-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'place_global',
                'container' => false
            ]);
            ?>
        </nav>
    </header>