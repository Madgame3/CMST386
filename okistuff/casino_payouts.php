<?php
    require "connect.php";
    $sql = "select fname, lname, winnings from casino";
    $result = mysqli_query($conn,"SELECT * FROM casino");

  echo "<table border='1'>
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Winnings</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['winnings'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
  mysqli_close($conn);
?>
