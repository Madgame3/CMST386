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
        $sql = "select title,price,date,image from items order by date desc limit 16";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            $image = base64_encode($row['image']);
            $date1 = time();
            $date2 = strtotime($row['date']);
            $hours = function dateDifference($date1 , $date2 , $differenceFormat = '%h' ){
                $datetime1 = date_create($date1);
                $datetime2 = date_create($date2);
                $interval = date_diff($datetime1, $datetime2);
                return $interval->format($differenceFormat);
              }
            if($image == NULL){
                Echo "THIS ISN'T GOING TO Work";
              }
            else{
              echo "<div class='item-box'>";
              echo "<div class='item-box-title'>".$row['title']."</div>";
              echo "<div class='item-box-image'>";
              echo "<img src='data:image/png;base64,". $image ."' alt='item for sale'/>"."</div>";
              echo "<div class='item-box-time'><p>".$row['price']." - "."Submitted:".$hours."</p></div>";
              echo "</div>";
            }
            //"<img src='data:image/jpeg;base64',". base64_encode(stream_get_contents($row['image']))."/>";
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
