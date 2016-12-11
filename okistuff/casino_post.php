<?php

  $db_host = "localhost";
  $db_username = "okistuff";
  $db_pass = "password";
  $db_name = "okistuff";

  @mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to SQL, check your stuff Steve");
  @mysql_select_db("$db_name") or die ("No Database, check your stuff Steve");

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $citizen = htmlspecialchars($_POST['citizen']);
  $ssn = htmlspecialchars($_POST['ssn']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo "Your information has been saved to our database";
  echo $fname <br>;
  echo $lname <br>;
  echo $citizen <br>;
  echo $ssn <br>;
  echo $winnings <br> ;
 ?>
