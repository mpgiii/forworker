<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Workers' Compensation", $buffer);
$buffer = str_replace("%DESC%", "The firm of Sprenkle, Georgariou & Dilles, LLP has skill, reputation, and experience in helping injured workers obtain the workers' compensation benefits which they are legally owed.", $buffer);
echo $buffer;
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Workers' Compensation Law</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="practice-areas.html">Practice Areas <i
                                class="ion-ios-arrow-forward"></i></a></span>
                    <span>Workers' Compensation Law <i class="ion-ios-arrow-forward"></i></span>
                </p>
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
                <p>The attorneys of Sprenkle, Georgariou & Dilles, LLP specialize in the representation of injured
                    workers before the Workers' Compensation Appeals Board, especially in cases involving all injuries
                    of public safety officers, and catastrophic injuries of all employees. Although this is our
                    specialty, we may also be able and willing to refer our clients for representation for other legal
                    matters such as Industrial Disability Retirement, SSDI, and personal injury cases.</p>
                <h4 class="mb-3">Depending on your case, benefits may include:</h4>
                <ul>
                    <li>Medical treatment with a qualified doctor</li>
                    <li>Medical supplies and assistance</li>
                    <li>Temporary disability / wage replacement benefits</li>
                    <li>Permanent disability benefits / loss of earning capacity</li>
                    <li>Enforcement of Awards / Penalties</li>
                    <li>Death benefits for dependents</li>
                </ul>
                <h4 class="mb-3">Do You Have a Workers' Compensation Case?</h4>
                <p>If you were injured on the job, or have developed a condition from work, you may be entitled to
                    workers' compensation benefits. The benefits you are entitled to usually depend on the impact
                    the injury has on you physically and financially.</p>
                <p>Far too often, disputes arise over what benefits are owed to you. If you have questions about the
                    benefits to which you may be entitled, please contact us.</p>
                <h4 class="mb-3">Sprenkle, Georgariou & Dilles, LLP has successfully litigated cases involving:</h4>
                <ul>
                    <li>Back injuries, including fractures, back sprains, strains, and herniated discs</li>
                    <li>Head, brain, and neck injuries, including concussions and headaches</li>
                    <li>Hand, elbow, arm and shoulder injuries</li>
                    <li>Carpal Tunnel Syndrome</li>
                    <li>Amputations</li>
                    <li>Skin disorders</li>
                    <li>Blindness and loss of vision</li>
                    <li>Loss of hearing, ringing in the ears</li>
                    <li>Hip, leg, knee, foot and ankle injuries</li>
                    <li>Dental injuries</li>
                    <li>Exposure to toxic chemicals</li>
                    <li>RSD, CRPS, TMJ, and internal injuries</li>
                    <li>Cardiovascular, stroke, diabetes, toxic exposure and lung injuries</li>
                </ul>
                <h2 class="mb-3 mt-5">How We Can Help:</h2>
                <p>Thousands of Californians suffer a Workers' Compensation injury or condition each year. Now, more
                    than ever, the medical and monetary benefits you are legally entitled to are delayed and denied.
                    Generally, the sooner you identify your rights, the better the results will be in your case. The
                    aggressive and experienced representation from the attorneys and staff of Sprenkle, Georgariou &
                    Dilles, LLP will make a difference in your workers' compensation case which involves one of the
                    most complicated areas of California law.</p>
                <p>We have the experience and knowledge to evaluate the potential benefits and compensation to which
                    you may be legally entitled!</p>
                <p><a href="contact.html" class="btn btn-primary">Request Free Consultation</a></p>


            </div> <!-- .col-md-8 -->


        </div>
    </div>
</section> <!-- .section -->

<?php include 'footer.html'; ?>