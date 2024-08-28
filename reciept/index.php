<?php  
require_once("../include/config.php");
 
$page_title="Thank you for your order";
$section= "none";
include(ROOT_PATH. "include/header.php");?>

    <div class="section page">
        <div class="wrapper">
            <h1>Thank You!</h1>
        <p>Thank you for your payment. Your transaction has been completed and a recorded copy is present. You may log in to your account at  <a href="https://www.paypal.com/us">www.paypal.com/us</a> to view details</p>
        <p>Need another shirt already?Visit the <a href="<?php echo BASE_URL ;?>/shirts.php">Shirt Listing</a> page again. </p>
        </div>
    </div>
<?php include(ROOT_PATH. "include/footer.php");?> 
