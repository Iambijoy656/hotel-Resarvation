<?php
session_start();

require_once('db.php');

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $_SESSION["email_error"]= "";
    $_SESSION["password_error"]= "";
    $_SESSION["error_msg"]= "";

    $email= $_POST["email"];
    $password= $_POST["password"];

 
    if($email !== '' && $password !== ''){
        
        $sql="select * from users where email='$email' and password='$password'";

        $result=$con->query($sql);

        if($result->num_rows>0){

                $user= $result->fetch_assoc();

            $_SESSION["id"]=$user["id"];
            $_SESSION["name"]=$user["name"];
            $_SESSION["email"]=$user["email"];


            $role= $user["roles_id"];
            // print_r($role);

            if($role==1){
                header("location:admin.php");
            }

            if($role==2){
                header("location:profile.php");
            }
        }else {
            $_SESSION["error_msg"]= "Username and password is wrong, try again!";
            header("location:login.php");
        }



        



        
    }else {
        if($email==""){
            $_SESSION["email_error"]= "Email is required";
        }
        if($password==""){
            $_SESSION["password_error"]= "password is required";
        }
        
        header("location:login.php");
    }
}