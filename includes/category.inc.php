<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

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
}else {
    $result = mysqli_query($conn,"SELECT * FROM products");
}
