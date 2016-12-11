<?php
  $db_host = "localhost";
  $db_username = "okistuff";
  $db_pass = "password";
  $db_name = "okistuff";

  $con = new mysqli("$db_host","$db_username","$db_pass", "$dbname");
  if($con->connect_error){
    die("Connection failed:" . $con->connect_error);
  }
  else{
      echo "Connect to Database was Successful";
  }
 ?>
