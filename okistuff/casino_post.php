<?php
  require 'mariadb_connect.php';

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo $fname . $lname . $winnings;

  $sql = "INSERT INTO casino (fname, lname, winnings) VALUES ($fname, $lname, $winnings)";
?>
