<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div class="wrap">
    <div class="row">
        <div class="col">
            <?php putRevSlider("coop_slider2") ?>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="container container-front">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-9">
                        <h3>Agrarian Reform Loans</h3>
                        <h6>To Provide loan facilities to beneficiaries of agrarian reform</h6>
                        <a class="read-more-s" href="<?php echo get_site_url(); ?>/agrarian-reform-loans/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-ship" aria-hidden="true"></i>
                    </div>
                    <div class="col-9">
                        <h3>Other agricultural Credit Loans</h3>
                        <h6>To provide loan facilities to fishermen and farmers who are not beneficiaries of agrarian reform</h6>
                        <a class="read-more-s" href="<?php echo get_site_url(); ?>/other-agricultural-credit-loans">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <div class="col-9">
                        <h3>Small and Medium Enterprise Loans</h3>
                        <h6>To provide business load or enterprises engaged in industry/agri-business and/or services, where sole proprietorship or cooperatives</h6>
                        <a class="read-more-s" href="<?php echo get_site_url(); ?>/small-and-medium-enterprise-loans">Read More</a>
                    </div>
                </div>
            </div>
        </div><br/>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </div>
                    <div class="col-9">
                        <h3>Loans to Private Corporations</h3>
                        <h6>To grant loans to member-cooperatives of the Bank</h6>
                        <a class="read-more-s" href="<?php echo get_site_url(); ?>/loans-to-private-corporations">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="col-9">
                        <h3>Loans to Individuals for Housing Purposes</h3>
                        <h6>To provide loan facilities to individuals for housing purposes for the acquisition, construction or improvement of a residential unit</h6>
                        <a class="read-more-s" href="<?php echo get_site_url(); ?>/loans-to-individuals-for-housing-purposes">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <div class="col-9">
                        <h3>Loans to individual for Consumption Purposes</h3>
                        <h6>To provide loan facilities to individual for consumption (car loans, motorcycle)</h6>
                        <a class="read-more-s" href="<?php echo get_site_url(); ?>/loans-to-individual-for-consumption-purposes">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container container-front">
        <div class="row">
            <div class="col">
                <h3 class="title-center"><i class="fa fa-circle" aria-hidden="true"></i> Our  Vision <i class="fa fa-circle" aria-hidden="true"></i></h3><br/>
                <p>Operating within the Province of Negros Oriental giving credit to the invaluable and steadfast support of 42 active primary and secondary cooperative member-investors, CBNO is now on its 24th year of banking operations.  Given a number of limitations that challenge us to seek new innovations in order to sustain, improve and expand our business reach, CBNO continues to endeavor to give  the  best cooperative banking service it can offer to its cooperative member-investors and general clientele in this part of the country</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="title-center"><i class="fa fa-circle" aria-hidden="true"></i> Our Mission <i class="fa fa-circle" aria-hidden="true"></i></h3><br/>
                <p>Responding  to the needs of our clients and investors, the Bank has continued to pursue its mission to provide quality, efficient, innovative and sustainable cooperative banking service to the general public. Excellent customer relations and efficient service require that we offer personalized approach in facilitating transactions with clients as it is apt and vital in building good image that draw in strong public support and trust.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container container-front">
        <div class="row">
            <div class="col">
                <h3>CBNO’s Core Values and Principles</h3><br/>
                <p>The Bank is committed to continue serving today and in the years ahead and is  determined to sustain and improve its performance as it braces for the greater challenge of  keeping pace with the latest trends and requisites of survival  in the banking business</p>
                <a class="read-more" href="<?php echo get_site_url(); ?>/core-values-and-principles">Read More</a>
            </div>
            <div class="col">
                <h3>Our  General Goal</h3><br/>
                <p>As CBNO is determined to perform within the cooperative banking standards, the Bank has incessantly exerted efforts to strengthen its operations and employ strategic measures that will put in place appropriate systems and procedures required to address operational risks and stringent compliance directives set by our regulatory bodies</p>
                <a class="read-more" href="<?php echo get_site_url(); ?>/our-general-goal">Read More</a>
            </div>
            <div class="col">
                <h3>Our Specific Objectives</h3><br/>
                <p>The Bank takes on the responsibility of extending assistance toward the development especially of small cooperative member-investors.  This is made possible by hosting and sponsorship of required and relevant trainings</p>
                <a class="read-more" href="<?php echo get_site_url(); ?>/our-specific-objectives">Read More</a>
            </div>
        </div>
    </div>
    <hr>
</div><!-- .wrap -->

<?php get_footer();
