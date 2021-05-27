<?php
session_start();
require_once 'includes\dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sell,Deal,near by sell, buy">
    <title> Deal? </title>
    <link rel="stylesheet" href="style.css?d=<?php echo date('Ymdmis'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/Logo.PNG" alt="" width="115px">
                </div>
                <nav>
                    <ul id="minuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php?id=all">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <?php
                            if(isset($_SESSION["userid"])){

                                echo "<li><a href='includes\logout.inc.php'>Log out</a></li>";
                            }else{
                            echo "<li><a href='includes\logout.inc.php'>log in</a></li>";
                            }
                        ?>  
                    </ul>
                </nav>
                <img src="images/minuIcon.png" class="minu-icon" onclick="minuToggle()">
            </div>