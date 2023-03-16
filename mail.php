<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('vendor/autoload.php');

$firsttime = False;
$errorset = False;
$mailsent = True;

if (!isset($_POST['name'])) {
    $errorset = True;
    $firsttime = True;
    $mailsent = False;
} else {

    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);

    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $address = htmlspecialchars(stripslashes(trim($_POST['address'])));
    $citystate = htmlspecialchars(stripslashes(trim($_POST['citystate'])));
    $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $employer = htmlspecialchars(stripslashes(trim($_POST['employer'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $doi = htmlspecialchars(stripslashes(trim($_POST['doi'])));
    $injury = htmlspecialchars(stripslashes(trim($_POST['injury'])));
    if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $name_error = 'Invalid name';
    }
    if (!preg_match("/^[A-Za-z0-9 ._%+-]+$/", $address)) {
        $address_error = 'Invalid address';
    }
    if (!preg_match("/^[A-Za-z ,.'-]+$/", $citystate)) {
        $citystate_error = 'Invalid City/State';
    }
    if (!preg_match("/^[0-9._() +-]+$/", $phone)) {
        $phone_error = 'Invalid phone number';
    }
    if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/", $email)) {
        $email_error = 'Invalid email';
    }
    if (!preg_match("/^[A-Za-z0-9 .,_!@#()&%-+;]+$/", $employer)) {
        $employer_error = 'Invalid employer';
    }
    if (!preg_match("/^[A-Za-z0-9 .'-\/]+$/", $doi)) {
        $doi_error = 'Invalid date of injury';
    }
    if (strlen($injury) === 0) {
        $injury_error = 'Your message should not be empty';
    }

    if (!$res['success']) {
        $captcha_error = 'Invalid reCaptcha response. Try again later.';
        $errorset = True;
    } elseif (!isset($name_error) && !isset($address_error) && !isset($citystate_error) && !isset($phone_error) && !isset($email_error) && !isset($employer_error) && !isset($doi_error) && !isset($injury_error)) {
        $mail = new PHPMailer();

        $mail->setFrom("no-reply@forworker.com", "Website Contact Form");

        $mail->addAddress("liz@forworker.com"); //replace email with liz's once we get smtp settings
        $mail->Subject = "Contact Form from: $name";
        $mail->Body = "Name: $name\n Address: $address, $citystate\n Phone number: $phone\n Email: $email\n Employer: $employer\n Date of injury: $doi\n Message:\n $injury";

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com"; //replace with smtp server
        $mail->Port = 465;

        $mail->SMTPAuth = true; //set to true to set up username and password for the smtp server
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "forworker.contact.form@gmail.com";
        $mail->Password = "Forworker";

        $email = "forworker.contact.form@gmail.com";
        $clientId = '131786668585-prmrs4rmpnb7a9tjm1piefedhq8vei0v.apps.googleusercontent.com';
        $clientSecret = 'swqOALH5qDHt293oUP6tSojp';

        if (!$mail->send()) {
            $errorset = True;
            $mailsent = False;
        }
    } else {
        $errorset = True;
    }
}

function reCaptcha($recaptcha)
{
    $secret = "6LdutHsaAAAAACWdoifvhPBZ1yRY0enruWB_THoR";
    $ip = $_SERVER['REMOTE_ADDR'];

    $postvars = array("secret" => $secret, "response" => $recaptcha, "remoteip" => $ip);
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    $data = curl_exec($ch);
    curl_close($ch);

    return json_decode($data, true);
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>

<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Contact Us", $buffer);
$buffer = str_replace("%DESC%", "Useful forms to print out, as well as multiple ways to contact Sprenkle, Georgariou and Dilles, LLP. in order to receive a free consultation regarding a case.", $buffer);
echo $buffer;
?>

<?php if (!$errorset): ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Successfully sent. Thank you for contacting us.</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


<?php else: ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/staff_wide.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i
                                class="ion-ios-arrow-forward"></i></span></p>
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
                    <p><span>Website:</span> <a href="https://sprenklegeorgariou.com">sprenklegeorgariou.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-lg-8 order-md-last d-flex">
                    <form action="https://formspree.io/f/mdobwkek" method="POST" class="bg-light p-5 contact-form">
                        <?php if ($mailsent): ?>
                            <p style="color:#FF0000" ;>There were one or more errors with your submission:</p>
                        <?php elseif ($firsttime): ?>
                        <?php else: ?>
                            <p style="color:#FF0000" ;>There was an error sending your message. Please call us or try again
                                later.</p>
                        <?php endif; ?>
                        <div class="form-group">
                            <?php if (isset($name_error)): ?>
                                <p style="color:#FF0000" ;>Invalid name: "
                                    <?php echo $name ?>"
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="<?php echo $name ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if (isset($address_error)): ?>
                                <p style="color:#FF0000" ;>Invalid address: "
                                    <?php echo $address ?>
                                    "
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="address" placeholder="Address" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                    value="<?php echo $address ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if (isset($citystate_error)): ?>
                                <p style="color:#FF0000" ;>Invalid city/state:
                                    "
                                    <?php echo $citystate ?>"
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="citystate" placeholder="City/State" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="citystate" placeholder="City/State"
                                    value="<?php echo $citystate ?>">
                            <?php endif; ?>

                        </div>
                        <div class="form-group">
                            <?php if (isset($phone_error)): ?>
                                <p style="color:#FF0000" ;>Invalid phone number: "
                                    <?php echo $phone ?>
                                    "
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="phone" placeholder="Phone number" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="phone" placeholder="Phone number"
                                    value="<?php echo $phone ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if (isset($email_error)): ?>
                                <p style="color:#FF0000" ;>Invalid email address:
                                    "
                                    <?php echo $email ?>"
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="email" placeholder="Email" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="<?php echo $email ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if (isset($employer_error)): ?>
                                <p style="color:#FF0000" ;>Invalid employer name:
                                    "
                                    <?php echo $employer ?>"
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="employer"
                                    placeholder="Name of Employer at time of injury" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="employer"
                                    placeholder="Name of Employer at time of injury" value="<?php echo $employer ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if (isset($doi_error)): ?>
                                <p style="color:#FF0000" ;>Invalid date of injury: "
                                    <?php echo htmlspecialchars($doi) ?>
                                    "
                                </p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <input type="text" class="form-control" name="doi" placeholder="Date of injury" required>
                            <?php else: ?>
                                <input type="text" class="form-control" name="doi" placeholder="Date of injury"
                                    value="<?php echo $doi ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if (isset($injury_error)): ?>
                                <p style="color:#FF0000" ;>Invalid message.</p>
                            <?php endif; ?>
                            <?php if ($firsttime): ?>
                                <textarea id="" cols="30" rows="7" class="form-control" name="injury"
                                    placeholder="Describe injury/condition"></textarea>
                            <?php else: ?>
                                <textarea id="" cols="30" rows="7" class="form-control" name="injury"
                                    placeholder="Describe injury/condition"><?php echo $injury ?></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha brochure__form__captcha"
                                data-sitekey="6LdutHsaAAAAANJdl06KxeMJBdz-qW8slNCS0O60"></div>
                            <?php if (isset($captcha_error)): ?>
                                <p style="color:#FF0000" ;>Invalid reCaptcha response.</p>
                            <?php endif; ?>
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                        <p>Making a false or fraudulent workers’ compensation claim is a felony subject to up to 5 years
                            in prison and/or up to a $50,000 fine.<br>
                            <br>This website is designed for general information only. The information presented at this
                            site should not be construed to be formal legal advice nor the formation of a lawyer-client
                            relationship.<br>
                        </p>
                    </form>


                </div>
                <div class="col-lg-4 d-flex">
                    <p><BR>Useful forms:<br>
                        <a target="_blank" href="pdf/payment_record.pdf">Payment record</a><br>
                        <a target="_blank" href="pdf/mileagelog2023a.pdf">Mileage log form</a><br>
                        <a target="_blank" href="pdf/Treatment-Medication Denial form 2016.pdf">Treatment denial
                            form</a><br>
                        <a target="_blank" href="pdf/Treatment-Medication Denial form 2016.pdf">Prescription denial
                            form</a><br>
                        <a target="_blank" href="pdf/mileagerates2023a.pdf">Mileage Reimbursement Rates</a>
                </div>


            </div>
        </div>
    </section>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>

        function get_action(form) {
            var v = grecaptcha.getResponse();
            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "You can't leave Captcha Code empty";
                return false;
            }
            else {
                document.getElementById('captcha').innerHTML = "Captcha completed";
                return true;
            }
        }

    </script>

<?php endif; ?>
<?php include 'footer.html'; ?>