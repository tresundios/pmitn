<?php
/**
 * Template Name: Team 2
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
<section id="team2" class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s2">
                    <span>#Team</span>
                    <h2>Diocesan Coordinators</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="blog-grids">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/frprakash.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. S. Prakash</h3>
                            <p>Madras - Mylapore</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/frmichaeldurairaj.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Michael Durairaj</h3>
                            <p>Pondicherry</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/frsahayaraj.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Sahayaraj</h3>
                            <p>Chengelput</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/srlourdumary.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Sr. Lourdumary</h3>
                            <p>Karaikal</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/frdavidlouis.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr L. David Louis</h3>
                            <p>Salem</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/framirtharaj.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Amirtharaj Dominic</h3>
                            <p>Ootacamund - Ooty</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.valsas.edward.vimal.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Valsas Edward Vimal</h3>
                            <p>Coimbatore</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.albert.william.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Albert William</h3>
                            <p>Dharmapuri</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.benjamin.raj2.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Benjamin Raj</h3>
                            <p>Tiruchirappalli</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.david.rajesh.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. David Rajesh</h3>
                            <p>Kumbakonam</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.arulanandu.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Arulanandu</h3>
                            <p>Tanjore</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.gnanapragasam.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Gnanapragasam</h3>
                            <p>Palayamkottai</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.sebastin.savari.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Sebastian Savari</h3>
                            <p>Sivagangai</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.paul.britto.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Paul Britto</h3>
                            <p>Madurai</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.silvester.fdo2.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Silvester FDO</h3>
                            <p>Tuticorin</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.anbu.selvan.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Anbu Selvan</h3>
                            <p>Tuticorin</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.arul.eugene.roy2.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Arul Eugene Roy</h3>
                            <p>Kottar</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.maria.arputham.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Maria Arputham</h3>
                            <p>Dindigul</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.berdin.anas.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Berdin Anas</h3>
                            <p>Kuzhithurai</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/fr.arputharaj2.jpg" alt>
                        </div>
                        
                        <div class="entry-details">
                            <h3>Rev. Fr. Arputharaj</h3>
                            <p>Vellore</p>
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
