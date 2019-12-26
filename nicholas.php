<?php
    ob_start();
    include("header.html");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Nicholas J. Dilles",$buffer);
    echo $buffer;
?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Nicholas J. Dilles</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="team.html">Our Team <i class="ion-ios-arrow-forward"></i></a></span> <span>Nicholas J. Dilles <i class="ion-ios-arrow-forward"></i></span></p>
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
				<h5 class="mb-3">Education:</h2>
				<p>J.D., UCLA School of Law, 2012<br>
				B.A., Political Science, UCLA, 2009</p>
				<h5 class="mb-3">Memberships:</h2>
				<p>California Applicants’ Attorneys Association (CAAA). Monterey County Chapter of CAAA.<br>
                Monterey County Chapter of CAAA. Santa Cruz County Bar Association.<br>
                </p>
				<h5 class="mb-3">Admitted:</h2>
				<p>State Bar of California.</p>
				<h5 class="mb-3">Community:</h2>
				<p>After graduating from law school, Mr. Dilles provided legal aid services at California Rural Legal Assistance in Watsonville, California. Mr. Dilles participates in an annual Scrabble fundraiser to support the Santa Cruz County Law Library and Teen Peer Court.</p>
				<h5 class="mb-3">Personal:</h2>
				<p>Mr. Dilles enjoys exploring coastal California with his wife, hiking, and trail running with his dog.</p>
            </div>
          

        </div>
      </div>
    <center><a href="javascript:history.back()"><h6><br>&lt; Back</h6></a></center>
    </section> <!-- .section -->


<?php include 'footer.html';?>