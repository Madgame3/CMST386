<?php
  require 'mariadb_connect.php';

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo $fname . $Lname . $winnings;
  $sql = "INSERT INTO casino VALUES ("$fname", "$lname", "$winnings")";


 ?>
