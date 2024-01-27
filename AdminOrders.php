<?php
session_start();
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
              <th>id</th>;
                <th>item_id</th>;
               <th>name</th>;
              <th>price</th>;
               <th>quantity</th>;
     			<th></th>;
			<th></th>;
            </tr>
</body>
            <?php
			$conn = new mysqli("localhost", "root", "","eats");

              
 

$sql = "SELECT * FROM food_orders";

              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                  <tr align="center">
                    <form name="update" method="post" action="../query/updateUser.php">
                      <td><input type="text" value="<?php echo $row['ClientName']; ?>" name="id" required /></td>
                      <td><input type="text" value="<?php echo $row['item_id']; ?>" name="item_id" required /></td>
                      <td><input type="text" value="<?php echo $row['name']; ?>" name="name" required /></td>
                      <td><input type="text" value="<?php echo $row['price']; ?>" name="price" required /></td>
					  <td><input type="text" value="<?php echo $row['Total']; ?>" name="quantity" required /></td>
                      
                     
                    </form>
                    <td>
                      <form name="delete" method="post" action="remove.php">
                        <input type="hidden" value="<?php echo $row['item_id']; ?>" name="item_id" required />
                        <button type="submit" class="icon-btn">Delete</button>
                      </form>
                    </td>
                  </tr>
           
            <?php
              }}else {
                echo "No orders yet";
              }

              $conn->close();
            ?>
          </tbody>
        </table>