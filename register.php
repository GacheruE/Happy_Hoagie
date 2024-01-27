<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="styleregister.css">


    <!-- Bootstrap CSS -->
    <link rel="icon" href="c:\Users\nyang\Pictures\Logo1.png" type="image/x-icon"> 
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    
<?php include_once 'connection.php'; ?>
    <?php

    if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION["msg_type"]?>">

            <?php
                echo $_SESSION["message"];
                unset($_SESSION["message"]);

            ?>
        </div>
    <?php endif ?>



<div class="container">
    	<div class="login-box">
    	<div class="row">
    		<div class="login-lefti">
    			<h2>Register</h2>
    			<form action="connection.php" method="post">

    			<div class="form-group">
    			<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="First Name" name="fname"  class="form-control" required>
				
				</div>
                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Second Name" name="sname"  class="form-control" required>
                
                </div>
                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="email" placeholder=" Email" name="email"  class="form-control" required>
                
                </div>
                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Phone Number" name="phone"  class="form-control" required>
                
                </div>

				<div class="form-group">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" placeholder="Password" name="password" id="myInput"   class="form-control" required>
					<input type="checkbox"   
					onclick="myFunction()">

					<script>
						
						function myFunction(){
							var x=
							document.getElementById("myInput");
							if(x.type ==="password")
							{
								x.type="text";
							}
							else
							{
								x.type="password";
							}
						}
					</script>
				</div>
                 <div class="form-group lead">
                <label for="usertype" style="font-weight: bold;">Select User Type:</label>
                <input type="radio"  name="usertype"  value="client" class="custom-radio" required>&nbsp;Client |
                <input type="radio"  name="usertype"  value="admin" class="custom-radio" required>&nbsp;Admin 
                
                </div>
               
				
				<button type="submit" name="register" class="btn btn-primary">Submit</button>
    			
    			<p style="color: #fff;">Already Registered?<a href="Login.php">Login</a></p>
    			
    			</form>
    		</div>	



    			


    	</div>



    	</div>
    </div>

</body>
</html>