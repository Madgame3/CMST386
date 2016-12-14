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
     <h1>New Items</h1>
     <hr>
    <div id="item-flex-box">
      <?php
        require 'connect.php';
        $sql = "select title,category,description,contact_name,phone,price,date from items order by date desc limit 30";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "<div class='item-box'>";
            echo "title ".$row['title'];
            echo "category: ".$row['category'];
            echo "</div>";

          }
        }
        mysqli_close($conn);
       ?>

    </div>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
