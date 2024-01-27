<?php
  include"connect.php";

// SQL query to select data from database
$sql = " SELECT * FROM agents ";
$result = mysqli_query($conn,$sql);

?>
<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Agents</span>
    <h2>Agents</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
      <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/a.jpg" class="img-responsive"  alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>Janet Wangui</h4><p>RE/MAX Kenya agency.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">janetwangui@yahoo.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (07) 01 523 229</div>
      </div>
      <!-- agents -->
      
       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/b.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>Christopher Owuor</h4><p>Azizi Realtors</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">chrisowuor@yahoo.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (07) 92 337 540</div>
      </div>
      <!-- agents -->
      

       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/c.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>Alex Somoire</h4><p>Pam Golding Properties</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">alexs@yahoo.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (07) 11 194 824</div>
      </div>
      <!-- agents -->
      

       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/d.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>Susan Moraa</h4><p>Hass Consult Ltd.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">susanmoraa@yahoo.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (07) 23 842 212</div>
      </div>
      <!-- agents -->
      
     
  </div>
</div>


</div>
</div>

<?php include'footer.php';?>