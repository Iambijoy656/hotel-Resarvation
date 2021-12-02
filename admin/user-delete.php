<?php
session_start();
require_once("../config/db.php");
$user_id=$_GET["id"];


$query= "delete from users where id = '$user_id'";

if($con->query($query)){
    $_SESSION["delete_msg"]= "Successfully Deleted";
    header("location:user-index.php");
}else{
    echo "Error";
}