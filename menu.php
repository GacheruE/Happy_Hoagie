<?php
session_start();


 $conn=mysqli_connect("localhost","root","","eats");
  
 $id=0;
$update=false;

$foodname='';
$foodprice='';



 

  if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;


		$result = mysqli_query($conn,"SELECT * FROM food_items WHERE id=$id")or die ($conn->error());

    
      $row=$result->fetch_array();
      $foodname=$row['name'];
      $foodprice=$row['price'];
      
      # code...
		

		
	}

 if (isset($_POST['update']))
 {
  $id=$_POST['id'];
  $foodname=$_POST['fooditem'];
  $foodprice=$_POST['price'];
 
  
  $query="UPDATE  food_items SET name='$foodname',price='$foodprice' WHERE id=$id";
  mysqli_query($conn,$query);

    

  echo "<script>alert('Product Updated')</script>";
    echo "<script>window.location='menu.php'</script>";
}




  

if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$conn->query("DELETE FROM food_items WHERE id=$id")or die ($conn->error());


        echo "<script>alert('Product Deleted')</script>";
        echo "<script>window.location='menu.php'</script>";

	}
if (isset($_POST['submitImage'])) { 

  
    $food_name=$_POST["fooditem"];
    $file=$_FILES["file"];
    $food_price=$_POST["price"];


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
                    echo "<script>window.location='menu.php'</script>";
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

    

          

    
        $sql = "INSERT INTO `food_items`(`name`,`price`, `images`)VALUES ('$food_name','$food_price','$folder')";

        mysqli_query($conn, $sql); 

}
  

  $result = mysqli_query($conn, "SELECT * FROM food_items"); 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
<link rel="stylesheet"  href ="css/styles.css"/>

</head>
<body style="background-image:url('https://w7.pngwing.com/pngs/11/357/png-transparent-taco-mexican-cuisine-salsa-coleslaw-fajita-shrimps-food-animals-seafood.png');
    background-position: center;
    background-size: cover;">

	
      <div class="card" align="center">
        <br/>
		<div class="href" align="right">
		<a href="Admin.php">Home</a>
      
        <a href="adminprofiledetails.php"><?= $_SESSION['username']?></a>
		<a href="AdminOrders.php">Orders</a>
		<a href="menu.php">Admin Menu</a>
		 <a href="logout.php">Log OUT</a>
		</div>

  <section class="Add Food">
       

      
  
  <div >
   <div >
            <div >
              <h1 >upload image</h1>


            </div>
            <div >
             <form action="" method="POST" enctype="multipart/form-data">


      <input type="hidden" name="id" value="<?php echo $id; ?>" >
               


                <div >
                  

                  <input type="text"  name="fooditem"  value="<?php echo $foodname; ?>"   required="true" placeholder="Enter food name" id="fooditem" >

                </div>
                <br><br>





                <div >
                  <?php
                     if($update==true):
                  ?>

                  <?php else: ?>  
                  <input type="file" name="file" class=" form-control-lg" required="true" id="foodimage" >
                  <?php endif;?> 

                </div>
                <br><br>

               




                <div class="input-group my-3">

                   <input type="number"  name="price" class="form-control form-control-lg" value="<?php echo $foodprice; ?>" id="foodprice" class="form-control" placeholder="Enter Price" required="true">

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

     <section class="viewfood">

    <?php
if (mysqli_num_rows($result) > 0) {
?>
  <h2>Products</h2>
  <div class="table-wrapper">
  <table class="fl-table" style="background:white;">
  <thead>
  <tr>
  <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Price</th>
    
    
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
   
    
    <td>
      <a href="menu.php?edit=<?php echo $row['id'];?>" class="link-button" >Edit</a> 
      <a href="menu.php?delete=<?php echo $row['id'];?>" class="link-button">Delete</a>
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




