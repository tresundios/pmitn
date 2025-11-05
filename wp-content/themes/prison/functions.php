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

/**
 * Register Custom Post Type: Activity
 */
function register_activity_post_type() {
    $labels = array(
        'name'                  => _x('Activities', 'Post Type General Name', 'prison'),
        'singular_name'         => _x('Activity', 'Post Type Singular Name', 'prison'),
        'menu_name'             => __('Activities', 'prison'),
        'name_admin_bar'        => __('Activity', 'prison'),
        'archives'              => __('Activity Archives', 'prison'),
        'attributes'            => __('Activity Attributes', 'prison'),
        'parent_item_colon'     => __('Parent Activity:', 'prison'),
        'all_items'             => __('All Activities', 'prison'),
        'add_new_item'          => __('Add New Activity', 'prison'),
        'add_new'               => __('Add New', 'prison'),
        'new_item'              => __('New Activity', 'prison'),
        'edit_item'             => __('Edit Activity', 'prison'),
        'update_item'           => __('Update Activity', 'prison'),
        'view_item'             => __('View Activity', 'prison'),
        'view_items'            => __('View Activities', 'prison'),
        'search_items'          => __('Search Activity', 'prison'),
        'not_found'             => __('Not found', 'prison'),
        'not_found_in_trash'    => __('Not found in Trash', 'prison'),
        'featured_image'        => __('Activity Image', 'prison'),
        'set_featured_image'    => __('Set activity image', 'prison'),
        'remove_featured_image' => __('Remove activity image', 'prison'),
        'use_featured_image'    => __('Use as activity image', 'prison'),
        'insert_into_item'      => __('Insert into activity', 'prison'),
        'uploaded_to_this_item' => __('Uploaded to this activity', 'prison'),
        'items_list'            => __('Activities list', 'prison'),
        'items_list_navigation' => __('Activities list navigation', 'prison'),
        'filter_items_list'     => __('Filter activities list', 'prison'),
    );

    $args = array(
        'label'                 => __('Activity', 'prison'),
        'description'           => __('Activities and Events', 'prison'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('activity_type'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('activity', $args);
}
add_action('init', 'register_activity_post_type', 0);

/**
 * Register Custom Taxonomy: Activity Type
 */
function register_activity_type_taxonomy() {
    $labels = array(
        'name'                       => _x('Activity Types', 'Taxonomy General Name', 'prison'),
        'singular_name'              => _x('Activity Type', 'Taxonomy Singular Name', 'prison'),
        'menu_name'                  => __('Activity Type', 'prison'),
        'all_items'                  => __('All Activity Types', 'prison'),
        'parent_item'                => __('Parent Activity Type', 'prison'),
        'parent_item_colon'          => __('Parent Activity Type:', 'prison'),
        'new_item_name'              => __('New Activity Type', 'prison'),
        'add_new_item'               => __('Add New Activity Type', 'prison'),
        'edit_item'                  => __('Edit Activity Type', 'prison'),
        'update_item'                => __('Update Activity Type', 'prison'),
        'view_item'                  => __('View Activity Type', 'prison'),
        'separate_items_with_commas' => __('Separate activity types with commas', 'prison'),
        'add_or_remove_items'        => __('Add or remove activity types', 'prison'),
        'choose_from_most_used'      => __('Choose from the most used', 'prison'),
        'popular_items'              => __('Popular Activity Types', 'prison'),
        'search_items'               => __('Search Activity Types', 'prison'),
        'not_found'                  => __('Not Found', 'prison'),
        'no_terms'                   => __('No activity types', 'prison'),
        'items_list'                 => __('Activity types list', 'prison'),
        'items_list_navigation'      => __('Activity types list navigation', 'prison'),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'show_in_rest'      => true,
    );

    register_taxonomy('activity_type', array('activity'), $args);

    // Add default terms
    if (term_exists('state-gathering', 'activity_type') === null) {
        wp_insert_term('State Gathering', 'activity_type', array(
            'slug' => 'state-gathering',
            'description' => 'Activities related to state gatherings'
        ));
    }
    
    if (term_exists('diocesan-programs', 'activity_type') === null) {
        wp_insert_term('Diocesan Programs', 'activity_type', array(
            'slug' => 'diocesan-programs',
            'description' => 'Activities related to diocesan programs'
        ));
    }
}
add_action('init', 'register_activity_type_taxonomy', 0);

/**
 * Flush rewrite rules on theme activation
 */
function prison_rewrite_flush() {
    register_activity_post_type();
    register_activity_type_taxonomy();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'prison_rewrite_flush');

/**
 * Add Activity Date meta box
 */
function add_activity_date_meta_box() {
    add_meta_box(
        'activity_date_meta_box',
        __('Activity Date', 'prison'),
        'render_activity_date_meta_box',
        'activity',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'add_activity_date_meta_box');

/**
 * Render Activity Date meta box
 */
function render_activity_date_meta_box($post) {
    // Add a nonce field for security
    wp_nonce_field('save_activity_date', 'activity_date_nonce');
    
    // Get the current value of the date field
    $activity_date = get_post_meta($post->ID, '_activity_date', true);
    
    // Output the date field
    echo '<label for="activity_date">' . __('Date of Activity:', 'prison') . '</label>';
    echo '<input type="date" id="activity_date" name="activity_date" value="' . esc_attr($activity_date) . '" style="width: 100%; margin-top: 5px;" />';
    echo '<p class="description">' . __('Select the date when this activity took place.', 'prison') . '</p>';
}

/**
 * Save Activity Date meta box data
 */
function save_activity_date_meta($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['activity_date_nonce']) || !wp_verify_nonce($_POST['activity_date_nonce'], 'save_activity_date')) {
        return $post_id;
    }
    
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    // Check user permissions
    if ('activity' === $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }
    
    // Save the date field
    if (isset($_POST['activity_date'])) {
        update_post_meta($post_id, '_activity_date', sanitize_text_field($_POST['activity_date']));
    }
}
add_action('save_post', 'save_activity_date_meta');

/**
 * Add Activity Date column to the Activities admin list
 */
function add_activity_date_column($columns) {
    $new_columns = array();
    
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'title') {
            $new_columns['activity_date'] = __('Activity Date', 'prison');
        }
    }
    
    return $new_columns;
}
add_filter('manage_activity_posts_columns', 'add_activity_date_column');

