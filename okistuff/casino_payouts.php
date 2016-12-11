<?php
    require "connect.php";
    $sql = "Select * from casino";
    $results = $conn->qeury($sql);
      echo $results;
    $conn->close();
?>
