  <?php
session_start();

$server="localhost";
$username="root";
$password="";
$database="house";


$conn = new mysqli("localhost", "root", "","house");

 $id=0;
 $Reg_No='';
 $file='';
 //$clientid='';
 $Name='';
if (isset($_POST["submitImage"]))  { 

    $Name = $_POST['Name'];
    $Reg_No=$_POST["Reg_No"];
    $file=$_FILES["file"];
    //$clientid=$_GET["clientid"];

    
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
                    echo "<script>window.location='Agent.php'</script>";
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

 $sql = "SELECT Id FROM clients Where Name = '.$Name.'"; 
$result = mysqli_query($sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    mysqli_query("INSERT INTO agents(Id,Name,Reg_No,images,clientid)VALUES('$clientid','$Name','$Reg_No','$folder','$clientid')");
}else{
    echo "Client ID is invalid!!!";
}

{

$Reg_No=$_POST["Reg_No"];

$sql="SELECT * From agentslist Where Reg_No='.$Reg_No.'";



$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);


if($num<1)
{
	$_SESSION['message']="This is not a valid EARB registration number and name. Please go back and try 
again.";
	$_SESSION['msg_type']="danger";

	header('location:Agent.php');
}
else
{
	$query="INSERT INTO agents(Name,Reg_No,images)VALUES('$Name','$Reg_No','$folder')";
	mysqli_query($conn,$query);


	$_SESSION['message']="Record has been saved";
	$_SESSION['msg_type']="success";


	header('location:upload.php');}}
}?>