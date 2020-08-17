<!doctype html>
<html lang="en">

<head>
    <title>Mighty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

    <?php wp_head(); ?>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body">

                <?php  wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_id' => 'main-menu',
                            'container' => 'ul',
                            'menu_class' => 'site-nav-wrap',
                        )
                    )
                ?>
                
            </div>
        </div>
        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="<?php echo get_home_url(); ?>" class="font-weight-bold">Cygnus</a>
                        </div>
                    </div>
                    <div class="col-9  text-right">
                        <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a>
                        </span>
                        <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="about.html" class="nav-link">About</a></li>
                                <li><a href="work.html" class="nav-link">Work</a></li>
                                <li><a href="journal.html" class="nav-link">Journal</a></li>
                                <li><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
