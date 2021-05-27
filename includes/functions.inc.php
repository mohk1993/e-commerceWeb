<?php

function emptyInputSignup($name,$address,$phone,$email,$password,$confirm_password){
$result;
if(empty($name) ||empty($address)||empty($phone)||empty($email)||empty($password)||empty($confirm_password)){
    $result = true;
}
else{
    $result = false;
}
return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($password,$confirm_password){
    $result;
    if($password !== $confirm_password){
         $result = true;
    }
    else{
         $result = false;
    }
    return $result;
}
function emailExists($conn,$email){
   $sql = "SELECT * FROM customers WHERE customer_email = ?;"; 
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtexistsfailed");
        exit();  
   }

   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
        return $row;
   }
   else{
       $reslut =false;
       return $reslut;
   }
   mysqli_stmt_close($stmt);
}

function creatUser($conn,$name,$phone,$address,$email,$password){
    $sql = "INSERT INTO customers (customer_name, customer_address, customer_phone,customer_email, customer_password) VALUES (?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
         header("location: ../login.php?error=stmtfailed");
         exit();  
    }

    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
 
    mysqli_stmt_bind_param($stmt,"sssss",$name,$phone,$address,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
 
    mysqli_stmt_close($stmt);
    header("location: ../login.php");
    exit(); 
}

function emptyInputLogin($email,$pwd){
    $result;
    if(empty($email)||empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
} 

function loginUser($conn,$email,$pwd){
    $emailExists =  emailExists ($conn,$email);
    
    if($emailExists === true){
        header("location: ../login.php?error=emailtaken");
        exit();
    }

    $pwdhashed = $emailExists["customer_password"];
    $checkpwd = password_verify($pwd,$pwdhashed);

    if($checkpwd === false){
        header("location: ../login.php?error=incorrectpassword");
        exit();
    }
    else if($checkpwd === true){
        session_start();
        $_SESSION["userid"] = $emailExists["customer_id"];
        $_SESSION["useremail"] = $emailExists["customer_email"];
        header("location: ../index.php");
        exit();
    }
}
function creatProduct($conn,$productImg,$productTitle,$productPrice,$productDate,$productCategory,$productDescription,$productQuantity){
    $sql = "INSERT INTO products (product_img, product_name, product_price, product_date, product_category, product_description, product_quantity) VALUES (?, ?, ?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
         header("location: ../add-product.php?error=stmtfailed");
         exit();  
    }
    
 
    mysqli_stmt_bind_param($stmt,"sssssss",$productImg,$productTitle,$productPrice,$productDate,$productCategory,$productDescription,$productQuantity);
    $succ = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../add-product.php?error=non");
    exit(); 
}
function emptyInputProduct($productImg,$productTitle,$productPrice,$productDate,$productCategory,$productDescription,$productQuantity){
    $result;
    if(empty($productImg) ||empty($productTitle)||empty($productPrice)||empty($productDescription)||empty($productQuantity)||empty($productCategory)||empty($productDate)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
        