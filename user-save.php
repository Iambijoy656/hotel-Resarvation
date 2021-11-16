<?php

require_once 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql= "INSERT INTO users ( name, number, email , password, roles_id) VALUES ( '$name', '$number', '$email', '$password', '2')";

    if($con->query($sql)){
        echo "inserted succesfull";
    }else {
        echo "failed";
    }

}
