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

$id = $_SESSION['id'];
$form = $_SESSION['formid'];
$date = $_SESSION['date'];

$sql = "UPDATE form
		SET final = 0 ,
			status = 'Τρέχουσα',
			stage = 'Έλεγχος'
		WHERE userid = '$id' AND id = '$form' AND date = '$date'";

if ($conn->query($sql) === TRUE) {
  echo "updated successfully";
  header("Location: ../pages/form_success.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();

?>