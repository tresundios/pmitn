<?php
/**
 * The template for displaying single Activity posts
 */

get_header();

?>
    <?php
        while (have_posts()) :
            the_post();
            ?>
        <!-- start page-title -->
        <style>
            .page-title-wrapper {
                position: relative;
                z-index: 1;
                padding: 60px 0;
            }
            .page-title-content {
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                padding: 40px;
                border-radius: 10px;
                max-width: 80%;
                margin: 0 auto;
                position: relative;
                z-index: 2;
            }
            .page-title h2 {
                color: #fff;
                margin: 0 0 15px 0;
                text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            }
            .page-title .breadcrumb {
                background: transparent;
                padding: 0;
                margin: 0;
                font-size: 18px;
                color: rgba(255,255,255,0.9);
            }
            .page-title .breadcrumb li {
                text-shadow: 0 1px 2px rgba(0,0,0,0.3);
            }
            .title-border {
                margin: 20px auto 0;
            }
            .title-content-wrapper {
                display: flex;
                flex-direction: column;
            }
            @media (max-width: 767px) {
                .page-title-content {
                    max-width: 95%;
                    padding: 25px 20px;
                }
                .title-content-wrapper h2 {
                    word-wrap: break-word;
                    overflow-wrap: break-word;
                    word-break: break-word;
                    -webkit-hyphens: auto;
                    -ms-hyphens: auto;
                    hyphens: auto;
                    width: 100%;
                    display: inline-block;
                }
                .title-content-wrapper .breadcrumb {
                    margin-top: 10px;
                }
            }
        </style>
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper" style="background: url('<?php echo get_header_image(); ?>') no-repeat center center/cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <div class="page-title-content">
                                    <div class="title-content-wrapper">
                                        <?php
                                    
                                            the_title('<h2>', '</h2>');
                                                                       
                                        ?>
                                        <?php
                                        $subtitle = get_post_meta(get_the_ID(), 'page_subtitle', true);
                                        if (empty($subtitle)) {
                                            $subtitle = get_bloginfo('description');
                                        }
                                        if ($subtitle) {
                                            echo '<ol class="breadcrumb"><li>' . esc_html($subtitle) . '</li></ol>';
                                        }
                                        ?>
                                    </div>
                                    <div class="title-border"></div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
<main id="primary" class="site-main">
    <div class="container">
    
            <article id="post-<?php the_ID(); ?>" <?php post_class('activity-single'); ?>>
                <header class="entry-header">
                    <?php
                    the_title('<h1 class="entry-title">', '</h1>');
                    
                    // Display activity meta (date, type)
                    $activity_types = get_the_terms(get_the_ID(), 'activity_type');
                    $activity_date = get_the_date();
                    ?>
                    
                    <div class="activity-meta">
                        <?php if (!empty($activity_types) && !is_wp_error($activity_types)) : ?>
                            <span class="activity-type">
                                <?php 
                                $types = array();
                                foreach ($activity_types as $type) {
                                    $types[] = '<a href="' . esc_url(get_term_link($type)) . '">' . esc_html($type->name) . '</a>';
                                }
                                echo implode(', ', $types);
                                ?>
                            </span>
                        <?php endif; ?>
                        
                        <!-- <span class="activity-date">
                            <?php echo esc_html($activity_date); ?>
                        </span> -->
                    </div>
                </header>

                <!-- <?php if (has_post_thumbnail()) : ?>
                    <div class="activity-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?> -->

                <div class="entry-content">
                    <?php
                    // Display activity date if available
                    $activity_date = get_post_meta(get_the_ID(), '_activity_date', true);
                    if (!empty($activity_date)) {
                        echo '<div class="activity-date mb-4">';
                        echo '<i class="far fa-calendar-alt me-2"></i> ';
                        echo '<strong>' . __('Date:', 'prison') . '</strong> ';
                        echo date_i18n(get_option('date_format'), strtotime($activity_date));
                        echo '</div>';
                    }
                    
                    // Display featured image if exists
                    // if (has_post_thumbnail()) {
                    //     echo '<div class="featured-image mb-4">';
                    //     the_post_thumbnail('large', ['class' => 'img-fluid rounded']);
                    //     echo '</div>';
                    // }
                    
                    // Display content with proper formatting
                    echo '<div class="activity-content">';
                    the_content();
                    echo '</div>';
                    
                    // Display gallery if exists (using ACF gallery field)
                    if (function_exists('get_field') && $gallery = get_field('activity_gallery')) {
                        echo '<div class="activity-gallery mt-5">';
                        echo '<h3 class="mb-4">' . __('Gallery', 'prison') . '</h3>';
                        echo '<div class="row g-3">';
                        foreach ($gallery as $image) {
                            echo '<div class="col-md-4 col-sm-6">';
                            echo '<a href="' . esc_url($image['url']) . '" class="gallery-item d-block" data-fancybox="gallery">';
                            echo '<img src="' . esc_url($image['sizes']['medium_large']) . '" alt="' . esc_attr($image['alt']) . '" class="img-fluid rounded h-100 w-100 object-fit-cover">';
                            echo '</a>';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <footer class="entry-footer mt-4 pt-4 border-top">
                    <?php
                    // Display categories
                    $categories_list = get_the_term_list(get_the_ID(), 'activity_type', '<div class="activity-categories"><span class="me-2"><i class="fas fa-tags me-1"></i><strong>' . __('Categories:', 'prison') . '</strong></span>', ', ', '</div>');
                    if ($categories_list) {
                        echo $categories_list;
                    }
                    
                    // Display post date
                    echo '<div class="post-date mt-2 text-muted small">';
                    echo '<i class="far fa-clock me-1"></i> ';
                    echo '<span>' . sprintf(
                        __('Posted on %s', 'prison'),
                        get_the_date()
                    ) . '</span>';
                    echo '</div>';
                    ?>
                </footer>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            
        endwhile; // End of the loop.
        ?>
    </div>
</main><!-- #main -->

<style>
    /* Image styling */
    .featured-image img,
    .gallery-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.3s ease;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .gallery-item {
        display: block;
        margin-bottom: 1.5rem;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .gallery-item:hover img {
        transform: scale(1.03);
    }
    
    /* Content styling */
    .activity-content {
        padding-top: 1rem;
        line-height: 1.8;
        color: #444;
    }
    
    .activity-content p {
        margin-bottom: 1.5rem;
    }
    
    .activity-date {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 6px;
        font-size: 1.1rem;
        color: #333;
    }
    
    .activity-categories a {
        display: inline-block;
        background: #f0f0f0;
        color: #333;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        margin: 0.25rem 0.25rem 0.25rem 0;
        font-size: 0.85rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .activity-categories a:hover {
        background: #0073aa;
        color: #fff;
    }
    
    .object-fit-cover {
        object-fit: cover;
    }
    
    @media (max-width: 768px) {
        .featured-image img,
        .gallery-item img {
            height: 200px;
        }
    }
</style>

<?php
get_footer();
