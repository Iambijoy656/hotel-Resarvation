<?php
require_once 'header.php';
?>
<body>
    <form action="check.php" method="post">
        <div class="login-form">
            <h1>Login Form</h1>
            <p>Email</p>
            <input type="email" name="email" placeholder="email">
            <p>Password</p>
            <input type="password" name="password" name="password" placeholder="password">

            <button type="submit" name="login">login</button>
            <div>
                <p>Go to registration form <a href="signup.php">click here</a></p>
            </div>
        </div>
    </form>

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