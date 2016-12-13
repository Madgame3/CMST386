<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <article>
     <form id="contact-us" action="./contact_post.php" method="post">
       <fieldset>
       <legend>Contact Us</legend>
       First Name: <br>
       <input type="text" name="fname" required><br><br>
       Last Name: <br>
       <input type="text" name="lname" required><br><br>
       Home Phone:<br>
       <input type="text" name="homephone"><br><br>
       Cell Phone:<br>
       <input type="text" name="cellphone"><br><br>
       Email address:<br>
       <input type="text" name="email" required><br><br>
       Question/Comments<br>
       <textarea name="question" rows="10" cols="30" required></textarea><br><br>
       <button class="orange-button" type="submit">Submit</button>
       </fieldset>
     </form>
   </article>
 </body>
</html>
