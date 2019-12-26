<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Practice Areas", $buffer);
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
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="practice-area bg-white ftco-animate p-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-auction"></span>
                        </div>
                        <h3 class="mb-3"><a href="workers-compensation.html">Workers' Compensation</a></h3>
                        <p>Helping injured workers obtain the workers' compensation benefits which they are legally
                            owed.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="practice-area bg-white ftco-animate p-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-money"></span>
                        </div>
                        <h3 class="mb-3"><a href="social-security.html">Social Security Disability</a></h3>
                        <p>Helping workers with their claims for Social Security Disability Insurance Benefits (SSDI)
                            and Supplemental Security Income Benefits (SSI).</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="practice-area bg-white ftco-animate p-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-employee"></span>
                        </div>
                        <h3 class="mb-3"><a href="#">Industrial Disability Retirement</a></h3>
                        <p>Helping workers with the inability to perform the usual job duties due to a work-related
                            injury or illness.</p>
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