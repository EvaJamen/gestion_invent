<?php

	//CONNECT TO MY BDD
	include '../config.php';

	//CHECKING USER IN TABLE BEFORE OPEN SESSION
	include '../includes/session_bdd.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
		<title>Open session</title>
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
							<li><a href="update.php" title="menu">UPDATE ORDER</a></li>
							<li><a href="inventory.php" title="menu">INVENTORY</a></li>
							<li><a href="delete.php" title="menu">DELETE ORDER</a></li>
							<li><a href="#" title="menu">SESSION</a></li>
						</ul>
					</nav>
				</section>
			</header>

			<!-- CREATE FORM TO START SESSION-->
			<form class="form_style" action="#" method="post">
				<!-- Data to update-->
				<div class="registration">
					<label for="user">Username</label>
					<input type="text" name="user" placeholder="What is your username ?" id="user">
				</div>
			
				<div class="registration">
				<label for="password">Password</label>
				<input type="text" name="password" placeholder="What is your password ?" id="password">
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