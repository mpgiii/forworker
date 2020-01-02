<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Practice Areas", $buffer);
$buffer = str_replace("%DESC%", "Sprenkle, Georgariou and Dilles, LLP. offers services for cases involving workers' compensation, social security disability, and industrial disability retirement.", $buffer);

echo $buffer;
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Practice Areas</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Practice Areas <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
			<div class="row mb-5 pb-3 ftco-animate">
				<h4 class="mb-4">What We Do</h4>
				<p>Our law firm specializes in the representation of injured workers before the Workers' Compensation Appeals Baord, especially in cases involving public safety officers. Although this is our speciality, we do offer representation for SSDI and IDR for clients we already represent on their workers' compensation cases.</p>
				<p>To learn more about the areas of law we represent, click below.</p>
			</div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="practice-area bg-white ftco-animate p-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-auction"></span>
                        </div>
                        <h3 class="mb-3"><a href="workers-compensation.html">Workers' Compensation</a></h3>
                        <p>Sprenkle, Georgariou &amp; Dilles, LLP. specializes in workers' compensation, helping injured workers obtain the benefits which they are legally owed.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="practice-area bg-white ftco-animate p-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-money"></span>
                        </div>
                        <h3 class="mb-3"><a href="social-security.html">Social Security Disability</a></h3>
                        <p>For existing workers' compensation clients, our firm can help with Social Security Disability Insurance (SSDI) and Supplemental Security Income (SSI).</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="practice-area bg-white ftco-animate p-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-employee"></span>
                        </div>
                        <h3 class="mb-3"><a href="#">Industrial Disability Retirement</a></h3>
                        <p>For existing workers' compensation clients, our firm can help with Industrial Disability Retirement (IDR).</p>
                    </div>
                </div>
                <!-- other icons <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-handcuffs"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Criminal Law</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-house"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Property Law</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-employee"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Employment Law</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-fire"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Fire Accident</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-money"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Financial Law</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-medicine"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Drug Offenses</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 text-center">
                                <div class="practice-area bg-white ftco-animate p-4">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-handcuffs"></span>
                                    </div>
                                    <h3 class="mb-3"><a href="practice-single.html">Sexual Offenses</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>-->
            </div>
        </div>
    </section>


<?php include 'footer.html'; ?>