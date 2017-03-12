<?php

	//CONNECT TO MY BDD
	include 'config.php';

	//UPDATE ORDERS IN TABLE PRODUCTS OF MY BDD
	include 'update_order_bdd.php';

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
			<!-- MENU-->
			<header>
				<section id="topBar">
					<nav class="container">
						<ul class="menu">
							<li><a href="../index.php" title="menu">HOME</a></li>
							<li><a href="new_order_form.php" title="menu">NEW ORDER</a></li>
							<li><a href="#" title="menu">UPDATE ORDER</a></li>
							<li><a href="inventory_tab.php" title="menu">INVENTORY</a></li>
							<li><a href="#" title="menu">DELETE ORDER</a></li>
						</ul>
					</nav>
				</section>
			</header>
	
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