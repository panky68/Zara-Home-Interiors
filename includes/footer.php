<?php
    
    //Include required phpmailer files to send emails
    require_once "PHPMailer/PHPMailer.php"; 
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    //Define Name Space
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $current_page = $_SERVER['SCRIPT_NAME'];    //get path with filename
    $pageName = basename($current_page);
    if($pageName == "contact.php"){ //if page is contact page
        $hide_contact_us_tab = 1;       //set flag = 1, to hide 'contact us' tab 
    }else{ 
        $hide_contact_us_tab = 0;       //set flag = 0, to display 'contact us' tab
    }
    
    //Footer form and Contact form validation
    if(isset($_POST['submit']) === false){
       
        if(isset($_POST['foot-name']) === true && isset($_POST['foot-email']) === true && isset($_POST['foot-phone']) === true && isset($_POST['foot-message']) === true){  //check inputs have been submitted
            $name_err = $email_err = $phone_err = $enquiry_err = $mailErrorFlag1 = ''; //initialise error flags
            $name = $_POST['foot-name'];            //name of customer
            $fromEmail = $_POST['foot-email'];      //customers email
            $phone = $_POST['foot-phone'];          //customers phone
            $enquiry = $_POST['foot-message'];      //customers query

            //validate the name input
            if(empty($name)){
                $name_err = 'Name is required'; //set $name_err
            }else{
                $name = test_input($name);          //sql injection check
                if(!preg_match("/^[a-zA-Z ]*$/", $name)){               //check for only letters and white spaces
                    $name_err = 'Only letters and white space allowed'; //set $name_err
                }else if(strlen($name) > 32){                           //check digits does not exceed 32 digits
                    $name_err = 'Too Many Charactors';                  //set $name_err
                }
            }

            //validate the Email input
            if(empty($fromEmail)){
                $email_err = 'Email is required';                   //set $email_err
            }else{
                $fromEmail = test_input($fromEmail);                             //sql injection check
                if(!filter_var($fromEmail, FILTER_VALIDATE_EMAIL)){ //check string is email format
                    $email_err = 'Invalid Email Format';            //set $email_err
                }else if(strlen($fromEmail) > 64){                  //check digits does not exceed 64 digits
                    $email_err = 'Too Many Charactors';             //set $email_err
                }
            }
            //validate the phone input
            if(empty($phone)){
                $phone_err = 'Telephone is required';   //set $phone_err
            }else{
                $phone = test_input($phone); //sql injection check
                if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)){ //check all digits are numerical
                    $phone_err = 'Invalid Phone Number';    //set $phone_err
                }else if(strlen($phone) > 15){  //check digits does not exceed 15 digits
                    $phone_err = 'Too Many Digits'; //set $phone_err
                }
            }

            //validate the enquiry input
            if(empty($enquiry)){    //check enquiry field empty
                $enquiry_err = 'Please enter a message';  //set $enquiry_err
            }
            if($name_err == '' && $email_err == '' && $phone_err == '' && $enquiry_err == ''){  //check no inputs had errors
                $mail1 = new PHPMailer(); //new instance of PHPMailer
                $mail1->isSMTP();    //set mailer to use smtp
                $mail1->Host = 'smtp.live.com'; //smtp host
                $mail1->SMTPAuth = true; //enable smtp athorisation
                $mail1->SMTPSecure = 'tls'; //type of encryption
                $mail1->Port = 587; //port to connect smtp
                $mail1->Username = 'panky_68@hotmail.com'; //hotmail username
                $mail1->Password = 'Liam68par';    //hotmail password
                
                //mail to Ismail
                $to_ismail = 'panky1968@googlemail.com';
                $subject_ismail = 'Query from Zara Home Interiors';
                $body_ismail = "Contact from\n".$name."\n".$phone."\n".$fromEmail."\n"."'\n\n".$enquiry;
                $mail1->setFrom('panky_68@hotmail.com'); //Sender's Email Address (ie Ismail email)
                $mail1->Subject = $subject_ismail; //Email Subject
                $mail1->Body =  $body_ismail; //Email Body
                $mail1->addAddress($to_ismail); //recipent address
                $mailErrorFlag1 = $mail1->send();    //send mail, true = successful, false = unsuccessful
                $mail1->smtpClose(); //closing stmp connection
                $mail1->ClearAllRecipients();
            }
        }
    }
