<?php
     //Include required phpmailer files to send emails
     require_once 'PHPMailer/PHPMailer.php'; 
     require_once 'PHPMailer/SMTP.php';
     require_once 'PHPMailer/Exception.php';
     include 'includes/head.php';

     //Define Name Space
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;

    if(empty($_POST) === false){    //form submitted?
        $name_err = $email_err = $phone_err = $enquiry_err = ''; //initialise error flags
        $mailErrorFlag1 = $mailErrorFlag2 = 0;  //initialise mail error flags

        $name = $_POST['name'];             //customer name
        $fromEmail = $_POST['email'];       //customers email
        $phone = $_POST['phone'];           //customers phone
        $enquiry = $_POST['message'];       //customers query

        //validate the name input
        if(empty($name)){       //customer name field empty?
            $name_err = 'Name is required'; //set $name_err
        }else{
            $name = test_input($name);    //sql injection check
            if(!preg_match("/^[a-zA-Z ]*$/", $name)){   //check only letters and white spaces allowed
                $name_err = 'Only letters and white space allowed'; //set $name_err
            }else if(strlen($name) > 32){   //check digits does not exceed 32 digits
                $name_err = 'Too Many Charactors';  //set $name_err
            }
        }
        //validate the Email input
        if(empty($fromEmail)){  //customer email field empty?
            $email_err = 'Email is required';   //set $email_err
        }else{
            $fromEmail = test_input($fromEmail);    //sql injection check
            if(!filter_var($fromEmail, FILTER_VALIDATE_EMAIL)){ //check string is email format
                $email_err = 'Invalid Email Format';    //set $email_err
            }else if(strlen($fromEmail) > 64){  //check digits does not exceed 64 digits
                $email_err = 'Too Many Charactors'; //set $email_err
            }
        }
        //validate the phone input
        if(empty($phone)){  //customer phone field empty?
            $phone_err = 'Telephone is required';   //set $phone_err
        }else{
            $phone = test_input($phone); //sql injection check
            if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)){ //check all chars are numerical
                $phone_err = 'Invalid Phone Number';    //set $phone_err
            }else if(strlen($phone) > 15){  //check digits does not exceed 15 digits
                $phone_err = 'Too Many Digits'; //set $phone_err
            }
        }
        //validate the enquiry input
        if(empty($enquiry)){    //customer enquiry field empty?
            $enquiry_err = 'Please enter a message';    //set $enquiry_err
        }
       
        if($name_err == '' && $email_err == '' && $phone_err == '' && $enquiry_err == ''){ //if there are no validation errors
            
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
            
            //mail customer
            $mail2 = new PHPMailer(); //new instance of PHPMailer
            $mail2->isSMTP();    //set mailer to use smtp
            $mail2->Host = 'smtp.live.com'; //smtp host
            $mail2->SMTPAuth = true; //enable smtp athorisation
            $mail2->SMTPSecure = 'tls'; //type of encryption
            $mail2->Port = 587; //port to connect smtp
            $mail2->Username = 'panky_68@hotmail.com'; //hotmail username
            $mail2->Password = 'Liam68par';    //hotmail password
            
            $to_user = $fromEmail;
            $subject_user = 'Zara Home Interiors Contact';
            $body_user = "Hello ".$name."\n\nThank you for your enquiry, we will be in contact very soon\n\nIsmail\nZara Home Interiors\nwww.zarahomeinteriors.co.uk\n99 Bridge Road\nLeicester\nLE3 3LD\n\nTel 0116 2760657\nFax 0116 1111111\n";
            
            $mail2->setFrom('panky_68@hotmail.com'); //Sender's Email Address (ie Ismail email)
            $mail2->Subject = $subject_user; //Email Subject
            $mail2->Body =  $body_user;      //Email Body
            $mail2->addAddress($to_user); //recipent address
            $mailErrorFlag2 = $mail2->send(); //send mail, true = successful, false = unsuccessful
            $mail2->smtpClose(); //closing stmp connection

            if($mailErrorFlag1 == true && $mailErrorFlag2 == true){     //if both email was sent
                header("Location: contact.php?email_sent"); //reload page with email_sent in URL
            }else{
                header("Location: contact.php?email_failed");   //reload page with email_failed in URL
            }
        }
    }
