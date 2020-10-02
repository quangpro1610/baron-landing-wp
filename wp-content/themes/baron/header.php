<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> |
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo get_home_url(); ?>"><img src="<?php echo BARON_IMAGES_URL; ?>/logo.png" alt="Baron"></a>
                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarResponsive" style="">
                    <ul class="navbar-nav ml-auto" id="menu">
                        <li class="nav-item active" data-menuanchor="sectionHome">
                            <a class="nav-link" href="#sectionHome">Home</a>
                        </li>
                        <li class="nav-item" data-menuanchor="sectionOurWork">
                            <a class="nav-link" href="#sectionOurWork">Our Work</a>
                        </li>
                        <li class="nav-item" data-menuanchor="sectionProperties">
                            <a class="nav-link" href="#sectionProperties">Properties</a>
                        </li>
                        <li class="nav-item" data-menuanchor="sectionApproach">
                            <a class="nav-link" href="#sectionApproach">Approach</a>
                        </li>
                        <li class="nav-item" data-menuanchor="sectionAboutUs">
                            <a class="nav-link" href="#sectionAboutUs">About us</a>
                        </li>
                        <li class="nav-item" data-menuanchor="sectionLetsTalk">
                            <a class="nav-link" href="#sectionLetsTalk">Let's talk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
