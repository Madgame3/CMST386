<?php
    require "connect.php";
    //form variables
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $winnings = htmlspecialchars($_POST['winnings']);

    $sql = "INSERT INTO casino (fname, lname, winnings) VALUES ('$fname', '$lname', '$winnings')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
    }
        echo "Error: " . $sql . "<br>" . $conn->error . $sql->error;
?>
