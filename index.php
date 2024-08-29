<?php 
require_once("include/config.php");
include(ROOT_PATH."include/products.php");
$recent=get_products_recent();

$page_title="Unique T-shirts designed by Ife";
$section="home";
include(ROOT_PATH.'include/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Ife.py!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>		
				<ul class="products">
					<?php 
						$list_view_html="";
						foreach(array_reverse($recent) as $product){
							$list_view_html=get_list_view_html($product).$list_view_html;
						}
						echo $list_view_html;
                	?>
				</ul>
			</div>

		</div>

	</div>

<?php include(ROOT_PATH.'include/footer.php'); ?>