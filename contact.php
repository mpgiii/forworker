<?php
    ob_start();
    include("header.html");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Contact Us",$buffer);
    echo $buffer;
?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 1880 N Main St #350, Salinas, CA 93906</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel:8314498011">(831) 449-8011</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@forworker.com">info@forworker.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="#">forworker.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-8 order-md-last d-flex">
            <form action="mail.php" method ="POST" title="Contact Form" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" title="Name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="address" title="Address" placeholder="Address">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="citystate" title="City and State" placeholder="City/State">
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="phone" title="Phone Number" placeholder="Phone number">
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="email" title="Email" placeholder="Email">
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="employer" title="Name of Employer at time of injury" placeholder="Name of Employer at time of injury">
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="doi" title="Date of injury" placeholder="Date of injury">
              </div>
              <div class="form-group">
                <textarea id="injury" cols="30" rows="7" class="form-control" name="injury" title="Describe injury or condition" placeholder="Describe injury/conidition"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
			  <p>Making a false or fraudulent workers’ compensation claim is a felony subject to up to 5 years in prison and/or up to a $50,000 fine.<br>
			  <br>This website is designed for general information only. The information presented at this site should not be construed to be formal legal advice nor the formation of a lawyer-client relationship.<br>
			  </p>
            </form>
			
          
          </div>
		  <div class="col-lg-4">
			<p><br>Useful forms:</p>
			<ul>
			  <li><a target="_blank" href="pdf/payment_record.pdf">Payment record</a></li>
			  <li><a target="_blank" href="pdf/mileageLog2018.pdf">Mileage log form</a></li>
			  <li><a target="_blank" href="pdf/Treatment-Medication%20Denial%20form%202016.pdf">Treatment denial form</a></li>
			  <li><a target="_blank" href="pdf/Treatment-Medication%20Denial%20form%202016.pdf">Prescription denial form</a></li>
  			  <li><a target="_blank" href="pdf/mileage2018.pdf">Mileage Reimbursement Rates</a></li>
			</ul>
          </div>

          
        </div>
      </div>
    </section>

<?php include 'footer.html';?>