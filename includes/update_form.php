<?php

	//CONNECT TO PHPMYADMIN
	include 'config.php';

	//INPUT COMMANDS IN PRODUCTS TABLE
	include 'command_update.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>New Order</title>
	<link rel="stylesheet" href="../src/css/style.css" />
</head>
<body>
	<div class="container">
	<header>
		<section id="topBar">
        	<nav class="container">
				<ul class="menu">
					<li><a href="../index.php" title="menu">HOME</a></li>
            		<li><a href="command_form.php" title="menu">NEW ORDER</a></li>
					<li><a href="#" title="menu">MODIFY ORDER</a></li>
					<li><a href="inventory_base.php" title="menu">INVENTORY</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
	<!-- CREATE FORM TO UPDATE COMMANDS-->
<form class="form_style" action="#" method="post">
		<div class="registration">
			<label for="lots_quantity">Stock</label>
    		<input type="number" name="lots_quantity" placeholder="New stock" id="lots_quantity">
		</div>
		<div class="registration">
			<label for="producer">Producer</label>
    		<input type="text" name="producer" placeholder="Producer name" id="producer">
		</div>

		<div class="registration">
			<label for="product">Product</label>
    		<input type="text" name="product" placeholder="Product name" id="product">
		</div>

		<br>
		<input type="reset" value="Reset">
		<br>
		<input type="submit" value="Send">
    </form>
	
	</div>
</body>
</html>