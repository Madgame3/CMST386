<?php
  $db_host = "localhost";
  $db_username = "okistuff";
  $db_pass = "password";
  $db_name = "okistuff";

  @mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to SQL, check your stuff Steve");
  @mysql_select_db("$db_name") or die ("No Database, check your stuff Steve");

  echo "Successful Connection";
 ?>
