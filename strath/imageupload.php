<!Doctype html>
<html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

  <script type="text/javascript">

  function delet(id)
  {
    if(confirm("Are you sure you want to delete ?"))
    {
      window.location.href='delete.php?x='+id;
    }
  }

</script>
</html>
<?php 
include('header.php');
extract($_REQUEST);
include'connect.php';

if(isset($submit))
{

  $file=$_FILES['file']['name'];
  $file1=$_FILES['file1']['name'];
  $file2=$_FILES['file2']['name'];
  $file3=$_FILES['file3']['name'];
  
  $query="insert into images values('','$file','$file1','$file2','$file3','$property_id')";  
  mysqli_query($conn,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/properties/".$_FILES['file']['name']); 
  move_uploaded_file($_FILES['file1']['tmp_name'],"images/properties/".$_FILES['file1']['name']); 
  move_uploaded_file($_FILES['file2']['tmp_name'],"images/properties/".$_FILES['file2']['name']); 
  move_uploaded_file($_FILES['file3']['tmp_name'],"images/properties/".$_FILES['file3']['name']); 

   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>';       
}

?>  
    <!-- Header -->
    
    <section>
       
       
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                                
                            </h2>
                            <div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a><?=$_SESSION ['username'] ?> <a href="logout.php">Sign Out<br><br><a href="upload.php">Back</a></span>
    <h2>Add Images</h2>
</div>
</div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">

                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                        <select class="form-control show-tick" name="property_id">
                                            <option disabled selected>--Select Listing Name--</option>
                                            <?php
                                            $sel=mysqli_query($conn,"SELECT * from listings");
                                            while($res=mysqli_fetch_array($sel))
                                            {
                                            ?>

                                            <option value="<?php echo $res['id'];?>"><?php echo $res['name'];?></option>  
                                           
                                           <?php  }  ?>

                                        </select>  


                             
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Upload Image.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file" type="file" multiple />
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Upload Image.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file1" type="file" multiple />
                                </div>
                             
                             </div>

                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Upload Image.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file2" type="file" multiple />
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                     <h3>Click to Upload Image.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file3" type="file" multiple />
                                </div>
                             
                             </div>


                                

                                    

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                             
                                     
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            
           
 
<h2 style="text-align: center;">
                             View Listing Images
                            </h2>
                            
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            <th>Listing.no</th>
                                            <th>Name</th>
                                            <th>Image 1</th>
                                            <th>Image 2</th>
                                            <th>Image 3</th>
                                            <th>Image 4</th> 
                                            <th>Action</th>                                                                                                                            
                                        </tr>
                                    </thead>
                                    <tfoot>


                                        
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;






$query1=mysqli_query($conn,"SELECT * FROM images");

while($res=mysqli_fetch_array($query1))
{

$image_id=$res['property_id'];
$img1=$res['image1'];
$img2=$res['image2'];
$img3=$res['image3'];
$img4=$res['image4'];  

$query=mysqli_query($conn,"SELECT * FROM listings WHERE id='$image_id'");
$res1=mysqli_fetch_array($query);

?>

                                            <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $res1['name'];?></td>
                                            <td><img src="images/properties/<?php echo $img1;?>" width="120"></td>
                                            <td><img src="images/properties/<?php echo $img2;?>" width="120"></td>
                                            <td><img src="images/properties/<?php echo $img3;?>" width="120"></td>
                                            <td><img src="images/properties/<?php echo $img4;?>" width="120"></td>
                                             <td>
    <!--<a class='btn btn-info' href="update_property_image.php?&id=<?php echo $image_id;?>"><span class="glyphicon glyphicon-pencil"></span></a>-->
    

      <a class='btn btn-danger' onclick="delet(<?php echo $image_id;?>);" ><span class="glyphicon glyphicon-remove" style="color:white;"></span></a>
  
    </td>
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <?php include'footer.php';?>