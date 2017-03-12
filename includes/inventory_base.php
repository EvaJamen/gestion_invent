<?php

	//CONNECT TO PHPMYADMIN
	include 'config.php';

	//INPUT COMMANDS IN PRODUCTS TABLE
	include 'inventory_code.php';

    // Retrieve subscriptions

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
					<li><a href="update_form.php" title="menu">MODIFY ORDER</a></li>
					<li><a href="#" title="menu">INVENTORY</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
	<form class="form_style" action="#" method="post">
	<input type="submit" value="Sort by product" name='sort'>
	<input type="submit" value="Sort by producer" name='sort'>
	<input type="submit" value="Sort by id" name='sort'>
	</form>
	
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
	
	</div>
</body>
</html>