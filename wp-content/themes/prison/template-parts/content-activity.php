<?php
/**
 * Template part for displaying activity items in archive pages
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('activity-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="activity-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large', ['class' => 'activity-image']); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="activity-content">
        <header class="entry-header">
            <?php
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
            
            // Display activity type
            $activity_types = get_the_terms(get_the_ID(), 'activity_type');
            if (!empty($activity_types) && !is_wp_error($activity_types)) :
                echo '<div class="activity-type">';
                foreach ($activity_types as $type) {
                    echo '<span class="activity-type-badge">' . esc_html($type->name) . '</span>';
                }
                echo '</div>';
            endif;
            ?>
            
            <div class="entry-meta">
                <?php echo get_the_date(); ?>
            </div>
        </header>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        
        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="read-more">
                <?php esc_html_e('View Details', 'prison'); ?>
                <span class="screen-reader-text"><?php the_title(); ?></span>
            </a>
        </footer>
    </div>
</article>
