<?php
/**
 * Template Name: Contribute
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

                    <p class="lead text-center">Your generous contributions help us continue our mission of serving prisoners and their families</p>
                    
                    <!-- Contribution Methods -->
                    <div class="section-padding">
                        <div class="row">
                            <!-- Cheque Donation -->
                            <div class="col-md-4">
                                <div class="contribution-method text-center">
                                    <div class="method-icon">
                                      <span class="glyphicon glyphicon-file" style="font-size:60px;"></span>
<i class="fa fa-money fa-4x"></i>
                                    </div>
                                    <h3>By Cheque</h3>
                                    <p>Make your cheque payable to:</p>
                                    <p><strong>Prison Ministry India - TamilNadu</strong></p>
                                    <p>and mail it to our office address:</p>
                                    <address>
                                        Prison Ministry India - TamilNadu<br>
                                        No. 8, 2nd Street<br>
                                        Santhome, Chennai - 600004<br>
                                        Tamil Nadu, India
                                    </address>
                                </div>
                            </div>
                            
                            <!-- Cash Donation -->
                            <div class="col-md-4">
                                <div class="contribution-method text-center">
                                    <div class="method-icon">
                                        <i class="fa fa-inr fa-4x text-success"></i>
                                    </div>
                                    <h3>Cash Donation</h3>
                                    <p>You can make cash donations at our office during working hours:</p>
                                    <p><strong>Monday - Saturday</strong><br>10:00 AM - 5:00 PM</p>
                                    <p><strong>Sunday</strong><br>10:00 AM - 1:00 PM</p>
                                    <p>Please ensure to collect your receipt for all cash donations.</p>
                                </div>
                            </div>
                            
                            <!-- Online Transfer -->
                            <div class="col-md-4">
                                <div class="contribution-method text-center">
                                    <div class="method-icon">
                                        <i class="fa fa-bank fa-4x text-info"></i>
                                    </div>
                                    <h3>Online Transfer</h3>
                                    <p>Make a direct bank transfer to our account:</p>
                                    <div class="bank-details">
                                        <div class="detail-item">
                                            <span class="detail-label">Account Name:</span>
                                            <span class="detail-value">Prison Ministry India - TamilNadu</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Account Number:</span>
                                            <span class="detail-value">35915697956</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Bank Name:</span>
                                            <span class="detail-value">State Bank of India</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Branch:</span>
                                            <span class="detail-value">San Thome Branch, Chennai</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">IFSC Code:</span>
                                            <span class="detail-value">SBIN0005797</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Account Type:</span>
                                            <span class="detail-value">Savings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="section-padding" >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="alert alert-info">
                                        <h4><i class="fa fa-info-circle"></i> Important Information</h4>
                                        <ul>
                                            <li>All donations to Prison Ministry India - TamilNadu are eligible for tax exemption under Section 80G of the Income Tax Act.</li>
                                            <li>For donations above ₹1,000, please provide your PAN number to receive tax exemption certificate.</li>
                                            <li>For NRI donations or foreign contributions, please contact our office for specific instructions.</li>
                                            <li>For any donation-related queries, please email us at <a href="mailto:pmitn@yahoo.co.in">pmitn@yahoo.co.in</a> or call +91-44-48603491.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Donation Receipts</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>For all donations, you will receive:</p>
                                            <ul>
                                                <li>Immediate acknowledgment for online transfers</li>
                                                <li>Official receipt within 7-10 working days</li>
                                                <li>Annual donation statement (if requested)</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Other Ways to Contribute</h3>
                                        </div>
                                        <div class="panel-body">
                                            <h4>In-Kind Donations</h4>
                                            <p>We also accept in-kind donations such as:</p>
                                            <ul>
                                                <li>Books and educational materials</li>
                                                <li>Clothing and toiletries for prisoners</li>
                                                <li>Stationery and art supplies</li>
                                                <li>Food supplies for our rehabilitation programs</li>
                                            </ul>
                                            <p>Please contact us before making in-kind donations to ensure we can accept the items.</p>
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

    /* Contribution Methods */
    .contribution-method {
        background: #fff;
        padding: 30px 20px;
        border-radius: 5px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        height: 100%;
        transition: all 0.3s ease;
        border: 1px solid #eee;
    }

    .contribution-method:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    }

    .method-icon {
        margin-bottom: 20px;
        color: #e74c3c;
    }

    .contribution-method h3 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 20px;
        font-weight: 600;
    }

    /* Bank Details */
    .bank-details {
        text-align: left;
        margin-top: 20px;
        background: #f8f9fa;
        padding: 15px;
        border-radius: 4px;
    }

    .detail-item {
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px dashed #ddd;
    }

    .detail-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .detail-label {
        font-weight: 600;
        color: #2c3e50;
        display: block;
        margin-bottom: 5px;
    }

    .detail-value {
        color: #e74c3c;
        font-size: 16px;
    }

    /* Contact Methods */
    .contact-methods {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .contact-method {
        margin: 0 20px 20px;
        text-align: center;
        min-width: 200px;
    }

    .contact-method i {
        font-size: 36px;
        color: #e74c3c;
        margin-bottom: 15px;
        display: block;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .section-padding {
            padding: 40px 0;
        }
        
        .contribution-method {
            margin-bottom: 30px;
        }
    }

    @media (max-width: 767px) {
        .section-padding {
            padding: 30px 0;
        }
        
        .page-title {
            font-size: 24px;
        }
        
        .contact-method {
            margin: 0 10px 20px;
            min-width: 150px;
        }
    }

    @media (max-width: 480px) {
        .contact-methods {
            flex-direction: column;
            align-items: center;
        }
        
        .contact-method {
            margin: 0 0 30px;
            width: 100%;
        }
    }
</style>

<?php
get_footer();
?>