?>

<footer id="footer">    
    <div class="container-fluid">   <!-- Full width container -->
        <div class="row">   <!-- create Row -->
            <div class="col-md-2">  <!-- Logo Wrapper, 2 column wide  -->
                <a class="navbar-brand" href="index.php" class="menu-links"><img src="img\logo_small.png" alt=""></a>   <!-- Logo  -->
            </div>
            <div class="col-md-2">  <!-- List 1, 2 column wide  -->
                <h6 class="footer-header">Quick Links</h6>  <!-- List 1 Header -->
                <ul class="footer-lists">   <!-- List 1  -->
                    <li class="footer-item"><a href="bedrm_fitted.php" class="footer-link">Fiited Bedrooms</a></li>
                    <li class="footer-item"><a href="bedrm_slide.php" class="footer-link">Sliding Wardrobes</a></li>
                    <li class="footer-item"><a href="kitchen.php" class="footer-link">Kitchens</a></li>
                    <li class="footer-item"><a href="laminate.php" class="footer-link">Laminate Flooring</a></li>
                    <li class="footer-item"><a href="carpet.php" class="footer-link">Carpets</a></li>
                    <li class="footer-item"><a href="stones.php" class="footer-link">Stones</a></li>
                </ul>
            </div>
            <div class="col-md-2">  <!-- List 2, 2 column wide  -->
                <h6 class="footer-header">About</h6>    <!-- List 2 Header -->
                <ul class="footer-lists"><!-- List 1  -->
                    <li class="footer-item"><a href="about.php" class="footer-link">About Us</a></li>
                    <li class="footer-item"><a href="contact.php" class="footer-link">Contact Us</a></li>
                    <li class="footer-item"><a href="services.php" class="footer-link">Services</a></li>
                    <li class="footer-item"><a href="terms.php" class="footer-link">Terms & Conditions</a></li>
                </ul>
                <h6 class="footer-header">Opening Times</h6>
                <p class="footer-address">Mon to Sat: 10am to 6pm</p>
                <p class="footer-address">Sun: CLOSED </p>
            </div>
            <div class="col-md-3">  <!-- List 3, 3 column wide  -->
                <h6 class="footer-header">Zara Home Interiors Ltd</h6>  <!-- Company name -->
                <p class="footer-address">99 Bridge Road,</p>   <!-- address 1  -->
                <p class="footer-address">LE5 3LD,</p>          <!-- address 2 -->
                <p class="footer-address">Leicester</p>         <!-- address 3 -->
                <br>
                <p class="footer-address"><i class="fas fa-phone"></i> 0116 276 0657</p>    <!-- Tel No  -->
                <p class="footer-address"><i class="fas fa-envelope-square"></i> info@zarahomeinteriors.co.uk</p>   <!-- Email -->
            </div>
            <div class="col-md-3">  <!-- Google Map Location, 3 column wide  -->
                <h6 class="footer-header">Where To Find Us</h6> <!-- Map Header -->
                <a href="https://www.google.co.uk/maps/place/Zarah+Interiors+Leicester/@52.6397553,-1.1012771,19.5z/data=!4m13!1m7!3m6!1s0x4877616f2eead3bb:0x17759a5bbdee58cf!2sBridge+Rd,+Leicester+LE5+3LD!3b1!8m2!3d52.639384!4d-1.1015146!3m4!1s0x4877616f2d155857:0xc879354a0f4688af!8m2!3d52.6399259!4d-1.1009382" target="_blank"><img class="footer-map" src="img/Zara_Map.png" alt=""></a>
            </div>
        </div>
    </div>
    
    <div class="container-fluid copyright-section"> <!-- Full width container copyright section-->
        <div class="row">   <!-- create Row -->
            <div class="col-md-12"> 
                <p class="copyright">&copy;<?php echo date("Y"); ?> Zara Home Interiors. All Rights Reserved.</p>   <!-- copyright text -->
            </div>
        </div>
    </div>

    <!-- Footers Contact Us button and Form -->
    <div class="contact-tab <?php if($hide_contact_us_tab === 1){ echo 'default-btn-pos-hide';} ?>">     <!-- hide 'contact us' tab if page = contact page -->
        <!-- Footer 'contact us' tab Button ONLY -->
        <div class="footer-contact-form-btn default-btn-pos default-btn-pos-show">  <!-- 'contact us' tab ONLY -->
            <i class="fas fa-envelope-square"></i> Contact Us   <!-- 'contact us' tab header -->
        </div>

        <!-- Footer 'contact us' tab Button AND Form -->
        <div class="footer-contact-form footer-contact-form-hide">  <!-- 'contact us' tab -->
            <div class="footer-contact-form-btn">
                <i class="fas fa-envelope-square"></i> Contact Us
            </div>
            <div>
                <form action="" method="POST" class="main-form">    <!-- 'contact us' tab Form -->
                    <!-- Name input -->
                    <div class="form-group">
                        <label for="foot-name">Name</label>
                        <input type="text" class="form-control <?php if(!empty($name_err)){ echo 'input-error';} ?>" name="foot-name" id="foot-name" value="<?php if(isset($name)){ echo $name;}?>">
                        <?php if(isset($name_err)){ ?>      <!-- if 'name' input error -->
                            <div>
                                <p style="color: red; "><?php echo $name_err; ?></p>   <!-- display 'name' input error -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Phone Input -->
                    <div class="form-group">
                        <label for="foot-phone">Phone</label>
                        <input type="text" class="form-control <?php if(!empty($phone_err)){ echo 'input-error';} ?>" name="foot-phone" id="foot-phone" value="<?php if(isset($phone)){ echo $phone;}?>">
                        <?php if(isset($phone_err)){ ?>  <!-- if 'phone' input error -->
                            <div>
                                <p style="color: red; "><?php echo $phone_err; ?></p>   <!-- display 'phone' input error -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="foot-email">Email</label>
                        <input type="text" class="form-control <?php if(!empty($email_err)){ echo 'input-error';} ?>" name="foot-email" id="foot-email" value="<?php if(isset($fromEmail)){ echo $fromEmail;}?>">
                        <?php if(isset($email_err)){ ?>  <!-- if 'email' input error -->
                            <div>
                                <p style="color: red; "><?php echo $email_err; ?></p>   <!-- display 'email' input error -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Message Input -->
                    <div class="form-group">
                        <label for="foot-message">Message</label>
                        <textarea name="foot-message" class="form-control <?php if(!empty($enquiry_err)){ echo 'input-error';} ?>" id="foot-message"><?php if(isset($enquiry)){ echo $enquiry;}?></textarea>
                        <?php if(isset($enquiry_err)){ ?>    <!-- if 'enquiry' input error -->
                            <div>
                                <p style="color: red; "><?php echo $enquiry_err; ?></p> <!-- display 'enquiry' input error -->
                            </div>
                        <?php } ?>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <button class="btn-primary" type="submit">Submit</button>   <!-- submit form btn -->
                    </div>
                    <br>

                    <!-- Email Message -->
                    <?php
                        if(isset($mailErrorFlag1)){   //Email sent error flag been set?
                            if($mailErrorFlag1 == 1){    //if email sent
                    ?>
                                <div class="alert alert-success">Your Message has been sent</div>
                    <?php
                            }else if($mailErrorFlag1 == 0){
                    ?>
                                <div class="alert alert-danger">Unfortunately, your Message cannot be been sent</div>
                    <?php
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</footer>