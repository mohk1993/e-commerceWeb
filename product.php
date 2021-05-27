<?php
include_once 'header.php';
require_once 'includes\dbh.inc.php';
?>
</div>
    <div class="container"> 
        <div class="row select-row">
            <h2> All Porduct </h2>
            <!-- <select name="category" >
                <option value="all"> All </option>
                <option value="antique"> Antique </option>
                <option value="food"> Food </option>
                <option value="clothes"> Clothes </option>
                <option value="electronics"> Electronics </option>
                <option value="accessories"> Accessories </option>
                <option value="kitchen"> Kitchen </option>
                <option value="cars"> Cars </option>
                <option value="furnture"> Furnture </option>
                <option value="travel"> Travel </option>
                <option value="games"> Games </option>
            </select> -->
            <div class="dropdown">
                <button class="dropbtn">Select Category</button>
                <div class="dropdown-content">
                    <a href="product.php?id=all">All</a>
                    <a href="product.php?id=antique">Antique</a>
                    <a href="product.php?id=food">Food</a>
                    <a href="product.php?id=clothes">Clothes</a>
                    <a href="product.php?id=electronics">Electronics</a>
                    <a href="product.php?id=accessories">Accessories</a>
                    <a href="product.php?id=kitchen">Kitchen</a>
                    <a href="product.php?id=cars">Cars</a>
                    <a href="product.php?id=furnture">Furnture</a>
                    <a href="product.php?id=travel">Travel</a>
                    <a href="product.php?id=games">Games</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php 
                
                $id =$_GET['id'];
                if($id=='antique'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='antique'");
                }elseif($id=='food'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='food'");
                }elseif($id=='clothes'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='clothes'");
                }elseif($id=='electronics'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='electronics'");
                }elseif($id=='accessories'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='accessories'");
                }elseif($id=='kitchen'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='kitchen'");
                }elseif($id=='cars'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='cars'");
                }elseif($id=='furnture'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='furnture'");
                }elseif($id=='travel'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='travel'");
                }elseif($id=='games'){
                    $result = mysqli_query($conn,"SELECT * FROM products WHERE product_category='games'");
                }elseif($id=='all') {
                    $result = mysqli_query($conn,"SELECT * FROM products");
                }
                // $result = mysqli_query($conn,"SELECT * FROM products");
                while($row = mysqli_fetch_array($result))
                {
                        
            ?>
            <div class="col-4">
                <div class="card">
                    <a href="product-details.php?Getid=<?php echo  $row['prodcut_id']; ?>"><?php echo '<img src="images/'.$row['product_img'].'" alt="image" style="width:300px; height:300px;">'?></a> 
                    <div class="card-body">
                        <a href="product-details.php?Getid=<?php echo  $row['prodcut_id']; ?>"><h4 class="card-title"><?php echo $row["product_name"]; ?></h4></a> 
                        <p class="card-text"><?php echo $row["product_price"]; ?> $</p>
                    </div>
                </div>
            </div>
            <?php 
            }					
		    ?>
        </div>
       
      
		<?php 
			mysqli_close($conn); 
		?>
    </div>
<?php
include_once 'footer.php';
?>
