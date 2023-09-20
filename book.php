<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Explore SriLanka-Book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <div>
         <img src="img/new weblogo-2.png" >
      </div>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book now</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
               <span>phone :</span>
               <input type="phone" placeholder="enter your number" name="phone">
            </div>

            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
               <span>Package :</span>
               
               <select placeholder="Select Your Package" name="location">                    
                  <option value="Luxury Yacht touring">Luxury Yacht touring</option>
                  <option value="Hot Air Ballooning">Hot Air Ballooning</option>
                  <option value="JetSki Riding">JetSki Riding</option>
                  <option value="Scuba Diving">Scuba Diving</option>
                  <option value="Lagoon Kayaking">Lagoon Kayaking</option>
                  <option value="Paramotoring">Paramotoring</option>
                  <option value="Glamping">Glamping</option>
                  <option value="Waterskiing">Waterskiing</option>
                  <option value="Luxury Camping">Luxury Camping</option>
                  <option value="Off-road Camping">Off-road Camping</option>
                  <option value="Customize Your trip">Customize Your trip</option>                          
               </select>
            </div>

            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving">
            </div>

         </div>

         <input type="submit" value="submit" class="btn" name="send">

         
      </form>

   </section>

   <!-- booking section ends -->

   












   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +94 713510163 </a>
            <a href="#"> <i class="fas fa-phone"></i> +94 342243340 </a>
            <a href="#"> <i class="fas fa-envelope"></i> vishwasanthush666@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Kalutara,Sri LAnaka </a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>Vishwa Santhush</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="script.js"></script>

   
</body>


</html>