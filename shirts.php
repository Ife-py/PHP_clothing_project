<?php 
$products= array();
$products[101]=array(
    "name"=>"Logo Shirt,Red",
    "price"=>18,
    "img"=>"img/shirts/shirt-101.jpg",
);
$products[102]=array(
    "name"=>"Mike the frog,Black",
    "img"=>"img/shirts/shirt-102.jpg",
    "price"=> 0,

);
$products[103]=array(
    "name"=>"Mike the Frog Shirt,Blue",
    "img"=>"img/shirts/shirt-103.jpg",
    "price"=> 0,
);
$products[104]=array(
    "name"=>"Logo Shirt,Green",
    "img"=>"img/shirts/shirt-104.jpg",
    "price"=>0,
);
$products[105]=array(
    "name"=> "",
    "img"=>"img/shirts/shirt-105.jpg",
    "price"=>0,
);
$products[106]=array(
    "name"=>"Logo Shirt, Gray",
    "img"=> "img/shirts/shirt-106.jpg",
    "price"=>20,
);
$products[107]=array(
    "name"=> "Logo Shirt,Turquoise",
    "img"=>"img/shirts/shirt-107.jpg",
    "price"=> 20,
);
$products[108]=array(
    "name"=> "Logo Shirt,Orange",
    "img"=>"img/shirts/shirt-108.jpg",
    "price"=> 25,
);
?>

<?php 
$page_title ="'Ife's full catalogue of shirt'";
$section ="shirts";
include('include/header.php'); ?>

    <div class="section shirts page">
        <div class="wrapper">
            <h1>Ife&rsquo;s Full Catalog Of Shirts</h1>
            <ul class="products">
                <?php foreach($products as $product){
                        echo "<li>";
                        echo "<a href='#'>";
                        echo '<img src="'.$product["img"].'" alt="'.$product["name"].'">';
                        echo "<p>View Details</p>";                    
                        echo "</a>";
                        echo "</li>";
                    }
                ?>
            </ul>
        </div>
    </div>

<?php include('include/footer.php'); ?> 