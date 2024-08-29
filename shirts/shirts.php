<?php 

    require_once("../include/products.php");
    require_once("../include/config.php");

    if(empty($_GET["pg"])){
        $current_page=1;
    }else{
        $current_page=$_GET["pg"];
    }
    $current_page=intval($current_page);

    $total_product=get_products_count();
    $product_per_page=8;
    $total_pages=ceil($total_products/$product_per_page);

    if($current_page> $total_pages){
        header("Location: ./?pg=".$total_pages);
    }

    if ($current_page){
        header("Location:./"); 
        
    }
    $start= (($current_page-1)* $product_per_page)+1;
    $end= $current_page * $product_per_page;
    if ($end > $total_products){
        $end=$total_products; 
    }

    $products=get_products_subset($start,$end);

?>
<?php 
$page_title ="'Ife's full catalogue of shirt'";
$section ="shirts";
include(ROOT_PATH.'include/header.php'); ?>

    <div class="section shirts page">
        <div class="wrapper">
            <h1>Ife&rsquo;s Full Catalog Of Shirts</h1>
            <?php include(ROOT_PATH."include/iist_nav.html.php") ?>;

            <ul class="products">
                <?php foreach($products as $product){
                        include(ROOT_PATH."include/partial_product_list_view_html_php");
                    }
                ?>
            </ul>
            <?php include(ROOT_PATH."include/iist_nav.html.php") ?>;
            
        </div>
    </div>

<?php include(ROOT_PATH.'include/footer.php'); ?> 