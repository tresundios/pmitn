<?php
/**
 * Template Name: Activities Hub
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<main id="primary" class="site-main">
    <div class="container">


        <div class="activity-sections">
            <!-- State Gathering Section -->
            <section class="activity-section state-gathering">
                <h2><?php _e('State Gathering', 'prison'); ?></h2>
                <?php
                $state_gathering = new WP_Query(array(
                    'post_type'      => 'activity',
                    'posts_per_page' => 3, // Show 3 most recent
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
                ));

                if ($state_gathering->have_posts()) {
                    echo '<div class="activity-grid">';
                    while ($state_gathering->have_posts()) : $state_gathering->the_post();
                        get_template_part('template-parts/content', 'activity');
                    endwhile;
                    echo '</div>';
                    wp_reset_postdata();

                    // View all link
                    $state_term = get_term_by('slug', 'state-gathering', 'activity_type');
                    if ($state_term) {
                        echo '<div class="view-all">';
                        echo '<a href="' . esc_url(get_term_link($state_term)) . '" class="button">';
                        _e('View All State Gathering Activities', 'prison');
                        echo '</a></div>';
                    }
                }
                else {
                    echo '<p>' . __('No State Gathering activities found.', 'prison') . '</p>';
                }
                ?>
            </section>

            <!-- Diocesan Programs Section -->
            <section class="activity-section diocesan-programs">
                <h2><?php _e('Diocesan Programs', 'prison'); ?></h2>
                <?php
                $diocesan = new WP_Query(array(
                    'post_type'      => 'activity',
                    'posts_per_page' => 3, // Show 3 most recent
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'activity_type',
                            'field'    => 'slug',
                            'terms'    => 'diocesan-programs',
                        ),
                    ),
                    'meta_key'       => '_activity_date',
                    'orderby'        => 'meta_value',
                    'order'          => 'DESC',
                ));

                if ($diocesan->have_posts()) {
                    echo '<div class="activity-grid">';
                    while ($diocesan->have_posts()) : $diocesan->the_post();
                        get_template_part('template-parts/content', 'activity');
                    endwhile;
                    echo '</div>';
                    wp_reset_postdata();

                    // View all link
                    $diocesan_term = get_term_by('slug', 'diocesan-programs', 'activity_type');
                    if ($diocesan_term) {
                        echo '<div class="view-all">';
                        echo '<a href="' . esc_url(get_term_link($diocesan_term)) . '" class="button">';
                        _e('View All Diocesan Programs', 'prison');
                        echo '</a></div>';
                    }
                } else {
                    echo '<p>' . __('No Diocesan Program activities found.', 'prison') . '</p>';
                }
                ?>
            </section>
        </div>
    </div>
</main>

<?php
get_footer();