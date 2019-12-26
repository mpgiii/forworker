
<?php
	$errorset = False;
	$mailsent = True;

	$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
	$address = htmlspecialchars(stripslashes(trim($_POST['address'])));
	$citystate = htmlspecialchars(stripslashes(trim($_POST['citystate'])));
	$phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
	$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
	$employer = htmlspecialchars(stripslashes(trim($_POST['employer'])));
	$doi = htmlspecialchars(stripslashes(trim($_POST['doi'])));
	$injury = htmlspecialchars(stripslashes(trim($_POST['injury'])));
	if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
	  $name_error = 'Invalid name';
	}
	if(!preg_match("/^[A-Za-z0-9 ._%+-]+$/", $address)){
	  $address_error = 'Invalid address';
	}
	if(!preg_match("/^[A-Za-z ,.'-]+$/", $citystate)){
	  $citystate_error = 'Invalid City/State';
	}
	if(!preg_match("/^[0-9._() +-]+$/", $phone)){
	  $phone_error = 'Invalid phone number';
	}
	if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/", $email)){
	  $email_error = 'Invalid email';
	}
	if(!preg_match("/^[A-Za-z0-9 .,_!@#()&%+-]+$/", $employer)){
	  $rest = preg_replace("/^[A-Za-z0-9 .,_!@#()&%+-]+$/", '-', $employer);
	  $employer_error = 'Invalid employer';
	}
	if(!preg_match("/^[A-Za-z0-9 .'-\/]+$/", $doi)){
	  $doi_error = 'Invalid date of injury';
	}
	if(strlen($injury) === 0){
	  $injury_error = 'Your message should not be empty';
	}
	
	if (!isset($name_error) && !isset($address_error) && !isset($citystate_error) && !isset($phone_error) && !isset($email_error) && !isset($employer_error) && !isset($doi_error) && !isset($injury_error)) {
		$to = 'georgariou3@gmail.com'; // edit here
		$subject = "Contact Form From: $name";
	    $body = " Name: $name\n Address: $address, $citystate\n Phone number: $phone\n Email: $email\n Employer: $employer\n Date of injury: $doi\n Message:\n $injury";
	    if (!@mail($to, $subject, $body)){
			$errorset = True;
			$mailsent = False;
		}
	}
	else{
		$errorset = True;
	}
?>

<?php
    ob_start();
    include("header.html");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Contact Us",$buffer);
    echo $buffer;
?>
<?php if(!$errorset) : ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Successfully sent. Thank you for contacting us.</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


<?php else : ?>
    
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
            <p><span>Email:</span> <a href="mailto:info@forworker.com">info@forkworker.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">forworker.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-8 order-md-last d-flex">
            <form action="mail.php" method ="POST" class="bg-light p-5 contact-form">
			  <?php if($mailsent) : ?>
			    <p>There were one or more errors with your submission:</p>
			  <?php else : ?>
			    <p>There was an error sending your message. Please try again later.</p>
			  <?php endif; ?>
              <div class="form-group">
			    <?php if(isset($name_error)) : ?>
					<p><font color="red">Invalid name.</font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group">
			    <?php if(isset($address_error)) : ?>
					<p><font color="red">Invalid address.</font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="address" placeholder="Address">
              </div>
              <div class="form-group">
				<?php if(isset($citystate_error)) : ?>
					<p><font color="red">Invalid city/state.</font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="citystate" placeholder="City/State">
              </div>
			  <div class="form-group">
				<?php if(isset($phone_error)) : ?>
					<p><font color="red">Invalid phone number.</font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="phone" placeholder="Phone number">
              </div>
			  <div class="form-group">
				<?php if(isset($email_error)) : ?>
					<p><font color="red">Invalid email address.</font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
			  <div class="form-group">
				<?php if(isset($employer_error)) : ?>
					<p><font color="red">Invalid employer name. Please do not use these characters: <?php echo $rest; ?></font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="employer" placeholder="Name of Employer at time of injury">
              </div>
			  <div class="form-group">
			    <?php if(isset($doi_error)) : ?>
					<p><font color="red">Invalid date of injury.</font></p>
				<?php endif; ?>
                <input type="text" class="form-control" name="doi" placeholder="Date of injury">
              </div>
              <div class="form-group">
			    <?php if(isset($injury_error)) : ?>
					<p><font color="red">Invalid message.</font></p>
				<?php endif; ?>
                <textarea id="" cols="30" rows="7" class="form-control" name="injury" placeholder="Describe injury/conidition"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
			  <p>Making a false or fraudulent workers’ compensation claim is a felony subject to up to 5 years in prison and/or up to a $50,000 fine.<br>
			  <br>This website is designed for general information only. The information presented at this site should not be construed to be formal legal advice nor the formation of a lawyer-client relationship.<br>
			  </p>
            </form>
			
          
          </div>
		  <div class="col-lg-4 d-flex">
			<p><BR>Useful forms:<br>
			<a target="_blank" href="pdf/payment_record.pdf">Payment record</a><br>
			<a target="_blank" href="pdf/mileageLog2018.pdf">Mileage log form</a><br>
			<a target="_blank" href="pdf/Treatment-Medication Denial form 2016.pdf">Treatment denial form</a><br>
			<a target="_blank" href="pdf/Treatment-Medication Denial form 2016.pdf">Prescription denial form</a><br>
			<a target="_blank" href="pdf/mileage2018.pdf">Mileage Reimbursement Rates</a>
          </div>

          
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>
<?php include 'footer.html';?>
