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
$id = $_POST['formid'];


$sql = "SELECT * FROM form WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION['view_form_id'] = $row["id"];
		$_SESSION['view_form_date'] = $row["date"];
		$_SESSION['view_form_fname'] = $row["firstname"];
		$_SESSION['view_form_lname'] = $row["lastname"];
		$_SESSION['view_form_deg'] = $row["deg_type"];
		$_SESSION['view_form_college'] = $row["college"];
		$_SESSION['view_form_dep'] = $row["department"];
	}
		header("Location: ../pages/view_form_admin.php");
	}

$conn->close();
exit();

?>