<?php
session_start();
require_once('./config/db.php');

if($_SERVER["REQUEST_METHOD"]= "POST"){
    $user_id= $_POST["user_id"];
    $name= $_POST["name"];
    $number= $_POST["number"];
    $email= $_POST["email"];
    $password= $_POST["password"];


$query= "update users set name='$name',number='$number',email= '$email' ,password= '$password' where id= '$user_id'";

if($con->query($query)){
    $_SESSION["msg"]= "Successfully Update";
    header("location:user-index.php");
}else{
    echo "Error";
}
    
}