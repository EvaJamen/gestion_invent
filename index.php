<?php

	//CONNECT TO PHPMYADMIN
	include 'includes/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="src/css/style.css" />
</head>
<body>
	<div class="container">
	<header>
		<section id="topBar">
        	<nav class="container">
				<ul class="menu">
					<li><a href="#" title="menu">HOME</a></li>
            		<li><a href="includes/command_form.php" title="menu">NEW ORDER</a></li>
					<li><a href="includes/update_form.php" title="menu">MODIFY ORDER</a></li>
					<li><a href="includes/inventory_base.php" title="menu">INVENTORY</a></li>
				</ul>
			</nav>
			<div class="home">
				<h1>Welcome to your <br> Management and inventory website</h1>
			</div>
		</section>
		
	</header>
	<footer>
	
	</footer>
	</div>
</body>
</html>