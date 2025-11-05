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
                <div class="page-title-wrapper" style="background: url('<?php echo get_header_image(); ?>') no-repeat center center/cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <div class="page-title-content">
                                    <div class="title-content-wrapper">
                                        <?php
                                        if (is_page()) {
                                            the_title('<h2>', '</h2>');
                                        } else {
                                            echo '<h2 style="font-size: 3rem;">' .$blog_info . '</h2>';
                                        }                                
                                        ?>
                                        <?php
                                        $subtitle = get_post_meta(get_the_ID(), 'page_subtitle', true);
                                        if (empty($subtitle)) {
                                            $subtitle = '';//get_bloginfo('description');
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