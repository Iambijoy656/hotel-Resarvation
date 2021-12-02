<?php
session_start();
require_once '../partial/header.php';
require_once '../config/db.php';

$user="";


if(isset($_SESSION["id"]) && $_SESSION["id"]) {
   if($_SESSION["id"] !=1){
       header("location:../profile.php");
   }

   $user_id = $_GET["id"];
   $query = "select * from checked where id ='$user_id'";
   $result=$con->query($query);
   $user=$result->fetch_assoc();




}else{
    header("location:../auth/login.php");
}
?>

<div>
       <h2>Update Customers Booking</h2>
          <form action="booking-update.php" method="post">

          <div class="regform">
            <input type="hidden" name= "user_id" value="<?php echo $user["id"]; ?> ">
           <label for="name">Full Name</label>
           <input type="text" name="name" value=<?php echo $user["name"]; ?> required>
           <label for="nnumber">Email</label>
           <input type="number" name="number" value=<?php echo $user["number"]; ?>>
           <label for="email">Mobile Number</label>
           <input type="email" name="email" value=<?php echo $user["email"]; ?>>
           <label for="email">Checkin-Date</label>
           <input type="date" name="checkin_date" value=<?php echo $user["checkin_date"]; ?>>
           <label for="email">Checkout-Date</label>
           <input type="date" name="checkout_date" value=<?php echo $user["checkout_date"]; ?>>
        
           
           <label  class="my-1 mr-2" for="inlineFormCustomSelectPref" name="room_type"><b>Room Type</b></label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="room_type" required="required">
                <option selected>Choose...</option>
                <option value=<?php echo $user["room_type"]; ?>>Single-Room</option>
                <option value=<?php echo $user["room_type"]; ?>>Double-Room</option>
                <option value=<?php echo $user["room_type"]; ?>>Luxary-Room</option>
            </select>
           

           

         
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