<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Michael P. Georgariou II", $buffer);
echo $buffer;
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Michael P. Georgariou II</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                    href="team.html">Our Team <i class="ion-ios-arrow-forward"></i></a></span> <span>Michael P. Georgariou II <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <img src="images/mpg.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-9 col-sm-6">
                    <p>Mr. Georgariou is a certified specialist in Workers’ Compensation Law by the State Bar of
                        California Board of Legal Specialization.</p>
                    <h5 class="mb-3">Education:</h5>
                    <p>J.D., McGeorge School of Law, University of the Pacific, 2000<br>
                        B.S. Business Management, Brigham Young University, 1995</p>
                    <h5 class="mb-3">Memberships:</h5>
                    <p>California Applicants' Attorneys Association (CAAA). Monterey County Chapter of CAAA.<br>
                        Monterey Bay Workers' Compensation Attorneys Association (WBWCA). Monterey County Bar
                        Association.</p>
                    <h5 class="mb-3">Admitted:</h5>
                    <p>State Bar of California. U.S. District Courts, Northern District of California, Central District
                        of California and Southern District of California.</p>
                    <h5 class="mb-3">Community:</h5>
                    <p>Mr. Georgariou is an active and devoted member of his church.</p>
                    <h5 class="mb-3">Personal:</h5>
                    <p>Mr. Georgariou is bilingual (English-Spanish) from serving his church in Madrid, Spain for two
                        years. He was born and raised in Salinas, California. He graduated from Palma High School in
                        Salinas, California. He is a devoted husband and father. He enjoys golf, darts, theater, and
                        movies.</p>
                </div>


            </div>
        </div>
        <div style="text-align:center"><a href="javascript:history.back()"><h6><br>&lt; Back</h6></a></div>
    </section> <!-- .section -->


<?php include 'footer.html'; ?>