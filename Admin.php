<?php
session_start();
$conn = new mysqli("localhost", "root", "","eats");
?>


<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="style.css">
   </head>
<body style="background-image:url('https://w7.pngwing.com/pngs/11/357/png-transparent-taco-mexican-cuisine-salsa-coleslaw-fajita-shrimps-food-animals-seafood.png');
    background-position: center;
    background-size: cover;">

		<div class="href" align="right">
		<a href="Admin.php">Home</a>
      
        <a href="adminprofiledetails.php"><?= $_SESSION['username']?></a>
    <a href="AdminOrders.php">Orders</a>
    <a href="menu.php">Admin Menu</a>
     <a href="logout.php">Log OUT</a>
		</div>
<table>
          <body>
            <tr>
              <th>clients_id</th>;
                <th>First Name</th>;
               <th>Second Name</th>;
              <th>Email</th>;
               <th>Password</th>;
                <th>Phone</th>;
                <th>User Type</th>;
                <th>Action</th>
                <th>Action</th>
				
            </tr>
</body>
            <?php
		
              
 

$sql = "SELECT * FROM test";

              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                  <tr align="center">
                    <form name="update" method="post" action="../query/updateUser.php">
                      <td><input type="text" value="<?php echo $row['id']; ?>" name="ID" required /></td>
                      <td><input type="text" value="<?php echo $row['First_name']; ?>" name="name" required /></td>
                      <td><input type="text" value="<?php echo $row['Second_Name']; ?>" name="name" required /></td>
                      <td><input type="text" value="<?php echo $row['Email']; ?>" name="pwd" required /></td>
					  <td><input type="text" value="<?php echo $row['password']; ?>" name="id" required /></td>
                      <td><input type="text" value="<?php echo $row['Phone_Number']; ?>" name="tel" required /></td>
                      <td><input type="text" value="<?php echo $row['usertype']; ?>" name="gender" required /></td>
                      <td><button type="submit" class="icon-btn">Update</button></td>
                    </form>
                    <td>
                      <form name="delete" method="post" action="remove.php">
                        <input type="hidden" value="<?php echo $row['client_id']; ?>" name="ID" required />
                        <button type="submit" class="icon-btn">Delete</button>
                      </form>
                    </td>
                  </tr>
           
            <?php
              }}else {
                echo "No customers yet";
              }

              $conn->close();
            ?>
          </tbody>
        </table>