<?php

if(isset($_POST["submit"])){
$name = $_POST["username"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputSignup($name,$address,$phone,$email,$password,$confirm_password)!==false){
    header("location: ../login.php?error=emptyinput");
    exit();
}
if(invalidEmail($email)!==false){
    header("location: ../login.php?error=invalidemail");
    exit();
}
if(pwdMatch($password,$confirm_password)!==false){
    header("location: ../login.php?error=passworddontmatch");
    exit();
}
if(emailExists($conn,$email)!==false){
    header("location: ../login.php?error=emailtaken");
    exit();
}
creatUser($conn,$name,$address,$phone,$email,$password);

}
else{
    header("location: ../login.php");
}