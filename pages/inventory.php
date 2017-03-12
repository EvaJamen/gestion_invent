<?php

	//CONNECT TO PHPMYADMIN
	include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
		<title>Inventory</title>
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
							<li><a href="#" title="menu">INVENTORY</a></li>
							<li><a href="delete.php" title="menu">DELETE ORDER</a></li>
							<li><a href="session.php" title="menu">SESSION</a></li>
						</ul>
					</nav>
				</section>
			</header>
			
			<!-- DEFINE VALUES OF SORT TO SHOW THE LIST ORDER-->
			<form class="form_style" action="#" method="post">
				<input type="submit" value="Sort by product" name='sort'>
				<input type="submit" value="Sort by producer" name='sort'>
				<input type="submit" value="Sort by id" name='sort'>
			</form>
			<table>
				<thead>
					<td>ID</td>
					<td>PRODUCT</td>
					<td>DESCRIPTION</td>
					<td>CERTIFICATION</td>
					<td>PRODUCER</td>
					<td>ORIGIN</td>
					<td>QUANTITY</td>
					<td>DATE</td>
					<td>BILLING</td>
					<td>PRICE</td>
				</thead>
			</table>
	
			<!-- Sort the list by product if the value of sort is product-->
			<table>
				<?php
				$query = $pdo->query('SELECT * FROM products ORDER BY product');
				$products = $query->fetchAll();
				if($_POST['sort']=='Sort by product')
				foreach($products as $_show): ?>
					<tr>
						<td><?= $_show->id ?></td>
						<td><?= $_show->product ?></td>
						<td><?= $_show->description ?></td>
						<td><?= $_show->certification ?></td>
						<td><?= $_show->producer ?></td>
						<td><?= $_show->origin ?></td>
						<td><?= $_show->lots_quantity ?></td>
						<td><?= $_show->labeling_date ?></td>
						<td><?= $_show->billing_method ?></td>
						<td><?= $_show->price ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
	
			<!-- Sort the list by producer if the value of sort is producer-->
			<table>
				<?php
				$query = $pdo->query('SELECT * FROM products ORDER BY producer');
				$products = $query->fetchAll();
				if($_POST['sort']=='Sort by producer')
				foreach($products as $_show): ?>
					<tr>
						<td><?= $_show->id ?></td>
						<td><?= $_show->product ?></td>
						<td><?= $_show->description ?></td>
						<td><?= $_show->certification ?></td>
						<td><?= $_show->producer ?></td>
						<td><?= $_show->origin ?></td>
						<td><?= $_show->lots_quantity ?></td>
						<td><?= $_show->labeling_date ?></td>
						<td><?= $_show->billing_method ?></td>
						<td><?= $_show->price ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
	
			<!-- Sort the list by id if the value of sort is id-->
			<table>
				<?php
				$query = $pdo->query('SELECT * FROM products ORDER BY id');
				$products = $query->fetchAll();
				if($_POST['sort']=='Sort by id')
				foreach($products as $_show): ?>
					<tr>
						<td><?= $_show->id ?></td>
						<td><?= $_show->product ?></td>
						<td><?= $_show->description ?></td>
						<td><?= $_show->certification ?></td>
						<td><?= $_show->producer ?></td>
						<td><?= $_show->origin ?></td>
						<td><?= $_show->lots_quantity ?></td>
						<td><?= $_show->labeling_date ?></td>
						<td><?= $_show->billing_method ?></td>
						<td><?= $_show->price ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
	
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