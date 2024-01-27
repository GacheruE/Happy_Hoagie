<?php
//session_start();
require_once("connect.php");

 $conn=mysqli_connect("localhost","root","","house");
  
 $id=0;
$update=false;
$listingname='';
$listingprice='';
$listingrooms='';
$listingsize='';
$listingtype='';
$listinglocation='';
$listingdescription='';



 

  if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;


		$result = mysqli_query($conn,"SELECT * FROM listings WHERE id=$id")or die ($conn->error());

    
      $row=$result->fetch_array();
      $listingname=$row['name'];
      $listingprice=$row['price'];
      $folder=$row['images'];
      $listingrooms=$row['rooms'];
      $listingsize=$row['size'];
      $listingtype=$row['type'];
      $listinglocation=$row['location'];
      $listingdescription=$row['description'];
      
      		
	}

 if (isset($_POST['update']))
 {
  $id=$_POST['id'];
  $listingname=$_POST['name'];
  $listingprice=$_POST['price'];
  $folder=$row['images'];
  $listingrooms=$_POST['rooms'];
  $listingsize=$_POST['size'];
  $listingtype=$_POST['type'];
  $listinglocation=$_POST['location'];
  $listingdescription=$_POST['description'];
 
  
  $query="UPDATE  listings SET name='$listingname',price='$listingprice',images='$folder',rooms='$listingrooms',size='$listingsize',type='$listingtype',location='$listinglocation',description='$listingdescription' WHERE id=$id";
  mysqli_query($conn,$query);

    

  echo "<script>alert('Listing Updated')</script>";
    echo "<script>window.location='upload.php'</script>";
}




  

if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$conn->query("DELETE FROM listings WHERE id=$id")or die ($conn->error());


        echo "<script>alert('Product Deleted')</script>";
        echo "<script>window.location='upload.php'</script>";

	}
if (isset($_POST['submitImage'])) { 

  
    $listingname=$_POST["name"];
    $listingprice=$_POST["price"];
    $listingrooms=$_POST["rooms"];
    $listingsize=$_POST["size"];
    $listingtype=$_POST["type"];
    $listinglocation=$_POST["location"];
    $listingdescription=$_POST["description"];
    $file=$_FILES["file"];

    //$count_files = count($_FILES['file']['name']);
     // Looping all images
     for($i=0;$i<10;$i++)
    $filename = $_FILES["file"]["name"]; 
    $fileTmpName=$_FILES["file"]["tmp_name"];
    $fileSize=$_FILES["file"]["size"];
    $fileError=$_FILES["file"]["error"];
    $fileType=$_FILES["file"]["type"];

    $fileExt= explode('.', $filename);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');

    

    if (in_array($fileActualExt, $allowed)) 
    {
      if ($fileError=== 0)
         {
           if ($fileSize < 10000000) 
              {
                $fileNameNew=uniqid('', true).".".$fileActualExt;

                $folder='images/'.$fileNameNew;

                $fileDestination='images/'.$fileNameNew;


                if(move_uploaded_file($fileTmpName, $fileDestination))
                {
                    echo "<script>alert('Uploaded Succesfully')</script>";
                    echo "<script>window.location='upload.php'</script>";
                }else
                {
                    echo "Error";
                }

              }
              else
                  {
                    echo "Your file is too big!";
                  }
        }
        else
        {
          echo "There was an error uploading your file!";
        }
    }
    else
    {
      echo "You cannot upload files of this type!";
    }

    

          

    
        $sql = "INSERT INTO `listings`(`name`,`price`, `images`,`rooms`,`size`, `type`,`location`, `description`)VALUES ('$listingname','$listingprice','$folder','$listingrooms','$listingsize','$listingtype','$listinglocation','$listingdescription')";

        mysqli_query($conn, $sql); 

}
  

  $result = mysqli_query($conn, "SELECT * FROM listings"); 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Upload Listing</title>
<link rel="stylesheet"  href ="css/styles.css"/>

