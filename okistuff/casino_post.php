<?php
  require 'mariadb_connect.php';

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo "<br>" . $fname . "<br>" . $lname ."<br>". $winnings;
  echo "<a href="../okistuff/casino.html">Casino</a>";

  $sql = "INSERT INTO casino (fname, lname, winnings) VALUES ($fname, $lname, $winnings)";
?>
