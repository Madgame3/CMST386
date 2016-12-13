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
     <div>
       <h1>Contacting Us</h1>
       <p>We hope your expierence has been a positive one, but if it hasn't please let us know in the form below.</p>
     </div>
     <div class="flex-row">
       <div id="contact-reasons">
         <strong>Top 5 Things</strong>
         <ol>
           <li>Why are you so Awesome?</li>
           <li>How can I be more like you?</li>
           <li>OkiStuff rocks!!</li>
           <li>Super Awesome!</li>
           <li>Literally nothing works on this stupid site</li>
         </ol>
       </div>
       <form id="contact-us" action="./contact_post.php" method="post">
         <fieldset>
         Name: <br>
         <input type="text" name="fname" required><br>
         Email address:<br>
         <input type="text" name="email" required><br>
         Question/Comments<br>
         <textarea name="question" rows="10" cols="30" required></textarea><br>
         <button class="orange-button" type="submit">Submit</button>
        </fieldset>
       </form>
     </div>
   </article>
 </body>
</html>
