<!Doctype html>
<html lang="en">
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include'header.php';?>
<?php include_once 'RegisterAgent.php'; ?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Register</span>
    <h2>Agent Authentication</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

                <form action="RegisterAgent.php" method="post" enctype="multipart/form-data">
                </div>
                <input type="hidden" name="clientid" value="Id"/>
                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder=" Enter Name" name="Name"  class="form-control" required>
                </div>
                <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="number" placeholder=" Enter Registration Number" name="Reg_No"  class="form-control" required>
                </div>
                
                <div >
                  <label>Upload Your Image
                  <input type="file" name="file" required>
                  </label>

                </div>
                <br><br>
                


      <button type="submit" name="register" class="btn btn-primary">Submit</button> 
    
            <button type="submit" name="submitImage" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Upload</button>
               

      
                
    </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>