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

if(isset($_POST['deny'])){
	$sql = "UPDATE form
			SET status = 'Απορρίφθηκε' , 
				stage = 'Τελικό στάδιο'
			WHERE id = '$id' ";
			
	if ($conn->query($sql) === TRUE){
		header("Location: ../pages/forms_admin.php");
	}
	else{
		echo "fail";
	}
}
else{
	$sql = "UPDATE form
			SET status = 'Εγκρίθηκε' , 
				stage = 'Τελικό στάδιο'
			WHERE id = '$id' ";
	if ($conn->query($sql) === TRUE){
		header("Location: ../pages/form_final.php");
	}
	else{
		echo "fail";
	}	
}
$conn->close();
exit();

?>