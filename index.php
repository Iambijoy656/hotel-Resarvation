<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelManagement</title>
    <link rel="stylesheet" href="./css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Sansita+swashed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
   <div class="main-header">
       <div class="header">
           <h1>Hotel Management</h1>
           <div class="navigation">
               <ul>
                   <li><a href="#">Home</a></li>
                   <li><a href="../partial/about.php">About</a></li>
                  
                   <li><a href="#">gallary</a></li>
                   <li><a href="./contact/contact.php">Contact</a></li>
                  
                   <li><a href="../sign-up/signup.php">sing Up</a></li>

                   <li><a href="./auth/login.php">login</a></li>
                   
                   
               </ul>
           </div>

       </div>
       <h2>Great Choice of <span>HOTEL</span></h2>
   </div>
   <!-- end of navigation bar -->

   <div class="service">
       <h2>services</h2>
       <div class="main-service">
            <div class="service-box">
            <i class="fas fa-user"></i>
                <h4>Tour & Excursions</h4>
                <hr>
                <p>Vehicals are availavil for tour and travels</p>
            </div>
            <div class="service-box">
              <i class="fas fa-user"></i>
                    <h4>Free wirless internet</h4>
                    <hr>
                    <p>Baby sitting on request</p>
                </div>

                <div class="service-box">
                <i class="fas fa-user"></i>
                    <h4>Baby sitting on request</h4>
                    <hr>
                    <p>Baby sitting on request</p>
                </div>
                <div class="service-box">
                <i class="fas fa-user"></i>
                    <h4>Laundary Service</h4>
                    <hr>
                    <p>Free laundry service availavil for a customers who look queen and king size room</p>
                </div>

     </div>
        
            <div class="gallery">
                <div class="img">
                    
                    <img src="image/istockphoto-492189224-612x612.jpg" alt="" height="160px" width= "auto"> 
                    <img src="image/photo-1566073771259-6a8506099945.jfif" alt="" height="160px" width= "auto">
                    <img src="image/istockphoto-472899538-170667a.jpg" alt="" height="160" width= "auto" >
                    <img src="image/photo-1611892440504-42a792e24d32.jfif" alt="" height="160px" width= "auto">
                 
                   
                </div>
            </div>
       
   </div>

      
    
   <!-- end here services -->


   <!-- start here registration -->

   <div>
       <h2>Ragistration with Us</h2>

       <form action="user-save.php" method="post">
       <div class="regform">
           <label for="name">Full Name</label>
           <input type="text" name="name">
           <label for="nnumber">Mobile Number</label>
           <input type="number" name="number">
           <label for="email">Email</label>
           <input type="email" name="email">
           <label for="name">Password</label>
           <input type="password" name="password">
           <br>
           <button>Sing Up</button>
           
          
       </div>
       </form>
   </div>

   <!-- end here risistration form -->


   <!-- start here can touch easily -->

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