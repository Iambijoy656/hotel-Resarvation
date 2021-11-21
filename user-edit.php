<?php
session_start();
require_once 'header.php';
require_once 'db.php';

$user="";


if(isset($_SESSION["id"]) && $_SESSION["id"]) {
   if($_SESSION["id"] !=1){
       header("location:profile.php");
   }

   $user_id = $_GET["id"];
   $query = "select * from users where id ='$user_id'";
   $result=$con->query($query);
   $user=$result->fetch_assoc();




}else{
    header("location:login.php");
}
?>

<div>
       <h2>Update profile</h2>
          <form action="user-update.php" method="post">

          <div class="regform">
            <input type="hidden" name= "user_id" value="<?php echo $user["id"]; ?> ">
           <label for="name">Full Name</label>
           <input type="text" name="name" value=<?php echo $user["name"]; ?> required>
           <label for="nnumber">Mobile Number</label>
           <input type="number" name="number" value=<?php echo $user["number"]; ?>>
           <label for="email">Email</label>
           <input type="email" name="email" value=<?php echo $user["email"]; ?>>
           <label for="name">Password</label>
           <input type="password" name="password" value=<?php echo $user["password"]; ?>>
           <br>
           <button>Update</button>
           
          
       </div>
          </form>  
       
   </div>
   <div class="touch">
       <h2>Get In Touch</h2>
       <div class="break">
           <div class="adress">
               <h4>Address</h4>
               <p>world Restaurent, Katmandu</p>
           </div>
           <div class="salse">
               <h4>Salse</h4>
               <h6>Salse Enquiries</h6>
               <p>Tel:01885654</p>
              <p> Email:world$gmail.com</p>
           </div>
           <div class="about">
               <h2>About Us</h2>
               <p>We have 72 hours cofortly room,two slots and the embassidor</p>
           </div>
       </div>
       <div class="footer">
           <h4>HOTEL MANAGEMENT SYSTEM $ 2021</h4>
       </div>
   </div>
</body>
</html>