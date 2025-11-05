<?php
/**
 * Template Name: Duties & Responsibilities
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
                    <div class="section-title text-center">
                        <h2>Duties and Responsibilities</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- Diocesan Coordinator Section -->
                            <div class="role-section">
                                <h3 class="role-title">Diocesan Coordinator</h3>
                                <ul class="responsibilities-list">
                                    <li>Coordinator is the ultimate responsible for what so ever happens in the name of the Prison Ministry in the Prisons.</li>
                                    <li>Coordinates all the volunteers of the prison ministry in the Archdiocese/Diocese.</li>
                                    <li>Once in a month visits all the prisons in the Diocese.</li>
                                    <li>Meets the officials in the prisons and discuss about the volunteers visit.</li>
                                    <li>Establishes the office and maintain day to day work of the ministry.</li>
                                    <li>Organizes monthly meetings and conducts the Blessed Sacrament adoration followed by the report of each unit. Time is to be maintained. (Usually it is from 3.00 pm to 5.00 pm on every second Saturday of the month).</li>
                                    <li>Prepares the budget for the ministry and adheres to the budget by Treasurer and Secretary.</li>
                                    <li>Before helping the family of the prisoners, He directs the volunteers to make the family visits with the help of Probation officers.</li>
                                    <li>Has to mobilize the funds for the ministry in consultation with the Treasurer and Secretary.</li>
                                    <li>Assists for the release and Rehabilitation of the prisoners and follows it continuously.</li>
                                    <li>All the expenses should be approved by the coordinator.</li>
                                    <li>Must ensure proper conduct of volunteers visiting the prisons and the prisoners.</li>
                                    <li>Has to identify and to encourage new volunteers and to motivate them to follow the procedure correctly.</li>
                                    <li>Makes surprise visits to the prisons to see the volunteers' ministry in the prisons.</li>
                                </ul>
                            </div>

                            <!-- Secretary Section -->
                            <div class="role-section">
                                <h3 class="role-title">Secretary</h3>
                                <ul class="responsibilities-list">
                                    <li>Secretary is to maintain the records of all the activities of the ministry in the Diocese.</li>
                                    <li>Monthly meetings report to be presented.</li>
                                    <li>Annual report is to be prepared by the Secretary.</li>
                                    <li>To plan for the monthly meetings and programs in consultation with the coordinator.</li>
                                    <li>To confirm the visit of the volunteers in the concerned prisons.</li>
                                    <li>To meet the concerned superintendent of the prisons to conduct the program in the prison.</li>
                                    <li>Visits the office regularly to ascertain the day to day work of the ministry.</li>
                                    <li>He is one of the signatory in the bank accounts.</li>
                                    <li>To mobilize the funds for the ministry in consultation with the Coordinator and Treasurer.</li>
                                    <li>To person to see all the activities of the volunteers as per their option.</li>
                                    <li>To check regularly the volunteers who go for house visiting.</li>
                                </ul>
                            </div>

                            <!-- Treasurer Section -->
                            <div class="role-section">
                                <h3 class="role-title">Treasurer</h3>
                                <ul class="responsibilities-list">
                                    <li>To keep all the accounts in proper manner.</li>
                                    <li>All the money collected and spent should be only through the treasurer.</li>
                                    <li>To mobilize the funds for the ministry in consultation with the Coordinator and Secretary.</li>
                                    <li>Prepare the financial statements for the year ending 31st March every year and get it audited.</li>
                                    <li>The Audited statement should be presented in the Annual general body meeting and get the approval of the volunteers and the Bishop.</li>
                                    <li>Prepare a budget for the coming year and get the approval and follow the same.</li>
                                    <li>Visits the office regularly to ascertain the day to day work of the ministry.</li>
                                    <li>The bank account is to be operated by any two - Coordinator, Secretary and Treasurer.</li>
                                    <li>Treasurer should be aware of the financial status and distribute according to the genuine need only.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links Section -->
                    
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Main Content Styling */
    .section-padding {
        padding: 60px 0;
    }

    .page-content {
        background: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .section-title {
        margin-bottom: 40px;
    }

    .section-title h2 {
        color: #2c3e50;
        font-weight: 700;
        text-transform: uppercase;
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

    /* Role Section Styling */
    .role-section {
        margin-bottom: 40px;
        padding-bottom: 30px;
        border-bottom: 1px solid #eee;
    }

    .role-section:last-child {
        border-bottom: none;
    }

    .role-title {
        color: #2c3e50;
        font-size: 24px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f1f1f1;
    }

    .responsibilities-list {
        list-style-type: none;
        padding: 0;
    }

    .responsibilities-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 12px;
        line-height: 1.6;
        color: #555;
    }

    .responsibilities-list li:before {
        content: "•";
        color: #e74c3c;
        font-weight: bold;
        font-size: 18px;
        position: absolute;
        left: 0;
        top: -1px;
    }

    /* Quick Links Styling */
    .quick-links-section {
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px solid #eee;
    }

    .quick-links {
        list-style: none;
        padding: 0;
    }

    .quick-links li {
        margin-bottom: 10px;
    }

    .quick-links a {
        color: #2c3e50;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        padding: 8px 15px;
        border-radius: 4px;
        background: #f9f9f9;
    }

    .quick-links a:hover {
        background: #e74c3c;
        color: #fff;
        padding-left: 20px;
    }

    /* Responsive Adjustments */
    @media (max-width: 767px) {
        .page-content {
            padding: 20px 15px;
        }

        .role-title {
            font-size: 22px;
        }

        .section-title h2 {
            font-size: 26px;
        }
    }

    @media (max-width: 480px) {
        .section-padding {
            padding: 40px 0;
        }

        .role-title {
            font-size: 20px;
        }

        .responsibilities-list li {
            font-size: 15px;
            padding-left: 20px;
        }
    }
</style>

<?php
get_footer();
?>