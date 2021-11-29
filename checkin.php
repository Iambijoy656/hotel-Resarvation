<?php
session_start();
require_once 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $checkin_date = $_POST["checkin_date"];
    $checkout_date = $_POST["checkout_date"];
    $room_type = $_POST["room_type"];

    // $sql="INSERT into checked(name, email, number,checkin_date, checkout_date,room_type) values('$name','$email,'$number','$checkin_date','$checkout_date', '$room_type')";
    
   

    $sql= "INSERT INTO checked ( name,  email ,number,checkin_date, checkout_date,room_type) VALUES ( '$name','$email','$number','$checkin_date','$checkout_date', '$room_type')";
    print_r($sql);
    // die();
    if($con->query($sql)){
      $_SESSION["book_msg"]= "Successfully Booking...Thank you for being with us!";
      header("location:room-booking.php");
  }else{
      echo "Error";
  }

}
    

   
    

