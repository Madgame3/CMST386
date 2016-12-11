<?php
  $conn = new mysqli("$db_host","$db_username","$db_pass", "$dbname");

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo "<br>" . $fname . "<br>" . $lname ."<br>". $winnings;
  echo "<br>" . '<a href="../okistuff/casino.html">Casino</a>';

  $sql = "INSERT INTO casino (fname, lname, winnings) VALUES ($fname, $lname, $winnings)";
  mysqli_query($sql, $conn);
  mysqli_close($conn);
?>
