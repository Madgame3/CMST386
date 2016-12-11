<?php
  require 'mariadb_connect.php';

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo "Your information has been saved to our database";
  echo $fname;
  echo $lname;
  echo $winnings;
  "INSERT INTO casino ( "fname", "lname", "winnings") VALUES ("$fname", "$lname", "$winnings")";
 ?>
