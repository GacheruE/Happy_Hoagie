<?php 
session_start();


require_once("component.php");


$conn = mysqli_connect("localhost", "root", "", "eats");

if (isset($_POST['remove']))
 {
	if ($_GET['action']=='remove') 
	{
		foreach ($_SESSION['cart'] as $key => $value) 
		{
			if ($value["product_id"]==$_GET['id'])
			 {
				unset($_SESSION['cart'][$key]);
				

			}
		}
	}
}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="../js/all.js"></script>
</head>
<body style="background-image:url('https://w7.pngwing.com/pngs/11/357/png-transparent-taco-mexican-cuisine-salsa-coleslaw-fajita-shrimps-food-animals-seafood.png');
    background-position: center;
    background-size: cover;">

<header id="header">

<nav class="navbar navbar-expand-lg navbar-dark " style="background: #37ac86ed;">
    <h3 >
        <a href="home.php" class="text-capitalize" style="text-decoration: none;">home</a>
        </h3>
    <a href="OrderPage.php" class="navbar-brand">
    <h3 class="px-5">
        <i class="fa fa-shopping-basket"></i> Shopping Cart
    </h3>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="mr-auto"></div>
        <div class="navbar-nav">
            <a href="carts.php" class="nav-item nav-link active">
                <h5 class="px-5 cart">
                    <i class="fa fa-shopping-cart"></i>Cart
                    <?php 
                        if (isset($_SESSION['cart'])) 
                        {
                            $count=count($_SESSION['cart']);
                           echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\"> $count </span>";
                        }else
                            {
                                echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\"> 0 </span>";
                            }


                     ?>

                </h5>

            </a>


        </div>
    </div>
</nav>



</header>

 <div class="container-fluid">
 	
 	<div class="row pc-5">
 		<div class="col-md-7">
 			<div class="shopping-cart">
 				<h6 class="text-capitalize" style="color: blue; font-size: 30px;"><?=  $_SESSION ['username'] ?>'s Cart</h6>
 				<hr>
					<?php 
					$total=0;
					if (isset($_SESSION['cart'])) 
					{
						$product_id=array_column($_SESSION['cart'],'product_id');

                        $result = mysqli_query($conn, "SELECT * FROM food_items");
					while ($row=mysqli_fetch_assoc($result)) 
					{
						foreach ($product_id as $id) 
						{
							if ($row['id']==$id) 
							{
								cartElement($row['images'],$row['name'],$row['price'],$row['id']);
								$total=$total+(int)$row['price'];
									$prize=$row['price'];
									$iad = $_SESSION['username'];
									$img=$row['images'];
									$namee = $row['name'];
									$orderid=$iad.$namee;
									$quantity="2";

									$sql = "INSERT INTO food_orders(name,price,quantity)VALUES('$namee','$prize','$quantity')";
										mysqli_query($conn, $sql);		
								
							}
						}
					}
					}
					else
					{
						echo "<h5>Cart is Empty :(</h5>";
					}


					 ?>

 				
 			</div>

 		</div>
 		<div class="col-md-4 offset-md-1 border rounded mt-5  h-25" style="background:#f4e28ced;">
 			<div class="pt-4" >
 				<h6>PRICE DETAILS</h6>
 				<hr>

 				<div class="row price-details">
 					<div class="col-md-6">
 						<?php 
 						if (isset($_SESSION['cart'])) 
 						{
 							$count=count($_SESSION['cart'])*2;
 							echo "<h6>Price ($count items)</h6>";
 						}
 						else
 						{
 							echo "<h6>Price (0 items)</h6>";
 						}

 						 ?>

 						 <h6>Delivery Charges</h6>
 						 <hr>
							<h6>Amount Payable</h6>

 					</div>
 					<div class="col-md-6">
 						
 						<h6>Ksh <?php echo ($total*2); ?></h6>
 						<h6 class="text-success">FREE</h6>
 						<hr>
 							<h6>Ksh <?php echo ($total*2); ?></h6>
 					</div>
 				</div>
 			</div>
			<form action="" method="post">
			<button type="submit" name="submitOrder" style="background: green!important; color: white;" class="btn btn-block boton  text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2" ></i>Submit Order</button>
			</form>
 		</div>
 		<?php
 			if (isset($_POST['submitOrder'])) {

 				echo "<script>alert('Order Submitted!')</script>";
 				echo "<script>window.location='carts.php'</script>";
 				$tootal=$total*2;
 				$iad = $_SESSION['username'];
 				$totalid=$iad.$tootal;


 				
 				$sql = "INSERT INTO food_orders(ClientName,item_id,Total)VALUES('$iad','$totalid','$tootal')";
				mysqli_query($conn, $sql);	


 			}


 		?>
	

 	</div>
 </form>
 </div>












<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.ripples-min.js"></script>
<script src="../magnific-popup/jquery.magnific-popup.js"></script>
<script src="../js/script.js"></script>	
</body>
</html>