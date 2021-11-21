<?php

require_once("db.php");

if($_SERVER["REQUEST_METHOD"]="POST"){
    $name= $_POST["name"];
    $number= $_POST["number"];
    $checkin_date= $_POST["checkin_date"];
    $checkout_date= $_POST["checkout_date"];
    $room_type= $_POST["room_type"];

    $sql="INSERT into checked(name,number,checkin_date, checkout_date,room_type) values('$name','$number','$checkin_date','$checkout_date', '$room_type')";

    if($con->query($sql)){
        echo "Inserted successfully";
    }else{
        echo "Error";
    }
}