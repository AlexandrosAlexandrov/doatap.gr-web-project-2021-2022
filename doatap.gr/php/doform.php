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


//start a session whenever user logs in
session_start();

if (isset($_SESSION['id' != NULL])) {
	header("Location: ../pages/form.php");
}
else {
	header("Location: ../pages/login_form.php");
}

?>