<?php 

include'connect.php';

$id=$_GET['x'];

$query2=mysqli_query($conn,"SELECT * FROM images WHERE property_id='$id'");
$image1=mysqli_fetch_array($query2);

$img1=$image1['image1'];
$img2=$image1['image2'];
$img3=$image1['image3'];
$img4=$image1['image4'];

unlink("images/properties/$img1");
unlink("images/properties/$img2");
unlink("images/properties/$img3");
unlink("images/properties/$img4");


mysqli_query($conn,"DELETE FROM images WHERE property_id='$id'");
echo"<script>window.location.href='imageupload.php';</script>";		
	

?>