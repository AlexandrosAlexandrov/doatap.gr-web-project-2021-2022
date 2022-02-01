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

if(!empty($_POST['fname'])){
	$fname = $_POST['fname'];
}else{
	$fname = $_SESSION['fname'];
}

if(!empty($_POST['lname'])){
	$lname = $_POST['lname'];
}else{
	$lname = $_SESSION['lname'];
}

if(!empty($_POST['email'])){
	$email = $_POST['email'];
}else{
	$email = $_SESSION['email'];
}

if(!empty($_POST['password'])){
	$pass = $_POST['password'];
}else{
	$pass = $_SESSION['password'];
}

if(!empty($_POST['DOB'])){
	$dob = $_POST['DOB'];
}else{
	$dob = $_SESSION['DOB'];
}

if(!empty($_POST['phone'])){
	$phone = $_POST['phone'];
}else{
	$phone = $_SESSION['phone'];
}

$sql = "UPDATE user SET First_Name = '$fname', Last_Name = '$lname', Email = '$email', Password = '$pass', DOB = '$dob', Phone = '$phone', Admin = 1 WHERE id = '{$_SESSION['id']}'";

if ($conn->query($sql) === TRUE){
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['password'] = $pass;
    $_SESSION['email'] = $email;
    echo "Records were updated successfully.";
	header("Location: profile.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

header("Location: ../pages/profile.php");

$conn->close();
exit();

?>