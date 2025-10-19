<?php
/**
 * The template for displaying Activity Type taxonomy archives
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        $term = get_queried_object();
        $term_description = term_description($term->term_id, 'activity_type');
        
        if (!empty($term_description)) : ?>
            <div class="term-description mb-4">
                <?php echo wp_kses_post($term_description); ?>
            </div>
        <?php endif; ?>

        <div class="activity-filters mb-4">
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'activity_type',
                'hide_empty' => true,
            ));

            if (!empty($terms) && !is_wp_error($terms)) {
                echo '<ul class="nav nav-pills justify-content-center mb-4">';
                echo '<li class="nav-item"><a href="' . esc_url(get_post_type_archive_link('activity')) . '" class="nav-link' . (is_post_type_archive('activity') ? ' active' : '') . '">' . __('All Activities', 'prison') . '</a></li>';
                
                foreach ($terms as $term_item) {
                    $active = ($term->term_id === $term_item->term_id) ? ' active' : '';
                    echo '<li class="nav-item"><a href="' . esc_url(get_term_link($term_item)) . '" class="nav-link' . $active . '">' . esc_html($term_item->name) . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>

        <?php if (have_posts()) : ?>
            <div class="row">
                <?php
                while (have_posts()) : the_post();
                    $activity_date = get_post_meta(get_the_ID(), '_activity_date', true);
                    $formatted_date = $activity_date ? date_i18n(get_option('date_format'), strtotime($activity_date)) : get_the_date();
                    $activity_types = get_the_terms(get_the_ID(), 'activity_type');
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card h-100 activity-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                                </a>
                            <?php endif; ?>
                            
                            <div class="card-body">
                                <?php if (!empty($activity_types) && !is_wp_error($activity_types)) : ?>
                                    <div class="activity-type-badges mb-2">
                                        <?php foreach ($activity_types as $type) : ?>
                                            <span class="badge bg-primary"><?php echo esc_html($type->name); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <h3 class="card-title h5">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <div class="activity-meta text-muted small mb-2">
                                    <i class="far fa-calendar-alt me-1"></i> <?php echo esc_html($formatted_date); ?>
                                </div>
                                
                                <div class="card-text">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            
                            <div class="card-footer bg-transparent border-top-0">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">
                                    <?php _e('Read More', 'prison'); ?> <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>

            <div class="mt-4">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&larr; Previous', 'prison'),
                    'next_text' => __('Next &rarr;', 'prison'),
                    'class'     => 'pagination justify-content-center',
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="alert alert-info">
                <?php _e('No activities found in this category.', 'prison'); ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
    .activity-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .activity-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }
    .activity-type-badges {
        margin-bottom: 10px;
    }
    .activity-type-badges .badge {
        margin-right: 5px;
        margin-bottom: 5px;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .card-title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .card-title a:hover {
        color: #0073aa;
    }
    .activity-meta {
        font-size: 0.85rem;
        margin-bottom: 10px;
    }
    .card-text {
        color: #666;
        margin-bottom: 1rem;
        flex-grow: 1;
    }
    .card-body {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0,0,0,0.05);
        margin-top: auto;
    }
    .btn-outline-primary {
        border-width: 1px;
    }
    .term-description {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
    }
    .nav-pills .nav-link.active {
        background-color: #0073aa;
    }
    .pagination .page-numbers.current {
        background-color: #0073aa;
        border-color: #0073aa;
    }
</style>

<?php
get_footer();
