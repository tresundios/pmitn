<?php
/**
 * Template Name: Banner Title
 * 
 * @package prison
 * @since prison 1.0
 */

?>

<?php
$blog_info = get_bloginfo('name');
$description = get_bloginfo('description', 'display');

?>

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <?php
                                if (is_page()) {
                                    the_title('<h2>', '</h2>');
                                } else {
                                    echo '<h2>' . esc_html($blog_info) . '</h2>';
                                }                                
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
                                <div class="title-border"></div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->