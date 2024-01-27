<?php 

function component($productname,$productprice,$productimage,$productid)
{
	$element="
		<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"OrderPage.php\" method=\"post\">
				<div class=\"card shadow\" style=\"background:#f4e28ced;\">
					<div>
						<img src=\"$productimage\" alt=\"image1\" class=\"img-fluid card-img-top\" style=\"width:300px;height:300px;\">
					</div>
					<div class=\"card-body\">
						<h5 class=\"card-title\">$productname</h5>
						
							
							<h5>
								
								<span class=\"price\">$productprice</span>
							</h5>
							<button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
							<input type=\"hidden\" name=\"product_id\" value=\"$productid\">
					</div>
				</div>
			</form>
		</div>
	";
	echo $element;
}


function cartElement( $productimg,$productname,$productprice,$productid)
{
	$element="
	<form action=\"carts.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\" >
 					<div class=\"border rounded\">
 						<div class=\"row\" style=\"background:#f4e28ced;\">
 							<div class=\"col-md-3 pl-0\">
 								<img src=$productimg alt=\"image1\" class=\"img-fluid\" style=\"width:200px;height:200px;\">
 							</div>
 							<div class=\"col-md-6\">
 								<h5 class=\"pt-2\">$productname</h5>
 								<small class=\"text-secondary\">Seller:HappyHoagie</small>
 								<h5 class=\"pt-2\">$productprice</h5>
 								
 								<button class=\"btn btn-danger mx-2\" type=\"submit\" name=\"remove\">Remove</button>
 							</div>
 							<div class=\"col-md-3 py-5\">
 								<div>
 									<button class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-minus\"></i></button>
 									<input type=\"text\" value=\"2\" class=\"form-control w-25 d-inline\">
 									<button class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
 								</div>
 							</div>
 						</div>
 					</div>
 				</form>
	";


	echo $element;
}





















 ?>