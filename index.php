<?php
ob_start();
include("indexheader.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Sprenkle, Georgariou & Dilles, LLP", $buffer);
echo $buffer;
?>


<div class="hero-wrap js-fullheight" style="background-image: url('images/staff.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <span>Sprenkle, Georgariou & Dilles, LLP</span>
                </h1>
                <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: .2 }"><br>
                    The law firm of Sprenkle, Georgariou & Dilles, LLP represents injured workers before the Workers’
                    Compensation Appeals Board. Attorneys Michael P. Georgariou II, Nicholas J. Dilles and Samuel J.
                    Lawrence have extensive knowledge of California workers' compensation laws and a proven reputation
                    for effective advocacy and successful results. Our law firm is conveniently located in the same
                    building as the Salinas Workers’ Compensation Appeals Board and serves Monterey, Santa Cruz, and San
                    Benito Counties.<br></h2>
                <p><br><br><a href="contact.html" class="btn btn-primary py-3 px-4">Request a Free Consultation</a>
                </p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb services-section">
    <div class="container">
        <div class="row no-gutters d-flex">
            <div class="col-md-4 text-center services align-self-stretch ftco-animate p-3">
                <div class="icon"><span class="flaticon-auction"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3"><a href="workers-compensation.html">Workers' Compensation</a></h3>
                    <p>Our attorneys are experienced with and skilled at
                        helping injured workers obtain the workers' compensation benefits which they are legally
                        owed.</p>
                </div>
            </div>
            <div class="col-md-4 text-center services align-self-stretch ftco-animate p-3">
                <div class="icon"><span class="flaticon-shield"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3"><a href="#">Public Safety Representation</a></h3>
                    <p>Our law firm has the reputation of quality representation for public safety officers who were
                        injured on the job.</p>
                </div>
            </div>
            <div class="col-md-4 text-center services align-self-stretch ftco-animate p-3">
                <div class="icon"><span class="flaticon-lawyer"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3"><a href="team.html">Our Attorneys</a></h3>
                    <p>Our attorneys are known for quality trial skills and in-depth knowledge of California
                        workers' compensation law.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter" id="section-counter">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch align-items-center justify-content-center"
                    style="background-image:url(images/legal-stock.jpg);">
                </div>
            </div>
            <div class="col-md-6 px-5 py-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Firm Overview</h2>
                        <p>The law firm of Sprenkle, Georgariou & Dilles, LLP specializes in the representation of
                            injured workers before the Workers' Compensation Appeals Board.<br>
                            Workers' compensation law is one of the most complicated areas of California law.
                            Partners Michael P. Georgariou II and Nicholas J. Dilles have the reputations for
                            quality trial skills and in-depth knowledge of California workers' compensation laws.<br>
                            Most of our staff is fluently bilingual (Spanish-English).<br></p>
                        <h5 class="mb-4">Why Choose Us?</h5>
                        <p>Our primary concern is helping injured workers obtain quality medical care and the proper
                            benefits. We have provided skilled and aggressive representation for thousands of
                            injured workers, securing the quality medical care and financial benefits to which they
                            have been entitled. As a result, we have been fortunate to have received most of our new
                            clients by referrals from former and current satisfied clients. We can help you too!</p>

                    </div>
                </div>
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
                                        class="position">Retired</span>
                                </div>
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
                                    Board of Legal Specialization. Mr. Dilles has established a reputation for his
                                    tenacity and resourceful approach in representing his clients.<br>
                                    <a href="nicholas.html" class="nav-link">Read more here.</a>
                                </p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/njd_tiny.jpg" alt="Nicholas Dilles">
                                </div>
                                <div class="name align-self-center">Nicholas J. Dilles <span
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
</section>


<?php include 'footer.html'; ?>