/**
 * Display Activity Date in the Activities admin list
 */
function display_activity_date_column($column, $post_id) {
    if ($column === 'activity_date') {
        $activity_date = get_post_meta($post_id, '_activity_date', true);
        if (!empty($activity_date)) {
            echo date_i18n(get_option('date_format'), strtotime($activity_date));
        } else {
            echo '—';
        }
    }
}
add_action('manage_activity_posts_custom_column', 'display_activity_date_column', 10, 2);

/**
 * Make the Activity Date column sortable
 */
function make_activity_date_column_sortable($columns) {
    $columns['activity_date'] = 'activity_date';
    return $columns;
}
add_filter('manage_edit-activity_sortable_columns', 'make_activity_date_column_sortable');

/**
 * Sort activities by Activity Date in admin
 */
function sort_activities_by_date($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->get('post_type') === 'activity' && $query->get('orderby') === 'activity_date') {
        $query->set('meta_key', '_activity_date');
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'sort_activities_by_date');

// Add a helper function to get formatted activity date
function get_activity_date($post_id = null) {
    if (null === $post_id) {
        $post_id = get_the_ID();
    }
    $date = get_post_meta($post_id, '_activity_date', true);
    return $date ? date_i18n(get_option('date_format'), strtotime($date)) : '';
}

function prison_enqueue_scripts() {
    // Enqueue Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    
    // Enqueue jQuery (should be included by default in WordPress)
    wp_enqueue_script('jquery');
    
    // Enqueue Bootstrap JavaScript
    wp_enqueue_script(
        'bootstrap-js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js',
        array('jquery'),
        '3.4.1',
        true
    );
    
    // Enqueue custom JavaScript
    wp_enqueue_script(
        'prison-custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery', 'bootstrap-js'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'prison_enqueue_scripts');

?>