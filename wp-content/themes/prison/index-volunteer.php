<?php
/**
 * Template Name: Volunteer
 * 
 * @package prison
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<section id="volunteer" class="volunteer-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Become a Volunteer</h2>
                    <p class="lead">Join us in our mission to bring hope and transformation to prisoners and their families</p>
                </div>
            </div>
        </div>

        <!-- Volunteer Info Cards -->
        <div class="row">
            <div class="col-md-4">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>Prison Ministry India is the only organization recognized by Catholic Bishops' Conference of India (CBCI) working for the welfare of prisoners across India.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Our Reach</h3>
                    <p>We serve in all prisons, convicted juvenile centers, and vigilance homes across Tamil Nadu, bringing hope to those in need.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>Our Volunteers</h3>
                    <p>Dedicated individuals committed to making a difference in the lives of prisoners and their families through compassionate service.</p>
                </div>
            </div>
        </div>

        <!-- Volunteer Guidelines -->
        <div class="guidelines-section">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="guidelines-box">
                        <h3 class="text-center">Volunteer Guidelines</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="guideline-item">
                                    <div class="guideline-number">1</div>
                                    <div class="guideline-content">
                                        <h4>Commitment</h4>
                                        <p>Regular attendance at monthly diocesan meetings is mandatory. Three consecutive absences without notice may result in removal from the program.</p>
                                    </div>
                                </div>
                                <div class="guideline-item">
                                    <div class="guideline-number">2</div>
                                    <div class="guideline-content">
                                        <h4>Visitation Rules</h4>
                                        <p>Always visit in pairs, never alone. Notify the office in advance if unable to make a scheduled visit.</p>
                                    </div>
                                </div>
                                <div class="guideline-item">
                                    <div class="guideline-number">3</div>
                                    <div class="guideline-content">
                                        <h4>Financial Policy</h4>
                                        <p>No personal collection of funds. All donations must be processed through the diocesan unit.</p>
                                    </div>
                                </div>
                                <div class="guideline-item">
                                    <div class="guideline-number">4</div>
                                    <div class="guideline-content">
                                        <h4>Professional Boundaries</h4>
                                        <p>Maintain professional boundaries. Do not host prisoners or their family members at personal residences.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="guideline-item">
                                    <div class="guideline-number">5</div>
                                    <div class="guideline-content">
                                        <h4>Code of Conduct</h4>
                                        <p>Follow all prison regulations and maintain appropriate behavior during visits.</p>
                                    </div>
                                </div>
                                <div class="guideline-item">
                                    <div class="guideline-number">6</div>
                                    <div class="guideline-content">
                                        <h4>Documentation</h4>
                                        <p>Submit all prisoner assistance requests through proper channels with proper documentation.</p>
                                    </div>
                                </div>
                                <div class="guideline-item">
                                    <div class="guideline-number">7</div>
                                    <div class="guideline-content">
                                        <h4>Representation</h4>
                                        <p>Only designated office bearers may represent the Prison Ministry officially.</p>
                                    </div>
                                </div>
                                <div class="guideline-item">
                                    <div class="guideline-number">8</div>
                                    <div class="guideline-content">
                                        <h4>Personal Growth</h4>
                                        <p>Personal commitment and spiritual growth are essential for effective ministry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Volunteer Process -->
        <div class="process-section">
            <h3 class="text-center">How to Become a Volunteer</h3>
            <div class="process-steps">
                <div class="process-item">
                    <div class="process-icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <h4>1. Apply</h4>
                    <p>Submit your application form with references</p>
                </div>
                <div class="process-arrow">
                    <i class="fa fa-arrow-right"></i>
                </div>
                <div class="process-item">
                    <div class="process-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h4>2. Training</h4>
                    <p>Complete the mandatory orientation program</p>
                </div>
                <div class="process-arrow">
                    <i class="fa fa-arrow-right"></i>
                </div>
                <div class="process-item">
                    <div class="process-icon">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <h4>3. Join</h4>
                    <p>Start your journey as a volunteer</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="cta-section text-center">
            <h3>Ready to Make a Difference?</h3>
            <p>Join our team of dedicated volunteers and help transform lives through compassionate service.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Contact Us to Volunteer</a>
        </div>
    </div>
</section>

<style>
    /* Main Section Styling */
    .volunteer-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .section-title h2 {
        color: #2c3e50;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 15px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title h2:after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 80px;
        height: 3px;
        background: #e74c3c;
        transform: translateX(-50%);
    }

    .section-title .lead {
        color: #666;
        font-size: 18px;
        margin-bottom: 40px;
    }

    /* Info Cards */
    .info-card {
        background: #fff;
        padding: 30px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
    }

    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .card-icon {
        width: 80px;
        height: 80px;
        background: #e74c3c;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 36px;
        transition: all 0.3s ease;
    }

    .info-card:hover .card-icon {
        background: #2c3e50;
        transform: rotateY(180deg);
    }

    .info-card h3 {
        color: #2c3e50;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .info-card p {
        color: #666;
        line-height: 1.6;
    }

    /* Guidelines Section */
    .guidelines-section {
        margin: 60px 0;
    }

    .guidelines-box {
        background: #fff;
        border-radius: 5px;
        padding: 40px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .guidelines-box h3 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        position: relative;
        padding-bottom: 15px;
    }

    .guidelines-box h3:after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 60px;
        height: 3px;
        background: #e74c3c;
        transform: translateX(-50%);
    }

    .guideline-item {
        display: flex;
        margin-bottom: 25px;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .guideline-item:hover {
        background: #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transform: translateX(5px);
    }

    .guideline-number {
        width: 40px;
        height: 40px;
        background: #e74c3c;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 18px;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .guideline-content h4 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .guideline-content p {
        color: #666;
        margin: 0;
        line-height: 1.6;
    }

    /* Process Section */
    .process-section {
        margin: 60px 0;
        text-align: center;
    }

    .process-section h3 {
        color: #2c3e50;
        margin-bottom: 40px;
        font-weight: 600;
        position: relative;
        display: inline-block;
        padding-bottom: 15px;
    }

    .process-section h3:after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 60px;
        height: 3px;
        background: #e74c3c;
        transform: translateX(-50%);
    }

    .process-steps {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: 40px 0;
    }

    .process-item {
        text-align: center;
        padding: 0 30px;
        max-width: 200px;
    }

    .process-icon {
        width: 100px;
        height: 100px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 40px;
        color: #e74c3c;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .process-item:hover .process-icon {
        background: #e74c3c;
        color: #fff;
        transform: scale(1.1);
    }

    .process-item h4 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .process-item p {
        color: #666;
        font-size: 14px;
        margin: 0;
    }

    .process-arrow {
        color: #e74c3c;
        font-size: 24px;
        margin: 0 10px;
        opacity: 0.7;
    }

    /* Call to Action */
    .cta-section {
        background: #2c3e50;
        padding: 60px 20px;
        border-radius: 5px;
        margin-top: 60px;
    }

    .cta-section h3 {
        color: #fff;
        font-size: 28px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .cta-section p {
        color: rgba(255,255,255,0.8);
        font-size: 18px;
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-primary {
        background: #e74c3c;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: #c0392b;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Responsive Styles */
    @media (max-width: 991px) {
        .process-steps {
            flex-direction: column;
        }

        .process-item {
            margin-bottom: 30px;
        }

        .process-arrow {
            transform: rotate(90deg);
            margin: 10px 0;
        }

        .guideline-item {
            padding: 15px;
        }
    }

    @media (max-width: 767px) {
        .section-title h2 {
            font-size: 28px;
        }

        .info-card {
            margin-bottom: 30px;
        }

        .guidelines-box {
            padding: 20px;
        }

        .guideline-item {
            flex-direction: column;
            text-align: center;
        }

        .guideline-number {
            margin: 0 auto 15px;
        }

        .cta-section {
            padding: 40px 20px;
        }

        .cta-section h3 {
            font-size: 24px;
        }

        .cta-section p {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .section-title h2 {
            font-size: 24px;
        }

        .info-card {
            padding: 20px 15px;
        }

        .card-icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
        }

        .process-icon {
            width: 80px;
            height: 80px;
            font-size: 32px;
        }

        .process-item h4 {
            font-size: 18px;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
        }
    }
</style>

<?php get_footer(); ?>