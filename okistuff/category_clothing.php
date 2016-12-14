<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <section id="index-page">
     <h1>Categories</h1>
     <hr>
     <div id="item-flex-box">
       <div class="category-box"><a href="#">Clothing & Accessories
         <img src="./images/clothing.jpg" alt="clothing">
       </a></div>
       <div class="category-box"><a href="#">Crafts & Tools
         <img src="./images/tools.jpg" alt="tools">
       </a></div>
       <div class="category-box"><a href="#">Electronics
         <img src="./images/electronics.jpg" alt="electronics">
       </a></div>
       <div class="category-box"><a href="#">Hobbies & Sports
         <img src="./images/sports.jpg" alt="sports">
       </a></div>
       <div class="category-box"><a href="#">Home & Living
         <img src="./images/home.jpg" alt="home">
       </a></div>
       <div class="category-box"><a href="#">Kids & Baby
       <img src="./images/baby.jpg" alt="baby"></a></div>
       <div class="category-box"><a href="#">Pets
         <img src="./images/pet.jpg" alt="pet">
       </a></div>
       <div class="category-box"><a href="#">Business & Services
         <img src="./images/business.jpg" alt="business">
       </a></div>
       <div class="category-box"><a href="#">Vehicles
       <img src="./images/vehicles.jpg" alt="car"></a></div>
     </div>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
