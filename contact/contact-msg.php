<?php
session_start();

require_once('../config/db.php');

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $_SESSION["massage"]= "";
    $_SESSION["msg"]= "";

   $name = $_POST["name"];
   $email= $_POST["email"];
   $massage= $_POST["massage"];

   $sql= "INSERT INTO contact  ( name, email , massage) VALUES ( '$name',  '$email', '$massage')";

    if($con->query($sql)){
        $_SESSION["massage"]= "Successfully Send";
        header("location:contact.php");
    }else {
        $_SESSION["msg"]= "Try again!";
        header("location:contact.php");
    }

}
