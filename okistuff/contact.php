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
     <div class="flex-row">
       <h2>Contact Us</h2>
       <p>We're Kind of lonely so we love it when we get to hear you're feedback</p>
       <div>
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
         Name: <br>
         <input type="text" name="fname" required><br><br>
         Email address:<br>
         <input type="text" name="email" required><br><br>
         Question/Comments<br>
         <textarea name="question" rows="10" cols="30" required></textarea><br><br>
         <button class="orange-button" type="submit">Submit</button>
       </form>
     </div>
   </article>
 </body>
</html>
