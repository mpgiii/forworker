<?php
    ob_start();
    include("header.html");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Stephen D. Sprenkle",$buffer);
    echo $buffer;
?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Stephen D. Sprenkle (ret.)</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="team.html">Our Team <i class="ion-ios-arrow-forward"></i></a></span> <span>Stephen D. Sprenkle (ret.) <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
		    <div class="col-lg-3 col-sm-6">
			  <img src="images/3.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-9 col-sm-6">
				<p>Mr. Sprenkle, who retired as of May 31, 2019, was a certified specialist in Workers’ Compensation Law by the State Bar of California Board of Legal Specialization, and limited his practice to the representation of public safety officers.</p>
				<h5 class="mb-3">Education:</h2>
				<p>J.D., University of Pittsburgh, 1973<br>
				A.B., Columbia College, 1970</p>
				<h5 class="mb-3">Memberships:</h2>
				<p>California Applicants' Attorneys Association (CAAA). Monterey County Chapter of CAAA.<br>
                Monterey Bay Workers' Compensation Attorneys Association (WBWCA). Monterey County Bar Association.</p>
				<h5 class="mb-3">Admitted:</h2>
				<p>State Bar of California. U.S. District Courts, Northern District of California.</p>
				<h5 class="mb-3">Community:</h2>
				<p>Mr. Sprenkle started the AYSO VIP soccer program for special needs children in Monterey County in 1998 and continues to actively participate in that program as well as an annual tournament for teams from Northern California and Nevada that he helped start in 2003. He is also on the Board of Directors of the Starlantz Foundation which provides healthcare services and agroforestry support for peasant mountain farmers In Haiti.</p>
				<h5 class="mb-3">Personal:</h2>
				<p>His favorite hobby is his oak tree reforestation project here in Monterey County.</p>
            </div>
          

        </div>
      </div>
    <center><a href="javascript:history.back()"><h6><br>&lt; Back</h6></a></center>
    </section> <!-- .section -->


<?php include 'footer.html';?>