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
$date = $_SESSION['date'];

$sql = "SELECT id FROM form WHERE userid = '$id' AND date = '$date'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION['formid'] =  $row["id"];
	}
}
//session_start();

//$id = $_SESSION['id'];
//$paravolo = $_POST['paravolo'];
//$taftotita = $_POST['id'];
//$dilwsi = $_POST['dilwsi'];
//$sugkatathesi = $_POST['sugkatathesi'];
//$apoluthrio = $_POST['apoluthrio'];
//$ptuxio = $_POST['ptuxio'];
//$panep = $_POST['panep'];
//$math = $_POST['math'];

//$_SESSION['paravolo'] = $paravolo;
//$_SESSION['taftotita'] = $taftotita;
//$_SESSION['dilwsi'] = $dilwsi;
//$_SESSION['sugkatathesi'] = $sugkatathesi;
//$_SESSION['apoluthrio'] = $apoluthrio;
//$_SESSION['ptuxio'] = $ptuxio;
//$_SESSION['panep'] = $panep;
//$_SESSION['math'] = $math;


//$sql = "UPDATE form
//		SET paravolo = '$paravolo', 
//			taftotita = '$taftotita',   
//			dilwsi = '$dilwsi', 
//			sigkatathesi = '$sugkatathesi',
//			lukeio = '$apoluthrio',
//			ptuxio = '$ptuxio', 
//			panep = '$panep', 
//			math = '$math'
//		WHERE userid = '$id' ";

//if ($conn->query($sql) === TRUE) {
//  echo "updated successfully";
  header("Location: ../pages/form3.php");
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
exit();

?>