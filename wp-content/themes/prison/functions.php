<?php


if (!function_exists('prison_setup_update')) {
    function prison_setup_update() {
        // Load theme textdomain
        load_theme_textdomain('prison', get_template_directory() . '/languages');
        
        // Add theme supports
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));
        add_theme_support('automatic-feed-links');
        
        // Custom logo support
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ));
        
        // Custom header support
        add_theme_support('custom-header', array(
            'default-image'      => '',
            'default-text-color' => '000000',
            'width'              => 1200,
            'height'             => 300,
            'flex-height'        => true,
            'flex-width'         => true,
            'uploads'            => true,
        ));
        
        // Custom background support
        add_theme_support('custom-background', array(
            'default-color' => 'ffffff',
        ));
        
        // Register navigation menus
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'prison'),
            'footer'  => esc_html__('Footer Menu', 'prison'),
        ));
    }
}

add_action( 'after_setup_theme', 'prison_setup_update' );

// Custom Walker Class for Navigation Menu
class Prison_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        // Add 'menu-item-has-children' class if item has children
        $has_children = in_array('menu-item-has-children', $classes);
        if ($has_children) {
            $classes[] = 'menu-item-has-children';
            
            // Add 'current-menu-parent' if any child is current
            if (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) || in_array('current-page-ancestor', $classes)) {
                $classes[] = 'current-menu-parent';
            }
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';
        $atts['class']  = '';

        if ($has_children) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

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
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    

    // Base JS
    // Deregister WordPress default jQuery and load your custom jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-plugin-collection', get_template_directory_uri() . '/assets/js/jquery-plugin-collection.js', array('jquery'), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

function add_prison_favicons() {
    echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/assets/icons/pmitn.ico" />' . "\n";
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/assets/images/pmitn.png" />' . "\n";
}

add_action('wp_head', 'add_prison_favicons');

add_action('wp_enqueue_scripts', 'prison_setup');
?>