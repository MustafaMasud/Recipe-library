<?php

    $servername = "localhost";
    $username = "root";
    $password = "your password";
    $dbname="myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table

    
    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO ListMembers (username, email, pass) VALUES ( ?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $pass);
    
     // set parameters and execute
     $username = $_POST['name'];
     $email = $_POST['email'];
     $pass = $_POST['psw'];
    $stmt->execute();

    header("Location: http://localhost/login.php");
    $stmt->close();
    $conn->close();
?>