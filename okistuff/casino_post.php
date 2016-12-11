<?php

  $db_host = "localhost";
  $db_username = "root";
  $db_pass = "!!NJP123!!NJP123";
  $db_name = "okistuff";

  $conn = new mysqli("$db_host","$db_username","$db_pass", "$dbname");
  if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
  else{
      echo "Connect to Database was Successful" . "<br>";
  }

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo "<br>" . $fname . "<br>" . $lname ."<br>". $winnings;
  echo "<br>" . '<a href="../okistuff/casino.html">Casino</a>' . '<br>';

  $sql = "INSERT INTO casino (fname, lname, winnings) VALUES ('Stephen', 'harrington', 10)";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error . $sql->error;
  }
?>
