<?php 

require "post.php";

$servername = "localhost";
$username = "root";
$password = ""; //change
$dbname="mydb"; //change

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql = "CREATE TABLE ListPost (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     dish VARCHAR(50) NOT NULL,
//     ingred text NOT NULL,
//     steps text NOT NULL,
//     post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
  
    // if ($conn->query($sql) === TRUE) {
    //   echo "Table Members created successfully";
    // } else {
    //   echo "Error creating table: " . $conn->error;
    // }

   
    $stmt = $conn->prepare("INSERT INTO ListPost (username, dish, ingred, steps)
     VALUES (?,?,?,?)");
    $stmt->bind_param('ssss', $username, $dish, $ingred, $steps);

    $username = $_SESSION['username'];
    $dish = $_POST['dish'];
    $ingred = $_POST['ingred'];
    $steps = $_POST['steps'];

    $stmt->execute();
    header("Location: index.php");
    $stmt->close();
    $conn->close();

?>