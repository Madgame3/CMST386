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
      echo "Connect to Database was Successful";
  }
 ?>
