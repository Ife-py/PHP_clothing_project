<?php 
require_once("../include/config.php");
require_once(ROOT_PATH."/include/products.php"); 

if (isset($_GET["id"])){
    $product_id=intval($_GET["id"]);
    $product=get_product_single($product_id);
}
// a product will only be set and not false if an id is specified in the query string and it corresponds to a real product.
if (empty($product)){
    header("Location:" ."/PHP_1/"."shirts/");
    exit();
} 

$section="shirts";
$page_title=$product["name"];
include(ROOT_PATH."include/header.php");?>
        <div class="section page">
            <div class="wrapper">
                <div class="breadcrumb">
                    <a href="/PHP_1/shirts/">Shirts</a>&gt; <?php echo $product["name"]; ?>
                </div>
                <div class="shirt-picture">
                    <span>
                        <img src="<?php echo"/PHP_1/" .$product["img"]; ?>" alt="<?php echo $product["name"];?>">
                    </span>
                </div>

                <div class="shirt-details">
                    <h1><span class="price">
                             $ <?php echo $product["price"];?> <?php echo $product["name"];?></h1>
                        </span>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
                        <input type="hidden" name="item_name"value="<?php echo $product["name"]; ?>">
                        <table>
                            <tr>
                                <th>
                                    <input type="hidden" name="on0" value="Size">
                                    <label for="os0">Size</label>
                                </th>
                                <td>
                                    <select name="os0" id="os0">
                                        <?php foreach($product["sizes"] as $size){?> 
                                            <option value="<?php echo $size; ?>"><?php  echo $size; ?></option>    
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" value="Add to Cart" name="submit">
                    </form>
                    <p class="note-designer">*All shirts are desinged by Ife.py</p>
                </div>

            </div>
        </div>


<?php include(ROOT_PATH."include/footer.php"); ?>