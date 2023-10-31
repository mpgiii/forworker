<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Attorneys", $buffer);
$buffer = str_replace("%DESC%", "Attorneys Stephen Sprenkle and Michael Georgariou have a proven reputation with public safety officers in Monterey County.", $buffer);

echo $buffer;
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/temp.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Attorneys</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Attorneys <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container-fluid" style="max-width:1000px">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Attorneys</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
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
            <div class="col-lg-6 col-sm-6">
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
                                <p>Attorney Michael P. Georgariou II has been a licensed attorney since June 2000. He has practiced workers' compensation law since 2001. He has represented thousands of employees injured on the job, including police officers, deputy sheriffs, correctional officers, firefighters, and many other public safety and public employees. He is very familiar with the unique circumstances and legally-presumptive injuries applicable to such public safety professionals.<br/>
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
        </div>
    </div>
    <!-- staff -->
</section>


<?php include 'footer.html'; ?>
