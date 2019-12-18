<?php
  if(isset($_POST['submit'])){
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
	if(!preg_match("/^[A-Za-z0-9._%+-]+$/", $address)){
	  $address_error = 'Invalid address';
	}
	if(!preg_match("/^[A-Za-z ,.'-]+$/", $citystate)){
	  $citystate_error = 'Invalid City/State';
	}
	if(!preg_match("/^[0-9._()+-]+$/", $phone)){
	  $phone_error = 'Invalid phone number';
	}
	if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
	  $email_error = 'Invalid email';
	}
	if(!preg_match("/^[A-Za-z .'-]+$/", $employer)){
	  $employer_error = 'Invalid employer';
	}
	if(!preg_match("/^[A-Za-z0-9/ .'-]+$/", $doi)){
	  $doi_error = 'Invalid date of injury';
	}
	if(strlen($injury) === 0){
	  $injury_error = 'Your message should not be empty';
	}
	
	if (!isset($name_error) && !isset($address_error) && !isset($citystate_error) && !isset($phone_error) && !isset($email_error) && !isset($employer_error) && !isset($doi_error) && !isset($injury_error)) {
		$to = 'georgariou3+test@gmail.com'; // edit here
		$subject = "Contact Form From: $name"
	    $body = " Name: $name\n Address: $address, $citystate\n Phone number: $phone\n Email: $email\n Employer: $employer\n Date of injury: $doi\n Message:\n $injury";
	    if(mail($to, $subject, $body)){
	    	echo '<p style="color: green">Message sent</p>';
	    }else{
	    	echo '<p>Error occurred, please try again later</p>';
	    }
	}
  }
?>