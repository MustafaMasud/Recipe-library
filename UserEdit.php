<?php

    require 'Edit.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // set parameters and execute
    $username = $_POST['editname'];
    $prevName = $_SESSION['username'];
    //prepare and bind
    $stmt = $conn->prepare("UPDATE ListMembers SET username=? WHERE username=?");
    $stmt->bind_param("ss", $username, $prevName);
    $stmt->execute();
    $_SESSION['username'] = $username;
    header("Location: http://localhost/index.php");
    $stmt->close();
    $conn->close();
    

?>