<?php
session_start();

$server="localhost";
$username="root";
$password="";
$database="eats";

$conn=mysqli_connect($server,$username,$password,$database);

if (isset($_POST["LOGIN"])) 
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	
	$sql="SELECT *from test where Email=? AND password=?";

	$stmt=$conn->prepare($sql);
	$stmt->bind_param("ss",$Email,$Password);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	session_regenerate_id();
	$_SESSION['username']=$row['First_name'];
	$_SESSION['role']=$row['usertype'];
	session_write_close();

	if ($result->num_rows==1 && $_SESSION['role']=="client") 
	{
		header("location: home.php");
	}
	else if ($result->num_rows==1 && $_SESSION['role']=="admin") 
	{
		header("location:Admin.php");
	}
	else
	{
		//header('location:test.php');
		//$_SESSION['message']="Username or Password is Incorrect!";
		//$_SESSION['msg_type']="danger";
		echo "<script>alert('Email or Password is Incorrect!')</script>";
 		echo "<script>window.location='Login.php'</script>";
	}
}


if (isset($_POST["register"])) 
{
$First_name=$_POST["fname"];
$Second_name=$_POST["sname"];
$Email=$_POST["email"];
$Password=$_POST["password"];
$Phone=$_POST["phone"];
$User_type=$_POST["usertype"];


$sql="SELECT *from test where email='$Email'";

$stmt->execute();

$num=mysqli_num_rows($result);


if($num==1)
{
	$_SESSION['message']="Email already taken";
	$_SESSION['msg_type']="danger";

	header('location:register.php');
}
else
{
	$query="INSERT INTO test(First_name,Second_Name,Email,password,Phone_Number,usertype)VALUES('$First_name','$Second_name','$Email','$Password','$Phone','$User_type')";
	mysqli_query($conn,$query);

	$_SESSION['message']="Record has been saved";
	$_SESSION['msg_type']="success";

	header('location:Login.php');
}


}



?>