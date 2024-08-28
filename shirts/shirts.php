<?php include("../include/products.php");
require_once("../include/config.php");
?>
<?php 
$page_title ="'Ife's full catalogue of shirt'";
$section ="shirts";
include(ROOT_PATH.'include/header.php'); ?>

    <div class="section shirts page">
        <div class="wrapper">
            <h1>Ife&rsquo;s Full Catalog Of Shirts</h1>
            <ul class="products">
                <?php foreach($products as $product_id => $product){
                        echo get_list_view_html($product_id,$product);
                    }
                ?>
            </ul>
        </div>
    </div>

<?php include(ROOT_PATH.'include/footer.php'); ?> 