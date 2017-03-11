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
	<link rel="stylesheet" href="../styles/styles.css" />
</head>
<body>

	<header>
		<section id="topBar">
        	<nav class="container">
				<ul class="menu">
            		<li><a href="command_form.php" title="menu">NEW ORDER</a></li>
					<li><a href="#" title="menu">MODIFY ORDER</a></li>
					<li><a href="inventory_base.php" title="menu">INVENTORY</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
	<!-- CREATE FORM TO UPDATE COMMANDS-->
<form action="#" method="post">
		<div class="registration">
			<label for="product">Stock</label>
    		<input type="text" name="product" placeholder="New product" id="product">
		</div>
		<div class="registration">
			<label for="producer">Producer</label>
    		<input type="text" name="producer" placeholder="Producer name" id="producer">
		</div>
		<input type="submit" value="Send">
    </form>
	
	
</body>
</html>