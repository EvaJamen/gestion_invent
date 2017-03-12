<?php

	//CONNECT TO MY BDD
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
			<!-- MENU-->
			<header>
				<section id="topBar">
					<nav class="container">
						<ul class="menu">
							<li><a href="#" title="menu">HOME</a></li>
							<li><a href="includes/new_order_form.php" title="menu">NEW ORDER</a></li>
							<li><a href="includes/update_order_form.php" title="menu">UPDATE ORDER</a></li>
							<li><a href="includes/inventory_tab.php" title="menu">INVENTORY</a></li>
							<li><a href="includes/delete_order_form.php" title="menu">DELETE ORDER</a></li>
						</ul>
					</nav>
				</section>
			</header>
		
			<!-- WELCOME MESSAGE-->
			<div class="home">
				<h1>Welcome to your <br> Management and inventory website</h1>
			</div>
		
			<!-- FOOTER-->
			<footer>
				<div class="footer">
					<p>Mentions légales</p>
					<p>By Eva Jamen</p>
					<p>Hetic</p>
				</div>
			</footer>
		</div>
	</body>
</html>