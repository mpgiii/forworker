<?php
    ob_start();
    include("header.html");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Samuel J. Lawrence",$buffer);
    echo $buffer;
?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Samuel J. Lawrence</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="team.html">Our Team <i class="ion-ios-arrow-forward"></i></a></span> <span>Samuel J. Lawrence <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
		    <div class="col-lg-3 col-sm-6">
			  <img src="images/sjl.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-9 col-sm-6">
				<h5 class="mb-3">Education:</h2>
				<p>J.D., Boston College Law School<br>
				B.A., Boston College School of Arts & Sciences</p>
				<h5 class="mb-3">Memberships:</h2>
				<p>California Applicants' Attorneys Association (CAAA).</p>
				<h5 class="mb-3">Admitted:</h2>
				<p>State Bar of California.</p>
				<h5 class="mb-3">Community:</h2>
				<p>Mr. Lawrence grew up in New England and spent seven years in Boston for school before moving to California. He has lived in the Monterey area since 2015.</p>
				<h5 class="mb-3">Personal:</h2>
				<p>Mr. Lawrence enjoys going to the beach and the gym, long distance runs on the Monterey Peninsula on Saturday and Sunday mornings, day-hikes, playing pickup basketball, watching the Celtics and Patriots, listening to podcasts about sports and politics, and reading sci-fi and fantasy novels.</p>            </div>
          

        </div>
      </div>
      <center><a href="javascript:history.back()"><h6><br>&lt; Back</h6></a></center>
    </section> <!-- .section -->


<?php include 'footer.html';?>