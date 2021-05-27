<?php
include_once 'header.php';
$uid = $_SESSION["userid"];
require_once 'includes\dbh.inc.php';
$productId = $_GET['Getid'];
$result = mysqli_query($conn,"SELECT * FROM products WHERE prodcut_id='".$productId."'");
while($row = mysqli_fetch_array($result)){
    $productTitle = $row["product_name"];
    $productPrice = $row["product_price"];
    $productGat = $row["product_category"];
    $productImg = $row["product_img"];
    $productDate = $row["product_date"];
    $productDiscr = $row["product_description"];
    $productQuantity = $row["product_quantity"];

}
?>
</div>

<div class="small-container single-product">
    <div class="row">
        <div class="col-2 singl-prodct-col2">
            <!-- <img src="images\T-shirt.jpg" alt="" width="100%" id="productImg"> -->
            <?php echo '<img src="images/'.$productImg.'" alt="image">'?>
            <div class="small-img-row">
                <div class="small-img-col">
                    <?php echo '<img src="images/'.$productImg.'" alt="image">'?>
                </div>
                <div class="small-img-col">
                    <?php echo '<img src="images/'.$productImg.'" alt="image">'?>
                </div>
                <div class="small-img-col">
                    <?php echo '<img src="images/'.$productImg.'" alt="image">'?>
                </div>
                <div class="small-img-col">
                <?php echo '<img src="images/'.$productImg.'" alt="image">'?>
                </div>
            </div>
        </div>
        <div class="col-2 singl-prodct-col2">
            <h1> <?php echo $productTitle; ?> </h1>
            <h4> <?php echo $productPrice; ?> $</h4>
            <p> <?php echo $productDiscr; ?> </p>
        </div>
    </div>
</div>




<?php
include_once 'footer.php';
?>