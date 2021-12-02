<?php
session_start();
require_once('../config/db.php');
$user_id= $_GET["id"];

$query= "delete from contact where id = '$user_id'";

if($con->query($query)){
    $_SESSION["msg"]="Massage Deleted!";
    header("location:check-msg.php");
}else {
    echo "Error";
}