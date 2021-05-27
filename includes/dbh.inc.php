<?php


$dBUsername = "localhost";
$serverName = "root";
$dBPassword ="";
$dBName = "shop";

$conn = mysqli_connect($dBUsername,$serverName,$dBPassword,$dBName);

if(!$conn){
    die("connection faild: " . mysqli_connect_errno());
}