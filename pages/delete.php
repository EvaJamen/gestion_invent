<?php

	//CONNECT TO MY BDD
	include '../config.php';

	//DELETE ORDERS IN TABLE PRODUCTS OF MY BDD
    if(!empty($_GET['delete_id']))
    {
        $prepare = $pdo->prepare('DELETE FROM products WHERE id = :id');
		$prepare->bindValue('id', $_GET['delete_id']);
		$prepare->execute();
    }

	// Retrieve subscriptions
    $query = $pdo->query('SELECT * FROM products');
    $products = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
		<title>Delete Order</title>
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
							<li><a href="#" title="menu">DELETE ORDER</a></li>
						</ul>
					</nav>
				</section>
			</header>
			
			<table>
        		<?php foreach($products as $_erase): ?>
            	<tr>
                	<td><?= $_erase->product ?></td>
					<td><?= $_erase->description ?></td>
					<td><?= $_erase->certification ?></td>
					<td><?= $_erase->producer ?></td>
					<td><?= $_erase->origin ?></td>
					<td><?= $_erase->lots_quantity ?></td>
					<td><?= $_erase->labeling_date ?></td>
					<td><?= $_erase->billing_method ?></td>
					<td><?= $_erase->price ?></td>
					<td class="delete"><a href="?delete_id=<?= $_erase->id ?>" onclick="return sure();">Delete</a></td>
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
	
	<script>
		//Confirm before delete order
		function sure()
		{
			return(confirm('Are you sure you want to delete this command ?'));
		}
	</script>
</html>