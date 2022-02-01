<?php

// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "";

$database = "sdi1500046";
  
// Creating a connection
$conn = new mysqli($servername, 
            $username, $password, $database);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
} 

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$degree = $_POST['degree'];
$college = $_POST['college'];
$department = $_POST['department'];
$id = $_SESSION['id'];
$form = $_SESSION['formid'];
$date = $_SESSION['date'];

$sql = "UPDATE form
		SET firstname = '$fname', 
			lastname = '$lname',   
			deg_type = '$degree', 
			college = '$college',
			department = '$department'
		WHERE userid = '$id' AND id = '$form' AND date = '$date'";

if ($conn->query($sql) === TRUE) {
  echo "updated successfully";
  header("Location: ../pages/form4.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();

?>