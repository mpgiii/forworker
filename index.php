<?php
ob_start();
include("indexheader.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Sprenkle, Georgariou & Dilles, LLP.", $buffer);
echo $buffer;
?>


    <div class="hero-wrap js-fullheight" style="background-image: url('images/staff.jpg');"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <span>Sprenkle, Georgariou & Dilles, LLP.</span>
                    </h1>
                    <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: .2 }"><br>Partners
                        Michael P. Georgariou II and Nicholas J. Dilles have the reputations for quality trial skills
                        and in-depth knowledge of California workers' compensation laws. We also provide legal services
                        related to Social Security disability claims.<br></h2>
                    <p><br><br><a href="contact.html" class="btn btn-primary py-3 px-4">Request a Free Consultation</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb services-section">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-md-3 text-center services align-self-stretch ftco-animate p-3">
                    <div class="icon"><span class="flaticon-auction"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"><a href="workers-compensation.html">Workers' Compensation</a></h3>
                        <p>The attorneys of Sprenkle, Georgariou & Dilles, LLP are experienced with and skilled at
                            helping injured workers obtain the workers' compensation benefits which they are legally
                            owed.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center services align-self-stretch ftco-animate p-3">
                    <div class="icon"><span class="flaticon-money"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"><a href="social-security.html">Social Security Disability</a></h3>
                        <p>The attorneys of Sprenkle, Georgariou & Dilles, LLP can assist you with your claim for Social
                            Security Disability Insurance Benefits (SSDI) and Supplemental Security Income Benefits
                            (SSI).</p>
                    </div>
                </div>
                <div class="col-md-3 text-center services align-self-stretch ftco-animate p-3">
                    <div class="icon"><span class="flaticon-lawyer"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"><a href="team.html">Our Attorneys</a></h3>
                        <p>We have the reputations for quality trial skills and in-depth knowledge of California
                            workers' compensation and social security laws.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
                    <div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"><a href="links.html">Links</a></h3>
                        <p>There are some resources which may be helpful to look over before or during the pursual of an
                            injured worker case.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch align-items-center justify-content-center"
                         style="background-image:url(images/legal-stock.jpg);">
                    </div>
                </div>
                <div class="col-md-6 px-5 py-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Firm Overview</h2>
                            <p>The law firm of Sprenkle, Georgariou & Dilles, LLP specializes in the representation of
                                injured workers before the Workers' Compensation Appeals Board.<br>
                                Workers' compensation law is one of the most complicated areas of California law.
                                Partners Michael P. Georgariou II and Nicholas J. Dilles have the reputations for
                                quality trial skills and in-depth knowledge of California workers' compensation laws. We
                                also provide legal services related to Social Security disability claims.<br>
                                Most of our staff is fluently bilingual (Spanish-English).<br></p>
                            <h5 class="mb-4">Why Choose Us?</h5>
                            <p>Our primary concern is helping injured workers obtain quality medical care and the proper
                                benefits. We have provided skilled and aggressive representation for thousands of
                                injured workers, securing the quality medical care and financial benefits to which they
                                have been entitled. As a result, we have been fortunate to have received most of our new
                                clients by referrals from former and current satisfied clients. We can help you too!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">

                    <h2 class="mb-4">Practice Areas</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-auction"></span>
                        </div>
                        <h3><a href="workers-compensation.html">Workers' Compensation</a></h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-money"></span>
                        </div>
                        <h3><a href="social-security.html">Social Security Disability</a></h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-employee"></span>
                        </div>
                        <h3><a href="#">Industrial Disability Retirement</a></h3>
                    </div>
                </div>
                <!-- other icons        	<div class="col-md-3 col-lg-2 text-center">
                                <div class="practice-area ftco-animate">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-shield"></span>
                                    </div>
                                    <h3><a href="#">Insurance Law</a></h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 text-center">
                                <div class="practice-area ftco-animate">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-handcuffs"></span>
                                    </div>
                                    <h3><a href="#">Criminal Law</a></h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 text-center">
                                <div class="practice-area ftco-animate">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-house"></span>
                                    </div>
                                    <h3><a href="#">Property Law</a></h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 text-center">
                                <div class="practice-area ftco-animate">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-fire"></span>
                                    </div>
                                    <h3><a href="#">Fire Accident</a></h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 text-center">
                                <div class="practice-area ftco-animate">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-medicine"></span>
                                    </div>
                                    <h3><a href="#">Drug Offenses</a></h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 text-center">
                                <div class="practice-area ftco-animate">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-handcuffs"></span>
                                    </div>
                                    <h3><a href="#">Sexual Offenses</a></h3>
                                </div>
                            </div>-->
            </div>
        </div>
    </section>

    <section class="ftco-section bg-secondary">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Our Attorneys</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/3.jpg);">
                                <div class="box">
                                    <h2>Stephen D. Sprenkle</h2>
                                    <p>Retired</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>Mr. Sprenkle, who retired as of May 31, 2019, was a certified specialist in
                                        Workers’ Compensation Law by the State Bar of California Board of Legal
                                        Specialization.<br>
                                        <a href="stephen.html" class="nav-link">Read more here.</a></p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/3.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Stephen D. Sprenkle <span class="position">Retired</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/mpg_square.jpg);">
                                <div class="box">
                                    <h2>Michael P. Georgariou II</h2>
                                    <p>Partner</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>Mr. Georgariou is a certified specialist in Workers’ Compensation Law by the
                                        State Bar of California Board of Legal Specialization, and is bilingual
                                        (English-Spanish).<br>
                                        <a href="michael.html" class="nav-link">Read more here.</a></p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/mpg_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Michael P. Georgariou II<span class="position">Partner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/njd_square.jpg);">
                                <div class="box">
                                    <h2>Nicholas J. Dilles</h2>
                                    <p>Partner</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>After graduating from law school, Mr. Dilles provided legal aid services at
                                        California Rural Legal Assistance in Watsonville, California before joining this
                                        law firm.<br>
                                        <a href="nicholas.html" class="nav-link">Read more here.</a></p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/njd_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Nicholas J. Dilles <span class="position">Partner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/sjl_square.jpg);">
                                <div class="box">
                                    <h2>Samuel J. Lawrence</h2>
                                    <p>Associate Attorney</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>Mr. Lawrence has lived in the Monterey area since 2015, and works at Sprenkle,
                                        Georgariou & Dilles, LLP. as an associate attorney.<br>
                                        <a href="samuel.html" class="nav-link">Read more here.</a></p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/sjl_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Samuel J. Lawrence <span class="position">Associate Attorney</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.html'; ?>