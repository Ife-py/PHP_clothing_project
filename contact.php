<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $email_body="";
    $email_body=$email_body. "Name:". $name."\n";
    $email_body=$email_body. "Email:".$email."\n";
    $email_body=$email_body."Message:".$message."\n";
    // todoSend email

    header("Location:contact-thanks.php?status=thanks");
    exit;
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
                    </table>
                    <input type="submit" value="Send"> 
                </form> 
            <?php } ?>
        </div>  
    </div>

<?php include('include/footer.php'); ?>  