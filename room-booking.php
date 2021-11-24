<?php
session_start();
require_once "header.php";
?>

<?php if(isset($_SESSION["book_msg"])&& $_SESSION["book_msg"]){?>
                <div class="alert alert-success" role="alert">
            <?php  echo $_SESSION["book_msg"]; ?>
            </div>
            <?php }?>

<div>
       <h2>Room-Booking</h2>

     <form action="checkin.php" method="post">
       <div class="regform">
           <label for="name"><b>Full Name</b></label>
           <input type="text" name="name" required="required">
           <label for="name"><b>Email</b></label>
           <input type="email" name="email" required="required">
           <label for="nnumber"><b>Mobile Number</b></label>
           <input type="number" name="number" required="required">
           <label for="date"><b>Check-in Date</b></label>
           <input type="date" name="checkin_date" required="required">
           <label for="date"><b>Check-out Date</b></label>
           <input type="date" name="checkout_date" required="required">

          
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref" name="room_type"><b>Room Type</b></label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="room_type" required="required">
                <option selected>Choose...</option>
                <option name="room_type"> Single-Room</option>
                <option name="room_type" >Double-Room</option>
                <option name="room_type">Luxary-Room</option>
            </select>

 

        <button type="submit" class="btn btn-primary my-1">Book</button>


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
