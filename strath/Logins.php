<!Doctype html>
<html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 


<?php include'header.php';?>
<?php include_once 'agentconnect.php'; ?>
<?php

    if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION["msg_type"]?>">

            <?php
                echo $_SESSION["message"];
                unset($_SESSION["message"]);

            ?>
        </div>
    <?php endif ?>

 <!-- <div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"> -->
      <div class="row"> 
        <div class="col-sm-6 login">
        <h4>Login</h4>
          
            <form action="agentconnect.php" method="post">
        <div class="form-group">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" class="form-control" name="Name" placeholder="Enter name">
        </div>
        <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="number" placeholder=" Enter Registration Number" name="Reg_No"  class="form-control" required>
                </div>
        <div class="form-group">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" placeholder="Enter password" name="password" id="myInput"   class="form-control" required>
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
        <button type="submit" name="LOGIN" class="btn btn-primary">Login</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php include'footer.php';?>