?>
    <body>
        <?php 
            $page = 'contact';
            include 'includes/menu.php'; 
        ?>
        <section id="content">
            <div class="container">
                <div class="row">   <!-- create row -->
                    <div class="col-md-12"> <!-- column 12 wide -->
                        <h1 class="pg_hdr">Contact Us</h1>  <!-- Contact Header -->
                    </div>
                </div>
                <div class="row">   <!-- create row -->
                    <div class="col-md-8">  <!-- column 8 wide -->
                        <p>Want to learn more? Contact us about your next project.</p>  <!-- Contact text -->
                        <form action="contact.php" method="POST" class="contact-us-form">   <!-- Contact Form -->
                            <!-- Name input -->
                            <div class="form-group">
                                <label for="name">Name *</label>    <!-- Name Input Label -->
                                <input type="text" class="form-control <?php if(!empty($name_err)){ echo 'input-error';} ?>" name="name" id="name" value="<?php if(isset($name)){ echo $name;}?>">
                                <?php if(isset($name_err)){ ?>  <!-- Name Input Error? -->
                                    <div>
                                        <p style="color: red; "><?php echo $name_err; ?></p>    <!-- Display Name Error -->
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- Phone Input -->
                            <div class="form-group">
                                <label class="form-control-label" for="phone">Phone *</label>   <!-- Phone Input Label -->
                                <input type="text" class="form-control <?php if(!empty($phone_err)){ echo 'input-error';} ?>" name="phone" id="phone" value="<?php if(isset($phone)){ echo $phone;}?>">
                                <?php if(isset($phone_err)){ ?> <!-- Phone Input Error? -->
                                    <div>
                                        <p style="color: red; "><?php echo $phone_err; ?></p>   <!-- Display Phone Error -->
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- Email Input -->
                            <div class="form-group">
                                <label for="email">Email *</label>  <!-- Email Input Label -->
                                <input type="text" class="form-control <?php if(!empty($email_err)){ echo 'input-error';} ?>" name="email" id="email" value="<?php if(isset($fromEmail)){ echo $fromEmail;}?>">
                                <?php if(isset($email_err)){ ?> <!-- Email Input Error? -->
                                    <div>
                                        <p style="color: red; "><?php echo $email_err; ?></p>   <!-- Display Email Error -->
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- Message Input -->
                            <div class="form-group">
                                <label for="message">Message *</label>  <!-- Message Input Label -->
                                <textarea name="message" class="form-control <?php if(!empty($enquiry_err)){ echo 'input-error';} ?>" id="message"><?php if(isset($enquiry)){ echo $enquiry;}?></textarea>  <!-- Message Input text area -->
                                <?php if(isset($enquiry_err)){ ?>   <!-- Message Input Error? -->
                                    <div>
                                        <p style="color: red; "><?php echo $enquiry_err; ?></p> <!-- Display Enquiry Error -->
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group" style="margin-bottom: 0;">
                                <button class="btn-primary contact-us-form-btn" type="submit" name="submit" role="button">Send Message</button>
                            </div>`
                            <br>

                            <!-- Email Message -->
                            <?php
                                if(isset($_GET['email_sent'])){     //if email was sent
                            ?>
                                    <div class="alert alert-success">Your Message has been sent</div>   <!-- Display Email sent success message -->
                            <?php
                                }else if(isset($_GET['email_failed'])){ //if email was not sent
                            ?>
                                    <div class="alert alert-danger">Unfortunately, your Message cannot be been sent</div>   <!-- Display Email not sent message -->
                            <?php
                                }
                            ?>
                        </form>
                    </div>
                    <div class="col-md-4">  <!-- column 4 wide -->
                        <h4>Where to Find Us</h4>
                        <div class="map-wrapper">
                            <a href="https://www.google.co.uk/maps/place/Zarah+Interiors+Leicester/@52.6397553,-1.1012771,19.5z/data=!4m13!1m7!3m6!1s0x4877616f2eead3bb:0x17759a5bbdee58cf!2sBridge+Rd,+Leicester+LE5+3LD!3b1!8m2!3d52.639384!4d-1.1015146!3m4!1s0x4877616f2d155857:0xc879354a0f4688af!8m2!3d52.6399259!4d-1.1009382" target="_blank"><img class="contact-us-map" src="img/Zara_Map.png" alt=""></a>    <!-- Google map location of store -->
                        </div>
                        <div class="address-wrapper">   <!-- Store address Wrapper -->
                            <h4>Zara Home Interiors Ltd</h4>    <!-- Store Name -->
                            <p>99 Bridge Road,</p>  <!-- Store address 1 -->
                            <p>LE5 3LD,</p> <!-- Store address 2 -->
                            <p>Leicester</p>    <!-- Store address 3 -->
                            <br>
                            <p><i class="fas fa-phone"></i> 0116 276 0657</p>   <!-- Store telephone -->
                            <p><i class="fas fa-envelope-square"></i> info@zarahomeinteriors.co.uk</p>  <!-- Store email -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
