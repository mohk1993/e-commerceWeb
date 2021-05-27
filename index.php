<?php
    include_once 'header.php';
?>      
            <div class="row">
                <div class="col-2">
                    <h1> Are You Looking <br> For A Deal? </h1>
                    <p>Find what are you looking for</p>
                    <a href="product.php?id=all" class="btn">Eplore now &#8594;</a>
                    <h2> Become A Seller </h2>
                    <p>Sell on DEAL?</p>
                    <?php   
                        if (isset($_SESSION["userid"])){
                            echo "<a href='add-product.php' class='btn'>To Sell &#8594;</a>";
                        }
                        else{
                            echo "<a href='login.php' class='btn'>To Sell &#8594;</a>";
                        }
                    
                    ?>
                </div>
                <div class="col-2">
                    <img src="images\loginPage.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!------------------- featured Catagory --------------->

    <!-- <div class="catagories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images\Landing1jpg.jpg" alt="" width="500px">
                </div>
                <div class="col-3">
                    <img src="images\Landing1jpg.jpg" alt="" width="500px">
                </div>
                <div class="col-3">
                    <img src="images\Landing1jpg.jpg" alt="" width="500px">
                </div>
            </div>
        </div>
    </div> -->

    <!------------------- featured products --------------->

    <div class="small-container">
        <!-- <h2>Featured Product</h2>
        <div class="row" style="margin-top:20px;">
            <?php 
                $result = mysqli_query($conn,"SELECT * FROM products");
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
        </div> -->
        <h2 class="title">Latest Products</h2>
        <div class="row" style="margin-top:20px;">
            <?php 
            
                $result = mysqli_query($conn,"SELECT * FROM products ORDER BY prodcut_id DESC LIMIT 8");
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

<?php
    include_once 'footer.php';
?>
   