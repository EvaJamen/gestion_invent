<?php

	//CONNECT TO MY BDD
	include '../config.php';

	//UPDATE ORDERS IN TABLE PRODUCTS OF MY BDD
	include '../includes/update_order_bdd.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
		<title>NUpdate Order</title>
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
							<li><a href="new.php" title="menu">NEW ORDER</a></li>
							<li><a href="#" title="menu">UPDATE ORDER</a></li>
							<li><a href="inventory.php" title="menu">INVENTORY</a></li>
							<li><a href="delete.php" title="menu">DELETE ORDER</a></li>
							<li><a href="session.php" title="menu">SESSION</a></li>
						</ul>
					</nav>
				</section>
			</header>

			<!-- CREATE FORM TO UPDATE COMMANDS-->
			<form class="form_style" action="#" method="post">
				<!-- Data to update-->
				<div class="registration">
					<label for="lots_quantity">Stock</label>
					<input type="number" name="lots_quantity" placeholder="New stock" id="lots_quantity">
				</div>
			
				<!-- Reference data-->
				<div class="registration">
				<label for="product">Product</label>
				<input type="text" name="product" placeholder="Product name" id="product">
				</div>
				
				<div class="registration">
					<label for="producer">Producer</label>
					<input type="text" name="producer" placeholder="Producer name" id="producer">
				</div>
				<br>
			
				<div class="registration">
				<input type="reset" value="Reset">
    			<input type="submit" value="Send" onclick="return sure();">
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
	<script>
		//Confirm before delete order
		function sure()
		{
			return(confirm('Are you sure you want to update this command?'));
		}
	</script>
</html>