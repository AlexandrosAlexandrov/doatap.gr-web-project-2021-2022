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

$email = $_POST['email'];
$pass = $_POST['password'];


//start a session whenever user logs in
session_start();

if (isset($_POST['Submit'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
}

$sql = "SELECT id, First_Name, Last_Name, Admin FROM user WHERE user.Password = '$pass' AND user.Email = '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION['id'] =  $row["id"];
		$_SESSION['fname'] = $row["First_Name"];
		$_SESSION['lname'] = $row["Last_Name"];
		$_SESSION['admin'] = $row["Admin"];
	}
	if ($_SESSION['admin'] == 0 ) {
		header("Location: ../pages/index_admin.html");
	}
	else{
	header("Location: ../pages/index_signed_in.html");
	}
}
else
	header("Location: ../pages/login_failed.php");

$conn->close();
exit();

?>