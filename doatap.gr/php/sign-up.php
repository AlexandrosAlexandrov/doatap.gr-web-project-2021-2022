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
$email = $_POST['email'];
$pass = $_POST['password'];
$dob = $_POST['DOB'];
$phone = $_POST['phone'];

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['password'] = $pass;
$_SESSION['email'] = $email;

$sql = "INSERT INTO user (First_Name, Last_Name, Email, Password, DOB, Phone, Admin)
		VALUES ('$fname', '$lname', '$email', '$pass', '$dob', '$phone', 1)";

if ($conn->query($sql) === TRUE) {
	$sql = "SELECT id, First_Name, Last_Name, Admin FROM user WHERE user.Password = '$pass' AND user.Email = '$email' ";
	$result = $conn->query($sql);
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION['id'] =  $row["id"];
		
	}

  echo "New record created successfully";
  header("Location: ../pages/index_signed_in.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();

?>