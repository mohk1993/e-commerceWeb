<?php
require_once '../includes/dbh.inc.php';
if(isset($_GET["Del"])){
    $hID = $_GET["Del"];
    $sql= "DELETE FROM products WHERE prodcut_id= '".$hID."'";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("location: horses.php");
    }
    else{
        echo 'nooo';
    }
}
else{
    echo 'rwong';
}


?>