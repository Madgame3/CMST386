<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <section>
     <?php
       require 'connect.php';
       $name = htmlspecialchars($_POST['name']);
       $email = htmlspecialchars($_POST['email']);
       $comment = htmlspecialchars($_POST['comment']);
       echo "name: ".$name."<br>"."email: ". $email."<br>"."Comment:". $comment."<br>";
       mysqli_close($conn);
      ?>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
