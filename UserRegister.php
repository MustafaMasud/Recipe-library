<?php

    require 'register.php';
    $servername = "localhost";
    $username = "root";
    $password = "Spider@333";
    $dbname="myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // set parameters and execute
    $username = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $passRepeat = $_POST['psw-repeat'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
      echo '<script>alert("Invalid email")</script>';
      
    }
    else if ($pass !== $passRepeat){
     
      echo '<script>alert("Passwords did not match")</script>';
    }
    else{
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    
    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO ListMembers (username, email, pass) VALUES ( ?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPass);
    $stmt->execute();

    header("Location: http://localhost/login.php");
    $stmt->close();
    $conn->close();
    }

?>