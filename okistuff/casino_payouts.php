<?php
    require "connect.php";
    $sql = "Select * from casino";
    $results = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["fname"]. " - Last Name: " . $row["lname"]. "- Winnings: " . $row["winnings"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
