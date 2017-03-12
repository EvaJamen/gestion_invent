<?php

	//CONNECT TO MY BDD
	include '../config.php';

	//INPUT ORDERS IN TABLE PRODUCTS OF MY BDD
	include '../includes/new_order_bdd.php';

	include '../index.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
		<title>New Order</title>
		<link rel="stylesheet" href="<?= URL ?>src/css/style.css">
	</head>
	<body>
		<div class="container">
			<!-- MENU-->
			<header>
				<section id="topBar">
					<nav class="container">
						<ul class="menu">
							<li><a href="home.php" title="menu">HOME</a></li>
							<li><a href="#" title="menu">NEW ORDER</a></li>
							<li><a href="update.php" title="menu">UPDATE ORDER</a></li>
							<li><a href="inventory.php" title="menu">INVENTORY</a></li>
							<li><a href="delete.php" title="menu">DELETE ORDER</a></li>
							<li><a href="session.php" title="menu">SESSION</a></li>
						</ul>
					</nav>
				</section>
			</header>
	
			<!-- CREATE FORM TO INPUT ORDERS-->
			<form class="form_style" action="#" method="post">
				<fieldset>
					<legend>Product</legend>
					<div class="registration">
						<label for="product">Product</label>
						<input type="text" name="product" placeholder="Name of product" id="product">
						<br>
					</div>
			
					<div class="registration">
						<label for="certification">Certification
							<input type="radio" name="certification" value="bio"  id="bio" checked>bio
						</label>
						<label for="certification">
							<input type="radio" name="certification" value="not bio" id="not bio">not bio
						</label>
						<br>
					</div>

					<div class="registration">
						<label for="producer">Producer</label>
		    			<input type="text" name="producer" placeholder="Name of producer" id="producer">
					</div>
				</fieldset>
	
				<fieldset>
					<legend>Detail</legend>
					<div class="registration">
						<label for="description">Description</label>
						<textarea cols="150" rows="10" name="description" placeholder="Describe your product" id="description"></textarea>
					</div>
				
					<div class="registration">
						<label for="origin">Origin</label>
						<input type="text" name="origin" placeholder="Origin of your product" id="origin">
					</div>
		
					<div class="registration">
						<label for="labeling_date">Labeling date*</label>
						<input type="date" name="labeling_date" id="labeling_date">
						<span id="date">*Don't file if you want the currently set date</span>
					</div>
				</fieldset>

				<fieldset>
					<legend>Pricing</legend>
					<div class="registration">
						<label for="lots_quantity">Quantity</label>
						<input type="number" name="lots_quantity" placeholder="Null" id="lots_quantity">
					</div>
		
					<div class="registration">
						<label for="billing_method">Billing
							<input type="radio" name="billing_method" value="kg"  id="kg" checked>/kg
						</label>
						<label for="billing_method">
							<input type="radio" name="billing_method" value="unit" id="unit">/unit
						</label>
						<br>
					</div>

					<div class="registration">
						<label for="price">Price</label>
						<input type="number" name="price" placeholder="Null" id="price">
					</div>
				</fieldset>
			

				<div class="registration">
					<input type="reset" value="Reset">
					<input type="submit" value="Send">
				</div>
			</form>

			<!-- FOOTER-->
			<footer>
				<div class="footer">
					<p>Mentions légales</p>
					<p>By : Eva Jamen</p>
					<p>Hetic</p>
				</div>
			</footer>
		</div>
	</body>
</html>