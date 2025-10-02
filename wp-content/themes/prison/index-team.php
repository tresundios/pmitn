<?php
/**
 * Template Name: Team
 * 
 * @package prison
 * @since prison 1.0
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>  
<style>
    .blog-section .entry-media {
        position: relative;
        overflow: hidden;
        width: 200px;
        height: 200px;
        margin: 0 auto 0px;
        border-radius: 20%;
        border: 5px solid #f5f5f5;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }

    .blog-section .entry-details p {
        font-size: 14px;
        font-size: 0.875rem;
        font-weight: 700;
        color: #fe5e29;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    .blog-section .entry-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .blog-section .grid:hover .entry-media img {
        transform: scale(1.05);
    }
    
    .blog-section .entry-details {
        position: relative;
        left: 0;
        bottom: 0;
        text-align: center;
        padding: 20px 15px;
        background: #fff;
        margin-top: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }
    
    .blog-section .blog-grids .grid {
        width: calc(33.33% - 30px);
        float: left;
        margin: 0 15px 60px !important;
        position: relative;
        text-align: center;
    
    }

    .blog-section .entry-details h3 {
        font-size: 20px;
        font-size: 1rem !important;
        margin: 0 0 0.5em;
        line-height: 1.3em;
    }

    @media (max-width: 767px) {
        .blog-section .entry-details h3 {
            font-size: 18px;
            font-size: 1.125rem;
        }
    }
    
    .blog-section .blog-grids .grid:before {
        display: none;
    }
    
    .blog-section .cat {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
    }
    
    .blog-section .cat a {
        background: #e83b3e;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 600;
    }
    
    @media (max-width: 991px) {
        .blog-section .blog-grids .grid {
            width: calc(50% - 30px);
        }
    }
    
    @media (max-width: 600px) {
        .blog-section .blog-grids .grid {
            width: 100%;
            max-width: 320px;
            margin: 0 auto 50px !important;
            float: none;
        }
    }
</style>

<!-- start blog-section -->
<section id="team1" class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s2">
                    <span>#Team</span>
                    <h2>Office Bearers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="blog-grids">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/bishop-ambrose.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Most Rev. Bishop Ambrose Pitchaimuthu</h3>
                            <p>Chairman</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/frgilbert.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Gilbert Joe</h3>
                            <p>State Coordinator</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/jesuraja.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Mr. A. Jesuraja</h3>
                            <p>State Secretary</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/sr_stellamary.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Sr. Stella Mary FSJ</h3>
                            <p>State Treasurer</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/sr_alberal.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Sr. Alberal</h3>
                            <p>State Joint Secretary</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/gaspar.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Mr. G. Gaspar</h3>
                            <p>State Joint Secretary</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end blog-section -->




<?php
get_footer();
?>
