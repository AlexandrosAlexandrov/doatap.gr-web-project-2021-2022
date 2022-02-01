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

date_default_timezone_set('Greece/Athens');
$date = date("j/m/Y");
$_SESSION['date'] = $date;
$id = $_SESSION['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$degree = $_POST['degree'];
$college = $_POST['college'];
$department = $_POST['department'];

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['degree'] = $degree;
$_SESSION['college'] = $college;
$_SESSION['department'] = $department;

$sql = "INSERT INTO form (date, userid, firstname, lastname, deg_type, college, department, final)
		VALUES ('$date' ,'$id' ,'$fname', '$lname', '$degree', '$college', '$department', 1)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: ../pages/form2.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();

?>