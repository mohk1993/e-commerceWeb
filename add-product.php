<?php
include_once 'header.php';

?>
</div>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-2 colForm">
                <div class="upload-container">
                    <div class="for-btn">
                        <span >Add Product Details</span>
                    </div>

                    <form action="includes\prodcut.inc.php" method="POST" enctype="multipart/form-data">
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-plus"></i> Add Photo
                        </label> 
                        <input id="file-upload" name="imge" type="file">
                        <!-- <input type="file" placeholder="file" name="file" required="required"> -->
                        <input type="text" placeholder="Title" name="title" required="required">
                        <input type="text" placeholder="Price" name="price" required="required">
                        <select name="category" class="category">
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
                        </select>
                        <!-- <textarea name="description" placeholder="Description" style="width:80%;margin:10px 0" cols="30" rows="4"></textarea> -->
                        <input type="input" placeholder="description" name="description" required="required">
                        <input type="input" placeholder="Quantity" name="quantity" required="required">
                        <button tybe="submit" name="add" style="width:80%" class="btn">Upload</button><br>
                        <a href="index.php" name="cancel" style="width:80%;font-size:20px" > Cancel! </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>