<?php
/**
 * Template Name: Our Story
 * 
 * @package prison
 * @since prison 1.0
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>
    <style>
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/prison-ministry-hero.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 120px 0;
            position: relative;
            margin-top: -20px;
        }
        .hero-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        .hero-subtitle {
            font-size: 20px;
            margin-bottom: 0;
            opacity: 0.9;
        }
        
        /* Story Box */
        .story-box {
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.05);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }
        .story-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .story-icon {
            width: 70px;
            height: 70px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 30px;
            color: #e83b3e;
            transition: all 0.3s ease;
        }
        .story-box:hover .story-icon {
            background: #e83b3e;
            color: #fff;
            transform: rotateY(180deg);
        }
        .title-border {
            width: 80px;
            height: 3px;
            background: #e83b3e;
            margin: 15px auto 0;
            position: relative;
        }
        .title-border:after {
            content: '';
            position: absolute;
            left: 50%;
            top: -4px;
            width: 10px;
            height: 10px;
            background: #e83b3e;
            border-radius: 50%;
            transform: translateX(-50%);
        }
        .mb-20 { margin-bottom: 20px; }
        .mb-30 { margin-bottom: 30px; }
        .mb-50 { margin-bottom: 50px; }
        .mb-60 { margin-bottom: 60px; }
        .mb-70 { margin-bottom: 70px; }
        .img-placeholder {
            background: #f8f9fa;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: #999;
            font-size: 14px;
            text-align: center;
           
            margin: 20px 0;
            position: relative;
            overflow: hidden;
        }
       
        .timeline {
            position: relative;
            padding-left: 30px;
            margin-top: 20px;
        }
        .timeline:before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e83b3e;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 25px;
        }
        .timeline-year {
            position: absolute;
           
            top: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e83b3e;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            z-index: 1;
        }
        .timeline-content {
            margin-left: 70px;
        }
        .timeline-content h4 {
            margin-top: 0;
            color: #333;
            font-size: 16px;
        }
        .timeline-content p {
            margin-bottom: 0;
            font-size: 14px;
            color: #666;
        }
        .impact-stats {
            background: #f9f9f9;
            padding: 30px 20px;
            border-radius: 8px;
            margin: 30px 0;
            overflow: hidden;
        }
        .stat-item {
            text-align: center;
            padding: 20px 10px;
            margin-bottom: 15px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        /* Stats Section */
        .stat-number {
            font-size: 36px;
            font-weight: 700;
            color: #e83b3e;
            line-height: 1.2;
            margin-bottom: 8px;
            font-family: 'Poppins', sans-serif;
        }
        
        /* Services Section */
        .service-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            border: 1px solid #f0f0f0;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .service-icon {
            width: 80px;
            height: 80px;
            background: rgba(232, 59, 62, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 32px;
            color: #e83b3e;
            transition: all 0.3s ease;
        }
        .service-card:hover .service-icon {
            background: #e83b3e;
            color: #fff;
            transform: scale(1.1);
        }
        .service-card h3 {
            margin-bottom: 15px;
            color: #333;
        }
        .service-card p {
            color: #666;
            margin-bottom: 0;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 767px) {
            .hero-title {
                font-size: 36px;
            }
            .hero-subtitle {
                font-size: 18px;
            }
            .impact-stats {
                margin: 20px -15px;
                border-radius: 0;
            }
            .stat-item {
                margin-bottom: 15px;
            }
            .stat-number {
                font-size: 30px;
            }
            .stat-label {
                font-size: 13px;
            }
        }
        .stat-label {
            font-size: 15px;
            color: #555;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .section-padding{
            padding: 40px 0;
        }
        
        /* List styling */
        .blog-content ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }
        .blog-content ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
            line-height: 1.6;
            color: #555;
        }
        .blog-content ul li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #e83b3e;
            position: absolute;
            left: 0;
            top: 2px;
        }
    </style>
        <!-- start blog-single-section -->
        <section class="blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 col-md-offset-1">
                        <div class="blog-content">
                            <div class="post format-standard-image">


                         
                                
                                <div class="row mb-50">
                                    <div class="col-md-6">
                                        <div class="story-box">
                                            <div class="story-icon">
                                                <i class="fas fa-clock-rotate-left"></i>
                                            </div>
                                            <h2 class="mb-20">The Beginning</h2>
                                            <p class="mb-0">In 1994, during the World Youth Day celebrations in Manila, Philippines, a small group of dedicated individuals came together with a vision to serve those often forgotten by society. This marked the humble beginnings of what would become the Prison Ministry India - Tamilnadu.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="story-box">
                                            <div class="story-icon">
                                                <i class="fas fa-bullseye"></i>
                                            </div>
                                            <h2 class="mb-20">Our Mission and Vision</h2>
                                            <p class="mb-0">Inspired by the words of Jesus in Matthew 25:35-36, "I was in prison and you came to visit me," our ministry was founded on the principles of compassion, service, and rehabilitation. We believe in the inherent dignity of every individual, regardless of their past, and work towards their holistic development and reintegration into society.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-70">
                                  
                                        <div class="story-box">
                                            <div class="story-icon">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                            <h3 class="mb-20">Our Growth and Development</h3>
                                            <p>From our early days, the ministry has grown significantly:</p>
                                            <div class="timeline">
                                                <div class="timeline-item">
                                                    <div class="timeline-year">1994</div>
                                                    <div class="timeline-content">
                                                        <h4>Founding of PMI Tamilnadu</h4>
                                                        <p>Established with a vision to serve the incarcerated community in Tamilnadu</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-year">1997</div>
                                                    <div class="timeline-content">
                                                        <h4>National Convention Participation</h4>
                                                        <p>Participated in the Third National Convention of Prison Ministry India in Trichy</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-year">1999</div>
                                                    <div class="timeline-content">
                                                        <h4>First State Convention</h4>
                                                        <p>Organized the first State Convention in Chennai</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-year">2002</div>
                                                    <div class="timeline-content">
                                                        <h4>7th National Convention</h4>
                                                        <p>Hosted the 7th National Convention in Chennai</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-year">2014</div>
                                                    <div class="timeline-content">
                                                        <h4>Statewide Expansion</h4>
                                                        <p>Expanded to all districts of Tamil Nadu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                  
                                   
                                </div>
                                <div class="row mb-70">
                                    <div class="story-box">
                                        <div class="story-icon">
                                            <i class="fas fa-hands-helping"></i>
                                        </div>
                                        <h3 class="mb-20">Our Impact</h3>
                                        <div class="impact-stats">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="stat-item">
                                                        <div class="stat-number">25+</div>
                                                        <div class="stat-label">Years of Service</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="stat-item">
                                                        <div class="stat-number">1000+</div>
                                                        <div class="stat-label">Lives Impacted</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="stat-item">
                                                        <div class="stat-number">30+</div>
                                                        <div class="stat-label">Prisons Reached</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="stat-item">
                                                        <div class="stat-number">50+</div>
                                                        <div class="stat-label">Volunteers</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Today, we serve in all major prisons across Tamil Nadu, reaching thousands of inmates and their families. We've witnessed remarkable transformations as individuals rediscover hope, dignity, and purpose through our programs.</p>
                                        <div class="img-placeholder mt-30">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmi/volunteer-medical-our-story.jpg" alt=""/>
                                        </div>
                                    </div>
                                    </div>

                                    </div>
                                </div>
                                
                                <div class="section-title text-center mb-70">
                                    <h2>Our Work Inside Prisons</h2>
                                    <p>Bringing hope and transformation to those behind bars</p>
                                    <div class="title-border"></div>
                                </div>
                                
                                <div class="row services-grid">
                                    <div class="col-md-4">
                                        <div class="service-card">
                                            <div class="service-icon">
                                                <i class="fas fa-book-open"></i>
                                            </div>
                                            <h3>Spiritual Guidance</h3>
                                            <p>Providing religious services, Bible studies, and spiritual counseling to help inmates find hope and purpose.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-card">
                                            <div class="service-icon">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <h3>Education & Skills</h3>
                                            <p>Offering educational programs and vocational training to prepare inmates for successful reintegration into society.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-card">
                                            <div class="service-icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <h3>Family Support</h3>
                                            <p>Supporting families of inmates through counseling, financial aid, and assistance with legal procedures.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-50">
                                    <h3 class="mb-30 text-center">Our Comprehensive Prison Ministry Includes</h3>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="service-card h-100">
                                                <div class="service-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <h4>Education & Training</h4>
                                                <ul class="list-unstyled list-arrow">
                                                    <li>Education programs</li>
                                                    <li>Vocational training</li>
                                                    <li>Skill development</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="service-card h-100">
                                                <div class="service-icon">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                                <h4>Support Services</h4>
                                                <ul class="list-unstyled list-arrow">
                                                    <li>Counseling services</li>
                                                    <li>Rehabilitation</li>
                                                    <li>Legal aid</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="service-card h-100">
                                                <div class="service-icon">
                                                    <i class="fas fa-hands-helping"></i>
                                                </div>
                                                <h4>Community Care</h4>
                                                <ul class="list-unstyled list-arrow">
                                                    <li>Healthcare assistance</li>
                                                    <li>Spiritual guidance</li>
                                                    <li>Moral support</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="service-card h-100">
                                                <div class="service-icon">
                                                    <i class="fas fa-home"></i>
                                                </div>
                                                <h4>Family & Reintegration</h4>
                                                <ul class="list-unstyled list-arrow">
                                                    <li>Family support</li>
                                                    <li>Reintegration programs</li>
                                                    <li>Aftercare services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="testimonial service-card">
                                    <blockquote class="mb-0">
                                        <i class="fas fa-quote-left text-muted"></i>
                                        <p class="mt-20">"The Spirit of the Lord is upon me, because he has anointed me to proclaim good news to the poor. He has sent me to proclaim liberty to the captives and recovering of sight to the blind, to set at liberty those who are oppressed."</p>
                                        <span class="quoter">- Luke 4:18</span>
                                    </blockquote>
                                </div>
                                
      
                                
                                <div class="row mb-50">
                                    <div class="col-md-6">
                                        <div class="story-box">
                                           
                                            <h2 class="mb-20">Community Outreach</h2>
                                            <p>Beyond prison walls, we extend our support to:</p>
                                            <ul class="list-unstyled list-arrow">
                                                <li>Families of prisoners through education and counseling</li>
                                                <li>Former prisoners through rehabilitation programs</li>
                                                <li>Community awareness programs about prison ministry</li>
                                                <li>Advocacy for prison reform and human rights</li>
                                            </ul>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="story-box">
                     
                                            <h2 class="mb-20">Join our Mission</h2>
                                            <p>We believe that everyone has a role to play in this ministry. Whether through volunteering, donations, or simply spreading awareness, you can be part of this transformative work. As it is written in Hebrews 13:3, "Continue to remember those in prison as if you were together with them in chains."</p>
                                
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

  




                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-section -->


<?php
get_footer();
?>
