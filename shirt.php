<?php include("include/products.php"); 

if (isset($_GET["id"])){
    $product_id=$_GET["id"];
    if (isset($products[$product_id])){
        $product=$products[$product_id];
    }
}

if (!isset($product)){
    header("Location:shirts.php");
    exit();
} 

$section="shirts";
$page_title=$product["name"];
include("include/header.php");?>
        <div class="section page">
            <div class="wrapper">
                <div class="breadcrumb">
                    <a href="shirts.php">Shirts</a>&gt; <?php echo $product["name"]; ?>
                </div>
                <div class="shirt-picture">
                    <span>
                        <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"];?>">
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
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                        <option value="X-Large">X-Large</option>
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


<?php include("include/footer.php"); ?>