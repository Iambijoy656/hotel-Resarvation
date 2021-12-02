<?php
session_start();
require_once('../config/db.php');
$user_id= $_GET["id"];

$query= "delete from checked where id = '$user_id'";

if($con->query($query)){
    $_SESSION["msg"]="Successfully Checked out this person!";
    header("location:booking-details.php");
}else {
    echo "Error";
}