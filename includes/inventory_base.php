<?php

	//CONNECT TO PHPMYADMIN
	include 'config.php';

	//INPUT COMMANDS IN PRODUCTS TABLE
	include 'inventory_code.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>New Order</title>
	<link rel="stylesheet" href="../styles/style.css" />
</head>
<body>

	<header>
		<section id="topBar">
        	<nav class="container">
				<ul class="menu">
            		<li><a href="command_form.php" title="menu">NEW ORDER</a></li>
					<li><a href="update_form.php" title="menu">MODIFY ORDER</a></li>
					<li><a href="#" title="menu">INVENTORY</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
	<form action="#" method="post">
	<input type="submit" value="Sort by product" name='product'>
	<input type="submit" value="Sort by producer" name='producer'>
	<input type="submit" value="Sort by id" name='id'>
	</form>

	
	
</body>
</html>