</head>
<body style="background-image:url('https://4.bp.blogspot.com/-17tz__EIujc/VbE_Jz6PnEI/AAAAAAAABgk/uOIbQOuoaxk/s1600/Commercial+Real+Estate.jpgs');
    background-position: center;
    background-size: cover;">

	
      <div class="card" align="center">
        <br/>
		<div class="href" align="right">
		<a href="Homepage.php">Home</a>
      
        <a href="Login.php"><?= $_SESSION['username']?></a>   
		
		 <a href="logout.php">Log OUT</a>
		</div>

  <section class="Add Listing">
       

      
  
  <div >
   <div >
            <div >
              <h1 >Upload Listing</h1>


            </div>
            <div >
             <form action="" method="POST" enctype="multipart/form-data">


      <input type="hidden" name="id" value="<?php echo $id; ?>" >
               


                <div >
                  <input type="text"  name="name"  value="<?php echo $listingname; ?>"   required="true" placeholder="Enter Listing Name" id="listingname" >
                </div>
                <br><br>

                <div class="input-group my-3">
                   <input type="text"  name="price" class="form-control form-control-lg" value="<?php echo $listingprice; ?>" id="listingprice" class="form-control" placeholder="Enter Price" required="true">
                </div>
                <br><br>

                 <div class="input-group my-3">
                   <input type="text"  name="rooms" class="form-control form-control-lg" value="<?php echo $listingrooms; ?>" id="listingrooms" class="form-control" placeholder="Enter Number of Rooms" required="true">
                </div>
                <br><br>

                <div class="input-group my-3">
                   <input type="text"  name="size" class="form-control form-control-lg" value="<?php echo $listingsize; ?>" id="listingsize" class="form-control" placeholder="Enter Sizes" required="true">
                </div>
                <br><br>

                 <div class="input-group my-3">
                   <input type="text"  name="type" class="form-control form-control-lg" value="<?php echo $listingtype; ?>" id="listingtype" class="form-control" placeholder="Enter Type of Listing" required="true">
                </div>
                <br><br>

                <div class="input-group my-3">
                   <input type="text"  name="location" class="form-control form-control-lg" value="<?php echo $listinglocation; ?>" id="listinglocation" class="form-control" placeholder="Enter Location" required="true">
                </div>
                <br><br>

                 <div class="input-group my-3">
                   <input type="text"  name="description" class="form-control form-control-lg" value="<?php echo $listingdescription; ?>" id="listingdescription" class="form-control" placeholder="Enter Description of Listing" required="true">
                </div>
                <br><br>


                <div >
                  <?php
                     if($update==true):
                  ?>

                  <?php else: ?>  
                  <input type="file" name="file" class=" form-control-lg" required="true" id="images" multiple="" >
                  <?php endif;?> 

                </div>
                <br><br>

               
              
                 <?php
        if($update==true):
        ?>
            <button type="submit" name="update"class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>update</button>

              <?php else: ?>  
            <button type="submit" name="submitImage" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Upload</button>
             <?php endif;?>  




              </form>

            </div>


          </div>
        </div>



    </div>
        
    
    </section>

     <section class="viewlisting">

    <?php
if (mysqli_num_rows($result) > 0) {
?>
  <h2>Listings</h2>
  <div class="table-wrapper">
  <table class="fl-table" style="background:white;">
  <thead>
  <tr>
  <th> Image</th>
    <th>Name</th>
    <th> Price</th>
    <th>Rooms</th>
    <th>Size</th>
    <th> Type</th>
    <th> Location</th>
    <th> Description</th>
        
    
    <th colspan="2">Action</th>
  </tr>
</thead>  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><img src="<?php echo $row["images"] ?>" width="130" height="130" alt=""></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["rooms"]; ?></td>
    <td><?php echo $row["size"]; ?></td>
    <td><?php echo $row["type"]; ?></td>
    <td><?php echo $row["location"]; ?></td>
     <td><?php echo $row["description"]; ?></td>
   
   
    
    <td>
      <a href="upload.php?edit=<?php echo $row['id'];?>" class="link-button" >Edit</a> 
      <a href="upload.php?delete=<?php echo $row['id'];?>" class="link-button">Delete</a>
</td>
    
</tr>

<?php
$i++;
}
?>
</table>

</div>
 <?php
}
else{
    echo "No result found";
}

?>
        
    </section>

    



</body>
</html>
