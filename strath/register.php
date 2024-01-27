<!Doctype html>
<html lang="en">
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include'header.php';?>
<?php include_once 'connect.php'; ?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

                <form action="connect.php" method="post">
                </div>
                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Enter Full Name" name="Name"  class="form-control" required>
                </div>

                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="email" placeholder=" Enter Email" name="Email"  class="form-control" required>
                </div>

                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Phone Number" name="Phone"  class="form-control" required>
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
               
                 
                  
               
                <label for="usertype" style="font-weight: bold;">Select User Type:</label>
                <input type="radio"  name="usertype"  value="client" class="custom-radio" required>&nbsp;Client |
                <input type="radio"  name="usertype"  value="agent" class="custom-radio" required>&nbsp;Registered Agent 
                
                </div>
               


     <button type="submit" name="register" class="btn btn-primary">Submit</button>
     
      <p style="color: #000000;">Already Registered?<a href="login.php">Login</a></p>
                
    </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>