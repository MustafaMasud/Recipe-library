<?php 

require "login.php";

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

    $email = $_POST['email'];
    $pass = $_POST['psw'];

    //prepare and bind
    $stmt = $conn->prepare("SELECT username, email, pass FROM ListMembers WHERE email=? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt -> store_result();
    $stmt -> bind_result($usernameResult, $emailResult, $passResult);
    $stmt -> fetch();
    $numberofrows = $stmt->num_rows;

 
if($numberofrows >=1 && $emailResult == $email && password_verify($pass, $passResult))  {
    session_start();
    $_SESSION['Logged'] = 1;
    $_SESSION['email'] = $emailResult;
    $_SESSION['username'] = $usernameResult;
    header("Location: http://localhost/index.php");
    exit();
    }
        
else {
    echo '<script>alert("Invalid email/password combination")</script>';
    }

    $stmt->close();
    $conn->close();

?>