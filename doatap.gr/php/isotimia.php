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

$id = $_SESSION['view_form_id'];
$college = $_POST['college'];


$sql = "UPDATE form 
		SET isotimia = '$college'
		WHERE id = '$id' ";
		
	if ($conn->query($sql) === TRUE){
		header("Location: ../pages/forms_admin.php");
	}
	else{
		echo "fail";
	}

$conn->close();
exit();

?>