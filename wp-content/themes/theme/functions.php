<?php
//Load Scripts

function addjs()
{
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.min.js',array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('jquery-migrate', get_template_directory_uri().'/js/jquery-migrate-3.0.0.js',array(),1,1,1);
    wp_enqueue_script('jquery-migrate');

    wp_register_script('popper', get_template_directory_uri().'/js/popper.min.js',array(),1,1,1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js',array(),1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('owl-carousel');

    wp_register_script('jquery-sticky', get_template_directory_uri().'/js/jquery.sticky.js',array(),1,1,1);
    wp_enqueue_script('jquery-sticky');

    wp_register_script('jquery-waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-waypoints');

    wp_register_script('jquery-animateNumber', get_template_directory_uri().'/js/jquery.animateNumber.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-animateNumber');

    wp_register_script('jquery-fancybox', get_template_directory_uri().'/js/jquery.fancybox.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-fancybox');

    wp_register_script('jquery-stellar', get_template_directory_uri().'/js/jquery.stellar.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-stellar');

    wp_register_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js',array(),1,1,1);
    wp_enqueue_script('jquery-easing');

    wp_register_script('bootstrap-datepicker', get_template_directory_uri().'/js/bootstrap-datepicker.min.js',array(),1,1,1);
    wp_enqueue_script('bootstrap-datepicker');

    wp_register_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js',array(),1,1,1);
    wp_enqueue_script('isotope');

    wp_register_script('aos', get_template_directory_uri().'/js/aos.js',array(),1,1,1);
    wp_enqueue_script('aos');

    wp_register_script('main', get_template_directory_uri().'/js/main.js',array(),1,1,1);
    wp_enqueue_script('main');

    wp_register_script('custom', get_template_directory_uri().'/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'addjs');

//Resizing images
add_image_size('banner',1200,800,false);

//Menu Support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );

//Registering menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
    )
);


/*importing Social Links Widget*/
require_once( __DIR__ . '/includes/social-links-widget.php');


/*
 * Sidebars 
 * 
 */

/*Register Sidebar*/
function guteblog_widgets_init() {

    // Footer Sidebars
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer-heading mb-3">',
        'after_title' => '</h3>',
        ) );

    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer-heading mb-4">',
        'after_title' => '</h3>',
    ) );


    //Social Links Widget
    register_sidebar( array(
        'name'          => 'Social Links',
        'id'            => 'social-links',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

   

    
}

add_action( 'widgets_init', 'guteblog_widgets_init' );
    
    
    
  