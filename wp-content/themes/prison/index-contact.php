<?php
/**
 * Template Name: Contact Us
 * 
 * @package prison
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<section id="primary" class="site-main ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                   
                    <p class="lead text-center">We'd love to hear from you. Here's how you can reach us.</p>
                    
                    <!-- Contact Information Section -->

                    
                    <!-- Google Maps Section -->
                  <!-- Google Maps Section -->
<div class="section-padding no-padding-top">
    <div class="map-container">
        <h3 class="text-center">Our Location</h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.042997643122!2d80.2741182!3d13.0329339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267d508e32d79%3A0xa803b9b8c098fbff!2sArchdiocesan+Pastoral+Centre!5e0!3m2!1sen!2sin!4v1508848772988" 
                class="embed-responsive-item" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
                    
                    <!-- Additional Contact Information -->
                    <div class="section-padding">
                        <div class="container">
                            <div class="text-center">
                                <h3>Other Ways to Reach Us</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="info-box">
                                            <i class="fa fa-phone-square fa-3x"></i>
                                            <h4>Emergency Contact</h4>
                                            <p>+91-44-48603491 </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box">
                                            <i class="fa fa-envelope fa-3x"></i>
                                            <h4>General Inquiries</h4>
                                            <p><a href="mailto:pmitn@yahoo.co.in">pmitn@yahoo.co.in</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box">
                                            <i class="fa fa-comments fa-3x"></i>
                                            <h4>Chat Support</h4>
                                            <p>Available Mon-Fri, 10 AM - 6 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
    /* Section Styling */
    .section-padding {
        padding: 50px 0;
    }
    
    .no-padding-top {
        padding-top: 0;
    }

    .page-title {
        color: #2c3e50;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 2px solid #eee;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        text-align: center;
    }

    .lead {
        font-size: 18px;
        margin-bottom: 50px;
        text-align: center;
        color: #555;
    }

    /* Contact Cards */
    .contact-card {
        background: #fff;
        border-radius: 5px;
        padding: 30px;
        height: 100%;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #eee;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    }

    .contact-icon {
        color: #e74c3c;
        margin-bottom: 20px;
        text-align: center;
    }

    .contact-card h3 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 20px;
        font-weight: 600;
        text-align: center;
    }

    .contact-details {
        margin-bottom: 20px;
    }

    .contact-details p {
        margin-bottom: 10px;
        color: #555;
    }

    .contact-details i {
        color: #e74c3c;
        width: 20px;
        text-align: center;
        margin-right: 10px;
    }

    .working-hours {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .working-hours h4 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 16px;
    }

    /* Quick Links */
    .quick-links {
        background: #fff;
        border-radius: 5px;
        padding: 30px;
        height: 100%;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        border: 1px solid #eee;
    }

    .quick-links h3 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 20px;
        font-weight: 600;
        text-align: center;
    }

    .quick-links ul {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
    }

    .quick-links li {
        padding: 8px 0;
        border-bottom: 1px dashed #eee;
    }

    .quick-links li:last-child {
        border-bottom: none;
    }

    .quick-links a {
        color: #555;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .quick-links a:hover {
        color: #e74c3c;
        padding-left: 5px;
    }

    .quick-links i {
        color: #e74c3c;
        margin-right: 10px;
    }

    /* Social Links */
    .social-links {
        text-align: center;
        margin-top: 30px;
    }

    .social-links h4 {
        color: #2c3e50;
        margin-bottom: 15px;
        font-size: 16px;
    }

    .social-icon {
        display: inline-block;
        width: 36px;
        height: 36px;
        line-height: 36px;
        text-align: center;
        background: #f5f5f5;
        color: #555;
        border-radius: 50%;
        margin: 0 5px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background: #e74c3c;
        color: #fff;
        transform: translateY(-3px);
    }

    /* Map Container */
    .map-container {
        margin-top: 30px;
    }

    .map-container h3 {
        color: #2c3e50;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
    }

    #googleMap {
        width: 100%;
        height: 400px;
        border-radius: 5px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }

    /* Info Boxes */
    .info-box {
        text-align: center;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        height: 100%;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #eee;
    }

    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    }

    .info-box i {
        color: #e74c3c;
        margin-bottom: 15px;
    }

    .info-box h4 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .info-box p {
        color: #555;
        margin-bottom: 0;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .section-padding {
            padding: 40px 0;
        }
        
        .contact-card, .quick-links {
            margin-bottom: 30px;
        }
        
        #googleMap {
            height: 350px;
        }
    }

    @media (max-width: 767px) {
        .section-padding {
            padding: 30px 0;
        }
        
        .page-title {
            font-size: 24px;
        }
        
        .contact-card, .quick-links {
            padding: 20px;
        }
        
        #googleMap {
            height: 300px;
        }
        
        .info-box {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 480px) {
        .contact-details p, .working-hours p {
            font-size: 14px;
        }
        
        .social-icon {
            width: 32px;
            height: 32px;
            line-height: 32px;
            font-size: 14px;
        }
    }
</style>

<?php
get_footer();
?>