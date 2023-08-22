<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Our Team", $buffer);
$buffer = str_replace("%DESC%", "The employees at Sprenkle, Georgariou and Dilles, LLP. includes multiple attorneys, legal assistants, and back staff, creating an environment best suited to helping workers receive the benefits they deserve.", $buffer);

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
                                class="ion-ios-arrow-forward"></i></a></span> <span>Our Team <i
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
                                <p>Attorney Stephen D. Sprenkle, who retired as of May 31, 2019, focused his practice on
                                    representing public safety officers for over 46 years. He provided exceptional legal
                                    representation, and was known in the community as the premier attorney for them.<br>
                                    <a href="stephen.html" class="nav-link">Read more here.</a>
                                </p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/3_tiny.jpg" alt="Stephen Sprenkle">
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
                                <p>Attorney Michael P. Georgariou II is the senior and managing partner. He represents
                                    hundreds of peace officers, and is very familiar with the unique circumstances and
                                    legally-presumptive injuries applicable to them in their cases. He is committed to
                                    providing exceptional legal representation, and is known in the community for
                                    such.<br>
                                    <a href="michael.html" class="nav-link">Read more here.</a>
                                </p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/mpg_tiny.jpg" alt="Michael Georgariou">
                                </div>
                                <div class="name align-self-center">Michael P. Georgariou II<span
                                        class="position">Partner</span>
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
                                <p>Attorney Nicholas J. Dilles is a partner at Sprenkle, Georgariou & Dilles, LLP and a
                                    certified specialist in Workers' Compensation Law by the State Bar of California
                                    Board
                                    of Legal Specialization. Mr. Dilles has established a reputation for his tenacity
                                    and
                                    resourceful approach in representing his clients.<br>
                                    <a href="nicholas.html" class="nav-link">Read more here.</a>
                                </p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/njd_tiny.jpg" alt="Nicholas Dilles">
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
                                    <a href="samuel.html" class="nav-link">Read more here.</a>
                                </p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/sjl_tiny.jpg" alt="Samuel Lawrence">
                                </div>
                                <div class="name align-self-center">Samuel J. Lawrence <span class="position">Associate
                                        Attorney</span>
                                </div>
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
                                    <img src="images/erg_square.jpg" alt="Evelia Gutierrez">
                                </div>
                                <div class="name align-self-center">Evelia Gutierrez <span class="position">Office
                                        Manager</span>
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
                                    <img src="images/edw_square.jpg" alt="Edna Williams">
                                </div>
                                <div class="name align-self-center">Edna Williams<span class="position">Legal Assistant
                                        to Michael Georgariou II</span>
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
                                    <img src="images/srv_square.jpg" alt="Sandra Acosta">
                                </div>
                                <div class="name align-self-center">Sandra Acosta <span class="position">Legal Assistant
                                        to Nicholas Dilles</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-fifth col-sm-6">
                <div class="block-2-staff ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(images/maria.jpg);">
                            <div class="box">
                                <h2>Maria Montejano</h2>
                                <p>Legal Assistant to Samuel Lawrence</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/maria.jpg" alt="Maria Montejano">
                                </div>
                                <div class="name align-self-center">Maria Montejano <span class="position">Legal Assistant
                                        to Samuel Lawrence</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-fifth col-sm-6">
                <div class="block-2-staff ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(images/acl2.jpg);">
                            <div class="box">
                                <h2>Arlett L. Campos</h2>
                                <p>New Client Coordinator</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/acl2.jpg" alt="Arlett L. Campos">
                                </div>
                                <div class="name align-self-center">Arlett L. Campos <span class="position">New Client
                                        Coordinator</span>
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
