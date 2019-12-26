<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Social Security Disability", $buffer);
echo $buffer;
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Social Security Disability</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                    href="practice-areas.html">Practice Areas <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Social Security Disability <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-md-last ftco-animate">
                    <!--<p>
                    <img src="images/practice-1.jpg" alt="" class="img-fluid">
                  </p>-->
                    <p>The attorneys of Sprenkle, Georgariou & Dilles, LLP can assist you with your claim for Social
                        Security Disability Insurance Benefits (SSDI) and Supplemental Security Income Benefits
                        (SSI).</p>
                    <p>If you have a disability that has lasted or is expected to last at least 12 months, you may be
                        entitled to SSDI and/or SSI benefits.</p>
                    <h4 class="mb-3">Do You Have a SSDI case?</h4>
                    <p>In order to qualify for SSDI benefits, you must have worked and paid into Social Security. In
                        order to qualify for SSI benefits, there is no such requirement. SSI benefits are based on
                        financial need and are available to individuals with very low assets. SSDI benefits are
                        typically paid at a higher rate than SSI benefits.</p>
                    <p>In determining whether an individual is disabled for purposes of SSDI and SSI, the Social
                        Security Administration must conclude that you have a medically determinable physical or mental
                        impairment which can be expected to result in death or which has lasted or can be expected to
                        last for a continuous period of 12 months or more.</p>

                    <h5 class="mb-3">In addressing entitlement to SSDI and SSI benefits, the Social Security
                        Administration considers a sequential evaluation as follows:</h5>
                    <ul>
                        <li>Is the individual currently working at or above Substantial Gainful Activity level?</li>
                        <li>Is the individual’s physical and/or mental condition severe?</li>
                        <li>Does the individual’s medical condition meet or equal the severity of a Listing?</li>
                        <li>Can the individual do any of his/her Past Relevant Work?</li>
                        <li>Can the individual make an adjustment to any other work?</li>
                    </ul>
                    <h2 class="mb-3 mt-5">How We Can Help:</h2>
                    <p>Most claims are denied at the initial application level. If you are not successful in your
                        initial application, you have the right to seek reconsideration of that determination within 60
                        days. If you are denied on reconsideration, you have the right to request a hearing in front of
                        a Social Security Administrative Law Judge within 60 days of the denial on reconsideration.</p>
                    <p>In order to obtain SSDI or SSI benefits, it is not required that you obtain an attorney. However,
                        particularly if you are denied at the initial application level, we recommend that you do
                        immediately consult an attorney.</p>
                    <p>If you decide to retain an attorney, the fee that our office charges is 25% of any past benefits
                        you may be entitled to or $6,000.00, whichever is less. The fee is paid by the Social Security
                        Administration out of any benefits obtained on your behalf by the attorney. If you are not
                        successful in obtaining benefits, then there is no fee.</p>
                    <p><a href="contact.html" class="btn btn-primary">Request Free Consultation</a></p>


                </div> <!-- .col-md-8 -->


            </div>
        </div>
    </section> <!-- .section -->

<?php include 'footer.html'; ?>