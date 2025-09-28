<?php
function prison_setup() {
    // Base CSS
    wp_enqueue_style('themify', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
    wp_enqueue_style('owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');  
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('font-awesome-cdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');

    // Base JS
    // Deregister WordPress default jQuery and load your custom jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-plugin-collection', get_template_directory_uri() . '/assets/js/jquery-plugin-collection.js', array('jquery'), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

function add_prison_favicons() {
    echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/assets/gvr-icon.ico" />' . "\n";
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/assets/gvr-icon.png" />' . "\n";
}

add_action('wp_head', 'add_prison_favicons');

add_action('wp_enqueue_scripts', 'prison_setup');
?>