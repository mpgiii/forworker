<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Links", $buffer);
$buffer = str_replace("%DESC%", "Links to some resources which may be helpful to look over before or during the pursual of an injured worker case, including links for State of California pages, Workers' Rights Organizations pages, and Insurance Resources pages.", $buffer);

echo $buffer;
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/temp.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Helpful Links</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Helpful Links <i
                            class="ion-ios-arrow-forward"></i></span></p>
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
                <h2 class="mb-3">State of California Resource Links</h2>
                <h5 class="mb-3"><a href="https://www.dir.ca.gov/DWC/dwc_home_page.htm" target="_blank">California
                        Workers' Compensation</a></h5>
                <p>The California DWC monitors the administration of workers' compensation claims, and provides
                    administrative and judicial services to assist in resolving disputes that arise in connection
                    with claims for workers' compensation benefits.</p>
                <h5 class="mb-3"><a href="https://www.dir.ca.gov/" target="_blank">California Dept. of Industrial
                        Relations</a></h5>
                <p>The Department of Industrial Relations improves working conditions for California's wage earners,
                    and advances opportunities for profitable employment in California.</p>
                <h5 class="mb-3"><a href="https://www.dir.ca.gov/CHSWC/chswc.html" target="_blank">Commission on
                        Health and Safety and Workers' Compensation</a></h5>
                <p>The Commission on Health and Safety and Workers' Compensation is a joint labor-management
                    body created by the workers' compensation reform legislation of 1993 and charged with
                    overseeing the health and safety and workers' compensation systems in California and
                    recommending administrative or legislative modifications to improve their operation.</p>
                <h5 class="mb-3"><a href="https://www.dir.ca.gov/WCAB/wcab.htm" target="_blank">Workers'
                        Compensation Appeals Board</a></h5>
                <p>The Workers' Compensation Appeals Board (WCAB) is a seven-member judicial body appointed by
                    the governor and confirmed by the Senate to review petitions for reconsideration of
                    decisions by DWC administrative law judges and regulates the adjudication process by
                    adopting rules of practice and procedure. Cal Division of Occupational Safety and Health
                    (Cal/OSHA) protects workers and the public from safety hazards through its inspection
                    program.</p>

                <h2 class="mb-3">Workers' Rights Organizations</h2>
                <h5 class="mb-3"><a href="https://viaw.org/" target="_blank">Voters Injured At Work</a></h5>
                <p>Voters Injured at Work is a non-profit political organization of injured workers and their
                    families established for the purpose of protecting and enforcing California's constitutional
                    guarantee of a fair and adequate system of compensating workers and their dependents for
                    injury or disability from a work injury.</p>

                <h2 class="mb-3">Insurance Resources</h2>
                <h5 class="mb-3"><a href="http://www.insurance.ca.gov/" target="_blank">Department of
                        Insurance</a></h5>
                <p>The Department of Insurance licenses and regulates workers' compensation insurance carriers,
                    and investigates allegations of workers' compensation insurance fraud.</p>
                <h5 class="mb-3"><a href="https://www.dir.ca.gov/osip/sip.html" target="_blank">Self Insurance
                        Plans</a></h5>
                <p>The office of SIP determines the ability of employers to self-insure their workers'
                    compensation liabilities and to pay any employee compensation that may become due. SIP also
                    tests and certifies individual claims administrators and licenses third-part administrators
                    who handle the claims of self-insured employers.</p>


                <p><br><a href="contact.html" class="btn btn-primary">Request Free Consultation</a></p>


            </div> <!-- .col-md-8 -->


        </div>
    </div>
</section> <!-- .section -->

<?php include 'footer.html'; ?>