<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="client")
{
  header("location:Login.php");
}


?>


<!DOCTYPE html>
<html>
   <head>
        <meta charset = "utf-8">
		<title>HomePage</title>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="c:\Users\nyang\Pictures\Logo1.png" type="image/x-icon">
	</head>
	<body class="three" >
	
	   
	<div class="align">
  <div class="navigation">
  <img src="c:\Users\nyang\images\Logo1.png" alt="Food Paradise" width="130" height="120"> 
  <div class="right"><a href="HomePage.php">Home</a>
  <a href="profiledetails.php"><?= $_SESSION['username']?></a>
  <a href="logout.php">Log Out</a></div>
  </div>
  <div class="h1">
		<h1>Welcome to<span style="color:yellow"> Happy Hoagie</span></h1>
		</div>
  <div class="image">
  <h4>Food Paradise</h4>
  <p class="tag">Ready to get hoagied!<br><br>
  Do you enjoy great food, spectacular ambience and the most potent drinks in town? Then come on down and you won't be disappointed.</p><br><br>
  	
	 <a href="OrderPage.php" class="buttons">Order Now</a>
	</div>
	
	<h5>About HAPPY HOAGIE</h5>
	<p class="benefit">Happy Hoagie is a family owned restaurant aimed at bringing the best to all it's customers.<br><br>
	Our ingredients are sourced from certified organic farmers to give our customers a quality experience.<br><br>
	At Happy Hoagie we show you that healthy can also be tasty and affordable.</p>
	
	<h6>Customer Reviews<h6>
	</div>
	
	<div class="rev">
	<img src="c:\Users\nyang\Pictures\eli.png" alt="Eli M." width="100" height="100"> 
	<p class="people"><b>Eli M.</b><br><br>"Love the place. If you're looking for a hidden gem for good food. This is it!!"<br><br></p>
	</div>
	<img src="c:\Users\nyang\Pictures\Ben.png" alt="Ben C." width="100" height="100">
	<p class="person"><b>Ben C.<br><br></b>"The menu has enough options for a variety of preferences, and each dish was excellently prepared and presented. The drinks were great, too!"<br><br></p>
    </div>
	<div class="table">
	<table>
	
			         <tr>
					      <b><th>Happy Hoagie</th>
						  <th>Social</th>
						  <th>Contact Information</th><b>
					 </tr>
					 <tr>
					     <td><a href="HomePage.php">Home</a></td>
						  <td>Instagram</td>
						  <td>+254788949598</td>
	                 </tr>
					 <tr>
					      <td><a href="Login.php">Login</a></td>
						  <td>Twitter</td>
						  <td>happyhoagie@gmail.com</td>
					 </tr>
					 <tr>
					      <td><a href="SignUp.php">Registration<a></td>
						  <td>Facebook</td>
						  <td>Open Daily<br><br>7:30am - 8:30pm</td>
	                 </tr>
			  </table>
			 </div>
	<div id="footer">
		         <p>Happy Hoagie © 2021</p>
		  </div>
		  
	
	
	</body>
	</html>





