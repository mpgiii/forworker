<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Our Team", $buffer);
echo $buffer;
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Our Team</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Attorneys <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Attorneys</h2>
                </div>
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
                                <p>Mr. Sprenkle, who retired as of May 31, 2019, was a certified specialist in Workers’
                                    Compensation Law by the State Bar of California Board of Legal Specialization.<br>
                                    <a href="stephen.html" class="nav-link">Read more here.</a></p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/3.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Stephen D. Sprenkle <span
                                            class="position">Retired</span></div>
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
                                <p>Mr. Georgariou is a certified specialist in Workers’ Compensation Law by the State
                                    Bar of California Board of Legal Specialization, and is bilingual (English-Spanish).<br>
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
                                    California Rural Legal Assistance in Watsonville, California before joining this law
                                    firm.<br>
                                    <a href="nicholas.html" class="nav-link">Read more here.</a></p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/njd_square.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Nicholas J. Dilles <span
                                            class="position">Partner</span></div>
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
        <!-- staff -->

        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><br>Our Legal Staff</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-fifth col-sm-6">
                    <div class="block-2-staff ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/erg_square.jpg);">
                                <div class="box">
                                    <h2>Evelia Gutierrez</h2>
                                    <p>Office Manager</p>
                                </div>
                            </div>
                            <div class="back">
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/erg_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Evelia Gutierrez <span class="position">Office Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-fifth col-sm-6">
                    <div class="block-2-staff ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/edw_square.jpg);">
                                <div class="box">
                                    <h2>Edna Williams</h2>
                                    <p>Legal Assistant to Michael Georgariou II</p>
                                </div>
                            </div>
                            <div class="back">
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/edw_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Edna Williams<span class="position">Legal Assistant to Michael Georgariou II</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-fifth col-sm-6">
                    <div class="block-2-staff ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/srv_square.jpg);">
                                <div class="box">
                                    <h2>Sandra Acosta</h2>
                                    <p>Legal Assistant to Nicholas Dilles</p>
                                </div>
                            </div>
                            <div class="back">
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/srv_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Sandra Acosta <span class="position">Legal Assistant to Nicholas Dilles</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-fifth col-sm-6">
                    <div class="block-2-staff ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/acl_square.jpg);">
                                <div class="box">
                                    <h2>Arlett Campos</h2>
                                    <p>Legal Assistant to Samuel Lawrence</p>
                                </div>
                            </div>
                            <div class="back">
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/acl_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Arlett Campos <span class="position">Legal Assistant to Samuel Lawrence</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-fifth col-sm-6">
                    <div class="block-2-staff ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(images/lbg_square.jpg);">
                                <div class="box">
                                    <h2>Liz Gonzalez</h2>
                                    <p>New Client Coordinator</p>
                                </div>
                            </div>
                            <div class="back">
                                <div class="author d-flex">
                                    <div class="image mr-3 align-self-center">
                                        <img src="images/lbg_square.jpg" alt="">
                                    </div>
                                    <div class="name align-self-center">Liz Gonzalez <span class="position">New Client Coordinator</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><br>Our Team<br></h2>

                    <div class="image mr-3 align-self-center">
                        <br>
                        <div style="text-align:center"><img src="images/back_staff.jpg" alt="back staff"
                                                            style="width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.html'; ?>