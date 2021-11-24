<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Afordable and professional web design">
    <meta name="keywords" content="web Design,Afordable web Design and professional web design">
    <title>Bijoy Web Design |Services</title>
    <link rel="icon" href="img/images.jpg">
    <link rel="stylesheet" href="bijoy.css">
</head>
<body>




      <header>
          <div class="container">

              <div id="branding"> 
                <h1><span class="highlight">Hotel</span>World</h1>
                <p>"Contact with Us,If you have any problem"</p>

              </div> 

          

          </div>
      </header>
      <?php if(isset($_SESSION["massage"])&& $_SESSION["massage"]){?>
                                    <div class="alert alert-success" role="alert">
                                <?php  echo $_SESSION["massage"]; ?>
                                </div>
                                <?php }?>

                                <?php if(isset($_SESSION["msg"])&& $_SESSION["msg"]){?>
                                    <div class="alert alert-danger" role="alert">
                                <?php  echo $_SESSION["msg"]; ?>
                                </div>
                                <?php }?>
       

        <section id="main">
            <div class="container">
               <article id="main-col"> 
                   <h1 class="page-title">Owner & Management Head:</h1>
                    <ul id="services">
                        <li>
                            <h3>Owner:</h3>
                            <p>MR. BIJOY CHANDRA DAS.</p>
                          
                        </li>

                        <li>
                            <h3>Management Head:</h3>
                            <p>MR. PRITOM CHANDRA DAS</p>
                            
                        </li>

                        <li>
                            <h3>Hotel Manager:</h3>
                            <p>MR. NISHAN CHANDRA DAS.</p>
                           
                        </li>
                    </ul>

                  </article>

               <aside id="sidebar">
                 <div class="dark">
                   <h3>Contact Us</h3>


                   
                 



                   <form class="quote" action="contact-msg.php" method="post">
                       <div>
                           <label for="name">Name:</label><br>
                           <input type="text" id="name" name="name" placeholder="Enter your name" required>
                       </div>
                       
                       <div>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email"  name="email"  placeholder="Enter your email address" required>
                    </div>

                    <div>
                        <label for="massage">Massage:</label> <br>
                     <textarea name="massage" id="massage"  name="massage" placeholder="Enter a short massage" re></textarea>
                    </div>
                    <button type="submit" class="button1">Send</button>
                   </form>
                   
                 </div>
               </aside>

            </div>
        </section>

        <footer>
            <p>HOTEL MANAGEMENT SYSTEM $ 2021</p>
        </footer>

</body>
</html>