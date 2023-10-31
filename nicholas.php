<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Nicholas J. Dilles", $buffer);
$buffer = str_replace("%DESC%", "Nicholas Dilles specializes in workers' compensation and industrial disability retirement. He is a partner at Sprenkle, Georgariou and Dilles, LLP.", $buffer);
echo $buffer;
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/temp.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Nicholas J. Dilles</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="team.html">Our
                            Team <i class="ion-ios-arrow-forward"></i></a></span> <span>Nicholas J. Dilles <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <img src="images/njd.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-9 col-sm-6">
                <p>Attorney Nicholas J. Dilles is a partner at Sprenkle, Georgariou & Dilles, LLP and a certified
                    specialist in Workers' Compensation Law by the State Bar of California Board of Legal
                    Specialization.
                    Mr. Dilles has established a reputation for his tenacity and resourceful approach in representing
                    his clients before the Workers’ Compensation Appeals Board and at the appellate level. In addition
                    to
                    his extensive experience handling complex and catastrophic injury cases, Mr. Dilles has specialized
                    knowledge regarding the presumptions and benefits available to peace officers and public safety
                    officers,
                    including police officers, correctional officers, deputy sheriffs, firefighters, California Highway
                    Patrol officers, and District Attorney investigators.</p>
                <h5 class="mb-3">Education:</h5>
                <p>J.D., UCLA School of Law, 2012<br>
                    B.A., Political Science, UCLA, 2009</p>
                <h5 class="mb-3">Memberships:</h5>
                <p>California Applicants’ Attorneys Association (CAAA). Monterey County Chapter of CAAA.<br>
                    Monterey County Chapter of CAAA. Santa Cruz County Bar Association.<br>
                </p>
                <h5 class="mb-3">Admitted:</h5>
                <p>State Bar of California.</p>
                <h5 class="mb-3">Community:</h5>
                <p>Mr. Dilles provides educational presentations on workers’ compensation and disability retirement law
                    issues and the specific benefits available to public safety officers. Mr. Dilles participates in an
                    annual Scrabble fundraiser to support the Santa Cruz County Law Library and Teen Peer Court. </p>
                <h5 class="mb-3">Personal:</h5>
                <p>Mr. Dilles enjoys exploring coastal California with his wife and daughter, hiking, and
                    trail running with his dog.</p>
            </div>


        </div>
    </div>
    <div style="text-align:center"><a href="javascript:history.back()">
            <h6><br>&lt; Back</h6>
        </a></div>
</section> <!-- .section -->


<?php include 'footer.html'; ?>