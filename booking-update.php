<?php
session_start();
require_once('db.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION["massage"]= "";
    $_SESSION["msg"]= "";
   

    $user_id=$_POST["user_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $checkin_date = $_POST["checkin_date"];
    $checkout_date = $_POST["checkout_date"];
    $room_type = $_POST["room_type"];


$query= "update checked set name='$name',email= '$email',number='$number' ,checkin_date= '$checkin_date',checkout_date= '$checkout_date',room_type='$room_type' where id= '$user_id'";

if($con->query($query)){
    $_SESSION["massage"]= "Booking Update Successfully";
    header("location:booking-details.php.");
}else{
    echo "Error";
}
    
}