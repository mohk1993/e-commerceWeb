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
    $customerForKey = $row["customer_Fk"];
}
$resultCustomer = mysqli_query($conn,"SELECT * FROM customers WHERE customer_id='".$customerForKey."'");
while($row = mysqli_fetch_array($resultCustomer)){
    $customerName = $row["customer_name"];
    $customerSurName = $row["customer_surname"];
    $customerAddress = $row["customer_address"];
    $customerPhone = $row["customer_phone"];
    $customerEmail = $row["customer_email"];
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
            </p>
            Quantity avilable: <p> <?php echo $productQuantity; ?> </p>
            
            <h2>Owner contacts</h2>
            Address:<p > <?php echo $customerAddress; ?> </p>
            E-mail:<p > <?php echo $customerEmail; ?> </p>
            Phone:<p > <?php echo $customerPhone; ?> </p>
        </div>
        <h2 class="title" style="margin-top:30px;color:red;">Similar Products</h2>
        <div class="row" style="margin-top:20px;">
            <?php 
            
                $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='".$productGat."'");
                while($row = mysqli_fetch_array($result))
                {
                            
            ?>
            <div class="col-4">
                <a href="product-details.php?Getid=<?php echo  $row['prodcut_id']; ?>"><?php echo '<img src="images/'.$row['product_img'].'" alt="image" style="width:240px; height:260px;">'?></a>   
                <a href="product-details.php?Getid=<?php echo  $row['prodcut_id']; ?>"><h4><?php echo $row["product_name"]; ?></h4></a>
                <p><?php echo $row["product_price"]; ?> $</p>
            </div>

            <?php 
                }					
		    ?>
        </div>
    </div>
</div>




<?php
include_once 'footer.php';
?>