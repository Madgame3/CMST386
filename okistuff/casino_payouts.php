<?php
    require "connect.php";
    $sql = "Select * from casino";
    $results = $conn->query($sql);
      echo $results;
?>
