<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "house";


$conn = new mysqli("localhost", "root", "", "house");

function getData($sql)
{
	$conn = new mysqli("localhost", "root", "", "house");
	if ($result = $conn->query($sql)) {
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		} else {
			return FALSE;
		}
	} else {
		return "Error: " . $conn->error;
	}
}

if (isset($_POST["LOGIN"])) {
	$Name = $_POST["Name"];
	$password = $_POST["password"];
	$Reg_No = $_POST["Reg_No"];

	$sqlAgent="SELECT * FROM agentslist WHERE Name='$Name' AND Reg_No='$Reg_No'";
 
	if ($res = getData($sqlAgent)) {
		echo "<script>alert('Incorrect Username or Password. Please try again')</script>";
		
	} else {
		echo $res;
	}
    
	$sqlClient = "SELECT * FROM clients WHERE Name='$Name' AND password='$password'";

	if ($result = getData($sqlClient)) {
		echo "<script>alert('You are not registered to the EARB gazette. Please register as client')</script>";
	} else {
		echo $result;
	}
       session_regenerate_id();
	$_SESSION['username'] = $result['Name'];
	$_SESSION['role'] = $result['usertype'];
	session_write_close();

	if ($res = getData($sqlAgent)&& $result = getData($sqlClient) )
	header('location:upload.php');

	//$_SESSION['message']="You are not registered to the EARB gazette. Please register as client.";
	//$_SESSION['msg_type']="danger";
		echo "<script>window.location='Logins.php'</script>";
}
