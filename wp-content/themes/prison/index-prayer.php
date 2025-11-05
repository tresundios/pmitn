<?php
/**
 * Template Name: Prayer
 * 
 * @package prison
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<section id="primary" class="site-main section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    
                    
                    <!-- St. Maximilian Kolbe Section -->
                    <div >
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="saint-profile">
                                    <h3>ST. MAXIMILIAN KOLBE</h3>
                                    <div class="saint-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saints/Fr.Maximilian_Kolbe_in_1936.jpg" alt="St. Maximilian Kolbe" class="img-circle" style="max-width: 200px; margin: 20px 0;">
                                    </div>
                                    <p class="lead">Patron Saint of prisoners, drug addicts, journalists, and the pro-life movement</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Novena Prayer Section -->
                    <div >
                        <div class="container">
                            <div class="prayer-section">
                                <h3 class="section-title text-center">NOVENA PRAYER SEEKING THE INTERCESSION OF ST. MAXIMILIAN KOLBE</h3>
                                <div class="prayer-content">
                                    <p>O Lord Jesus Christ, who said, "Greater love than this no man has that a man lay down his life for his friends," through the intercession of St. Maximilian Kolbe, whose life illustrated such love, we beseech You to grant us our petitions...</p>
                                    <p>Through the Militia of the Immaculata movement, which he founded, he spread devotion to Our Lady throughout the world, gave himself without reserve to her service, and led countless souls to Christ.</p>
                                    <p>Through his imprisonment and final sacrifice in a starvation bunker, he witnessed to the victory of love over hatred and the power of faith in the most extreme circumstances.</p>
                                    <p>Through his heavenly intercession, we ask for the grace to follow his example of heroic love and self-sacrifice in our daily lives.</p>
                                    <p>We ask this through Christ our Lord. Amen.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prayer to St. Maximilian Kolbe -->
                    <div class="section-padding">
                        <div class="prayer-section">
                            <h3 class="section-title text-center">PRAYER TO ST. MAXIMILIAN KOLBE</h3>
                            <div class="prayer-content">
                                <p>O St. Maximilian Kolbe, faithful follower of St. Francis, inflamed by the love of God you dedicated your life to the practice of virtue and to works of the apostolate.</p>
                                <p>Look down upon us who, in need of your powerful intercession, confidently turn to you in prayer.</p>
                                <p>You gave up your life in the concentration camp at Auschwitz in exchange for that of a young father condemned to death, thus fulfilling the words of the Gospel: "Greater love has no man than this, that a man lay down his life for his friends."</p>
                                <p>Obtain for us the grace to live in the love of God and to give ourselves fully to the service of others, especially those most in need of God's mercy.</p>
                                <p>Help us, like you, to be faithful to the will of God in all things, even in the midst of trials and sufferings.</p>
                                <p>We ask this through Christ our Lord. Amen.</p>
                            </div>
                        </div>
                    </div>

                    <!-- A Prisoner's Prayer -->
                    <div >
                        <div class="container">
                            <div class="prayer-section">
                                <h3 class="section-title text-center">A PRISONER'S PRAYER</h3>
                                <div class="prayer-content">
                                    <p>Loving Father, I come before You in my brokenness, aware of my sins and failures.</p>
                                    <p>In this time of confinement, help me to find true freedom in Your love and mercy.</p>
                                    <p>Give me the strength to face each day with hope, the courage to change my life, and the wisdom to learn from my mistakes.</p>
                                    <p>Bless my family and loved ones who suffer because of my actions. Comfort them and provide for their needs.</p>
                                    <p>Help me to use this time to grow closer to You, to seek forgiveness, and to prepare for a new beginning.</p>
                                    <p>Through the intercession of St. Maximilian Kolbe, who knew the pain of imprisonment, I place all my trust in You.</p>
                                    <p>I ask this through Christ our Lord. Amen.</p>
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

    .page-title {
      
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 2px solid #eee;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        text-align: center;
    }

    /* Prayer Sections */
    .prayer-section {
        background: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }

    .section-title {
       
        margin-top: 0;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
        font-weight: 600;
    }

    .prayer-content {
        line-height: 1.8;
        font-size: 16px;
    }

    .prayer-content p {
        margin-bottom: 20px;
    }

    /* Saint Profile */
    .saint-profile {
        margin-bottom: 40px;
    }

    .saint-profile h3 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .saint-image {
        margin: 20px 0;
    }

    .saint-image img {
        border: 5px solid #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Resource Boxes */
    .resource-box {
        background: #fff;
        border: 1px solid #e1e1e1;
        border-radius: 5px;
        padding: 25px;
        margin-bottom: 30px;
        height: 100%;
        transition: all 0.3s ease;
    }

    .resource-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .resource-box h4 {
        color: #2c3e50;
        margin-top: 0;
        font-weight: 600;
    }

    .resource-box i {
        color: #e74c3c;
        margin-right: 10px;
    }

    /* Form Styling */
    .form-horizontal .control-label {
        text-align: left;
        padding-top: 7px;
        margin-bottom: 0;
    }

    .form-control {
        border-radius: 3px;
        border: 1px solid #ddd;
        box-shadow: none;
        height: 40px;
    }

    textarea.form-control {
        height: auto;
        min-height: 120px;
    }

    .btn-primary {
        background-color: #e74c3c;
        border-color: #c0392b;
        padding: 8px 25px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 13px;
    }

    .btn-primary:hover {
        background-color: #c0392b;
        border-color: #a93226;
    }

    .btn-default {
        background-color: #f8f9fa;
        border-color: #ddd;
        padding: 8px 25px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 13px;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .section-padding {
            padding: 40px 0;
        }
        
        .prayer-section {
            padding: 25px;
        }
    }

    @media (max-width: 767px) {
        .section-padding {
            padding: 30px 0;
        }
        
        .page-title {
            font-size: 24px;
        }
        
        .section-title {
            font-size: 20px;
        }
        
        .form-horizontal .control-label {
            padding-top: 0;
            margin-bottom: 8px;
        }
        
        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<?php
get_footer();
?>