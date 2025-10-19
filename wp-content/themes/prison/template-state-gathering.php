<?php
/**
 * Template Name: State Gathering Activities
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<section id="primary" class="site-main section-padding">
    <div class="container">
        <div class="row">
            <?php
            // Get current page number
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            
            $args = array(
                'post_type'      => 'activity',
                'posts_per_page' => 3,
                'paged'          => $paged,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'activity_type',
                        'field'    => 'slug',
                        'terms'    => 'state-gathering',
                    ),
                ),
                'meta_key'       => '_activity_date',
                'orderby'        => 'meta_value',
                'order'          => 'DESC',
            );

            $activities = new WP_Query($args);

            if ($activities->have_posts()) :
                while ($activities->have_posts()) : $activities->the_post();
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
                                
                                <h3 class="card-title h3">
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
                
                // Pagination
                echo '<div class="col-12 mt-4"><div class="pagination-wrapper">';
                $big = 999999999; // need an unlikely integer
                echo paginate_links(array(
                    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format'    => '?paged=%#%',
                    'current'   => max(1, $paged),
                    'total'     => $activities->max_num_pages,
                    'prev_text' => '&laquo; ' . __('Previous', 'prison'),
                    'next_text' => __('Next', 'prison') . ' &raquo;',
                    'type'      => 'list',
                    'mid_size'  => 2
                ));
                echo '</div></div>';
                
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12">
                    <div class="alert alert-info">
                        <?php _e('No State Gathering activities found.', 'prison'); ?>
                    </div>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

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
        height: 100%;
        overflow: hidden;
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
    .section-padding {
        padding: 60px 0;
    }
    @media (max-width: 768px) {
        .section-padding {
            padding: 40px 0;
        }
    }
      .card-body {
        padding: 1rem;
        height: 300px;
        overflow: hidden;
    }
    
    /* Pagination Styling */
    .pagination-wrapper {
        text-align: center;
        margin: 2rem 0;
    }
    
    .pagination-wrapper .page-numbers {
        display: inline-flex;
        flex-wrap: wrap;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 0;
        gap: 0.5rem;
    }
    
    .pagination-wrapper .page-numbers li {
        display: inline-block;
        margin: 0 2px;
    }
    
    .pagination-wrapper .page-numbers a,
    .pagination-wrapper .page-numbers span {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        color: #007bff;
        text-decoration: none;
        border-radius: 4px;
        transition: all 0.3s ease;
    }
    
    .pagination-wrapper .page-numbers a:hover {
        background: #e9ecef;
    }
    
    .pagination-wrapper .page-numbers .current {
        background: #007bff;
        color: #fff;
        border-color: #007bff;
    }
    
    .pagination-wrapper .page-numbers .dots {
        padding: 0.5rem 0.75rem;
    }
</style>

<?php
get_footer();