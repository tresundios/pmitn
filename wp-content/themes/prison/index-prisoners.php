<?php
/**
 * Template Name: Prisoners in Tamilnadu
 * 
 * @package prison
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<section id="prisoners" class="prisoners-section">


    <div class="container section-padding">
        <!-- Statistics Overview -->
        <div class="stats-overview">
            <div class="row">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="stat-content">
                            <h3>22,101</h3>
                            <p>Authorized Capacity</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <h3>14,780</h3>
                            <p>Current Population</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-chart-pie"></i>
                        </div>
                        <div class="stat-content">
                            <h3>67%</h3>
                            <p>Occupancy Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gender Distribution -->
        <div class="gender-distribution">
            <h2 class="section-title">Gender Distribution</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="gender-card male">
                        <div class="gender-icon">
                            <i class="fa fa-male"></i>
                        </div>
                        <div class="gender-stats">
                            <h3>14,115</h3>
                            <p>Male Prisoners (95.5%)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gender-card female">
                        <div class="gender-icon">
                            <i class="fa fa-female"></i>
                        </div>
                        <div class="gender-stats">
                            <h3>665</h3>
                            <p>Female Prisoners (4.5%)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prisoner Categories -->
        <div class="categories-section">
            <h2 class="section-title">Prisoner Categories</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <h3>Convicted</h3>
                        <div class="category-count">5,094</div>
                        <p>34.5% of total population</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fa fa-balance-scale"></i>
                        </div>
                        <h3>Under Trial</h3>
                        <div class="category-count">1,283</div>
                        <p>8.7% of total population</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h3>Remand Prisoners</h3>
                        <div class="category-count">7,301</div>
                        <p>49.4% of total population</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facilities Overview -->
<div class="facilities-section">
    <h2 class="section-title">Our Facilities</h2>
    <div class="facility-tabs">
        <div class="facility-tab active" data-tab="puzhal1">Puzhal 1</div>
        <div class="facility-tab" data-tab="puzhal2">Puzhal 2</div>
        <div class="facility-tab" data-tab="puzhal3">Puzhal 3</div>
        <div class="facility-tab" data-tab="saidapet">Saidapet</div>
        <div class="facility-tab" data-tab="santhome">Santhome</div>
        <div class="facility-tab" data-tab="subjails">Sub Jails</div>
    </div>
    <div class="facility-content">
        <div class="facility-info active" id="puzhal1">
            <h3>Central Jail - Puzhal 1</h3>
            <p><strong>Category:</strong> Convict Men</p>
            <p>Houses convicted male prisoners with various rehabilitation programs including vocational training and education. The facility focuses on reforming inmates through structured activities and skill development programs.</p>
        </div>
        <div class="facility-info" id="puzhal2">
            <h3>Central Jail - Puzhal 2</h3>
            <p><strong>Category:</strong> Remand Men</p>
            <p>Facility for male prisoners on remand, focusing on legal aid and pre-trial services. Provides necessary support and guidance to undertrial prisoners while they await court proceedings.</p>
        </div>
        <div class="facility-info" id="puzhal3">
            <h3>Central Jail - Puzhal 3</h3>
            <p><strong>Category:</strong> Women (Convict & Remand)</p>
            <p>Dedicated facility for women prisoners, offering specialized rehabilitation programs. The facility provides a safe and supportive environment with programs tailored to the specific needs of female inmates.</p>
        </div>
        <div class="facility-info" id="saidapet">
            <h3>Sub Jail - Saidapet</h3>
            <p><strong>Category:</strong> Young Offenders</p>
            <p>Special facility for young offenders with focus on education and skill development. The center provides counseling, education, and vocational training to help rehabilitate young individuals.</p>
        </div>
        <div class="facility-info" id="santhome">
            <h3>Vigilance Home - Santhome</h3>
            <p><strong>Category:</strong> Victim Girls</p>
            <p>Specialized facility providing care, protection, and rehabilitation for victim girls. Offers counseling, education, and skill development programs to help them rebuild their lives.</p>
        </div>
        <div class="facility-info" id="subjails">
            <h3>Sub Jails</h3>
            <p><strong>Locations:</strong> Ponneri, Tiruttani, Thiruvallur</p>
            <p>Network of sub-jails serving different regions, providing basic detention facilities and rehabilitation programs. These facilities focus on local prisoner management and community reintegration programs.</p>
        </div>
    </div>
</div>

        <!-- Call to Action -->
        <div class="cta-section">
            <div class="cta-content">
                <h2>Our Mission: Rehabilitation & Reintegration</h2>
                <p>We believe in the power of transformation through education, vocational training, and spiritual guidance.</p>
                <a href="/volunteer" class="btn btn-volunteer">Become a Volunteer</a>
            </div>
        </div>
    </div>
</section>

<style>
/* Base Styles */
.prisoners-section {
    font-family: 'Roboto', sans-serif;
    color: #333;
    line-height: 1.6;
}

