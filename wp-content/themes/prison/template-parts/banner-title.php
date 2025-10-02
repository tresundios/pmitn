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
                                        if (is_page()) {
                                            the_title('<h2>', '</h2>');
                                        } else {
                                            echo '<h2>' .$blog_info . '</h2>';
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