<?php
  $db_host = "localhost";
  $db_username = "okistuff";
  $db_pass = "password";
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
  echo "<br>" . '<a href="../okistuff/casino.html">Casino</a>';

  $sql = "INSERT INTO casino VALUES ("$fname", "$lname", "$winnings")";
  mysqli_query($sql);
?>