/* Hero Section */
.prisoners-hero {
    background: linear-gradient(rgba(30, 60, 114, 0.9), rgba(42, 82, 152, 0.9)), 
                url('<?php echo get_template_directory_uri(); ?>/assets/images/prison/prison-bg.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0;
    text-align: center;
    margin-bottom: 50px;
}

.hero-content h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.hero-content .lead {
    font-size: 1.5rem;
    opacity: 0.9;
    margin-bottom: 0;
}

/* Stats Overview */
.stats-overview {
    margin-bottom: 60px;
}

.stat-card {
    background: #fff;
    border-radius: 10px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.stat-icon {
    width: 70px;
    height: 70px;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 30px;
    color: #1e3c72;
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    background: #1e3c72;
    color: #fff;
    transform: rotate(360deg);
}

.stat-content h3 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1e3c72;
    margin-bottom: 5px;
}

.stat-content p {
    color: #666;
    font-size: 1.1rem;
    margin: 0;
}

/* Gender Distribution */
.gender-distribution {
    margin: 60px 0;
}

.gender-card {
    border-radius: 10px;
    padding: 25px;
    color: #fff;
    display: flex;
    align-items: center;
    height: 100%;
    transition: transform 0.3s ease;
}

.gender-card:hover {
    transform: translateY(-5px);
}

.gender-card.male {
    background: linear-gradient(135deg, #1e3c72, #2a5298);
}

.gender-card.female {
    background: linear-gradient(135deg, #9c27b0, #e91e63);
}

.gender-icon {
    font-size: 50px;
    margin-right: 20px;
    opacity: 0.9;
}

.gender-stats h3 {
    font-size: 2.2rem;
    margin: 0 0 5px;
    color: #fff;
}

.gender-stats p {
    margin: 0;
    opacity: 0.9;
    font-size: 1.1rem;
    color: #fff;
}

/* Categories Section */
.categories-section {
    margin: 60px 0;
}

.section-title {
    text-align: center;
    margin-bottom: 40px;
    color: #1e3c72;
    position: relative;
    padding-bottom: 15px;
}

.section-title:after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    width: 80px;
    height: 3px;
    background: #e74c3c;
    transform: translateX(-50%);
}

.category-card {
    background: #fff;
    border-radius: 10px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.category-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.category-icon {
    width: 70px;
    height: 70px;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 30px;
    color: #1e3c72;
    transition: all 0.3s ease;
}

.category-card:hover .category-icon {
    background: #1e3c72;
    color: #fff;
}

.category-card h3 {
    color: #1e3c72;
    margin-bottom: 10px;
    font-size: 1.5rem;
}

.category-count {
    font-size: 2rem;
    font-weight: 700;
    color: #e74c3c;
    margin: 10px 0;
}

.category-card p {
    color: #666;
    margin: 0;
}

/* Facilities Section */
.facilities-section {
    margin: 60px 0;
    background: #f8f9fa;
    padding: 40px;
    border-radius: 10px;
}

.facility-tabs {
    display: flex;
    margin-bottom: 30px;
    border-bottom: 1px solid #ddd;
}

.facility-tab {
    padding: 12px 25px;
    cursor: pointer;
    font-weight: 500;
    color: #666;
    border-bottom: 3px solid transparent;
    transition: all 0.3s ease;
}

.facility-tab:hover {
    color: #1e3c72;
}

.facility-tab.active {
    color: #1e3c72;
    border-bottom: 3px solid #e74c3c;
}

.facility-info h3 {
    color: #1e3c72;
    margin-bottom: 15px;
}

.facility-info p {
    color: #555;
    font-size: 1.1rem;
    line-height: 1.7;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(rgba(60, 60, 60, 0.9), rgba(30, 30, 30, 0.9));
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 80px 20px;
    border-radius: 10px;
    text-align: center;
    margin: 60px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.cta-content h2 {
    font-size: 2.2rem;
    margin-bottom: 20px;
    text-shadow: 0 2px 4px rgba(238, 233, 233, 0.3);
    color: #fff;
}

.cta-content p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto 30px;
    opacity: 0.9;
    color: #fff;
}

.btn-volunteer {
    display: inline-block;
    background: #e74c3c;
    color: #fff;
    padding: 12px 35px;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid #e74c3c;
}

.btn-volunteer:hover {
    background: transparent;
    color: #fff;
    border-color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Responsive Styles */
@media (max-width: 991px) {
    .hero-content h1 {
        font-size: 2.5rem;
    }
    
    .hero-content .lead {
        font-size: 1.2rem;
    }
    
    .gender-card {
        margin-bottom: 20px;
    }
    
    .facility-tabs {
        flex-wrap: wrap;
    }
    
    .facility-tab {
        padding: 10px 15px;
        font-size: 0.9rem;
    }
}

@media (max-width: 767px) {
    .prisoners-hero {
        padding: 70px 0;
    }
    
    .hero-content h1 {
        font-size: 2rem;
    }
    
    .stat-content h3 {
        font-size: 2rem;
    }
    
    .gender-stats h3 {
        font-size: 1.8rem;
    }
    
    .category-count {
        font-size: 1.8rem;
    }
    
    .facilities-section {
        padding: 30px 20px;
    }
    
    .cta-content h2 {
        font-size: 1.8rem;
    }
}

@media (max-width: 575px) {
    .stat-card {
        margin-bottom: 20px;
    }
    
    .gender-card {
        padding: 20px;
    }
    
    .gender-icon {
        font-size: 40px;
    }
    
    .gender-stats h3 {
        font-size: 1.5rem;
    }
    
    .category-card {
        margin-bottom: 20px;
    }
    
    .cta-section {
        padding: 60px 20px;
    }
    
    .cta-content h2 {
        font-size: 1.5rem;
    }
    
    .cta-content p {
        font-size: 1rem;
    }
}

<style>
/* Existing styles... */

/* Tabs Styling */
.facility-tabs {
    display: flex;
    margin-bottom: 30px;
    border-bottom: 1px solid #ddd;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    white-space: nowrap;
    padding-bottom: 5px;
}

.facility-tab {
    padding: 12px 25px;
    cursor: pointer;
    font-weight: 500;
    color: #666;
    border-bottom: 3px solid transparent;
    transition: all 0.3s ease;
    margin-right: 5px;
    display: inline-block;
    white-space: nowrap;
    background: #f8f9fa;
    border-radius: 4px 4px 0 0;
    margin-bottom: -1px;
}

.facility-tab:last-child {
    margin-right: 0;
}

.facility-tab:hover {
    color: #1e3c72;
    background-color: rgba(30, 60, 114, 0.1);
}

.facility-tab.active {
    color: #1e3c72;
    border-bottom: 3px solid #e74c3c;
    font-weight: 600;
    background: #fff;
}

.facility-info {
    display: none;
    padding: 20px;
    background: #fff;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.facility-info.active {
    display: block;
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Responsive styles */
@media (max-width: 768px) {
    .facility-tab {
        padding: 10px 15px;
        font-size: 14px;
    }
}
</style>
</style>


<?php get_footer(); ?>