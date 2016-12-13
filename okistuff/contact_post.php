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
       $sql = "INSERT INTO comments (name, email, comment) VALUES ($name, $email, $comment)";
       if ($conn->query($sql) === TRUE) {
           echo "<h1>New record created successfully</h1>";
           echo "<table class='oki_table'>
           <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Comment</th>
           </tr>";
           echo "<tr>";
           echo "<td>" . $name . "</td>";
           echo "<td>" . $email . "</td>";
           echo "<td>" . $comment . "</td>";
           echo "</tr>";
           echo "</table>";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error . $sql->error;
       }
      mysqli_close($conn);
      ?>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
