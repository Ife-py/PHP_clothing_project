<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=trim($_POST["name"]);
    $email=trim($_POST["email"]);
    $message=trim($_POST["message"]);
    if ($name=="" or $emai="" or $message=""){
        $error_message= "You must specify a value for name and email address and message.";
        
    }

    foreach($_POST as $value){
        if (stripos($value,'Content-Type:') != FALSE){
            $error_message= "There was a problem with the information you entered";
            
        }
    }

    if ($_POST["address"] !=""){
        $error_message= "Your form submission has an error";
        
    }

    if (isset($error_message)){
        require_once("include/PHPMailer-6.9.1/src/PHPMailer.php");
        $mail= new PHPMailer();

        if (!$mail ->ValidateAddress($email)){
            echo"You must specify a valid email adderss";
            exit;
        }


        $email_body="";
        $email_body=$email_body. "Name:". $name."<br>";
        $email_body=$email_body. "Email:".$email."<br>";
        $email_body=$email_body."Message:".$message."<br>";
        
        // todoSend email 

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('ifeoluwaomoleke@gmail.com','Ife');
            $mail->addAddress($email, $name) ;     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Shirts 4 Ife contact form submission'. $name;
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            $error_message= "There was a problem sending the email. Mailer Error: {$mail->ErrorInfo}";
        } 
        header("Location:contact-thanks.php?status=thanks");
        exit;
    }
}
if (isset($error_message)){
    echo $error_message;
}
?> 
<?php 
$page_title="Contact Ife";
$section="contact";
include( 'include/header.php'); ?>

    <div class="section page">
        <div class="wrapper">
            <h1>Contact</h1>
            <?php if (isset($_GET["status"]) and $_GET["status"]=="thanks"){?>
                 <p>Thanks for the Email! I&rsquo;ll be in touch shortly</p>
             <?php } else{?>

                <p>I&rsquo;d love to hear from you! Complete the form to send me an email</p>
                <form method="post"n action="contact.php">
                    <table>
                        <tr>   
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>   
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>   
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr>
                        <tr style="display:none;">   
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="addresss" id="address">
                                <p>Humans and frogs please leave this field blank</p>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Send"> 
                </form> 
            <?php } ?>
        </div>  
    </div>

<?php include('include/footer.php'); ?>  