<?php
	//INPUT COMMANDS IN PRODUCTS TABLE WITH THE FORM

	//Define values
	$product = $_POST['product'];
	$certification = $_POST['certification'];
	$producer = $_POST['producer'];
	$origin = $_POST['origin'];
	$lots_quantity = $_POST['lots_quantity'];
	$labeling_date = $_POST['labeling_date'];
	$billing_method = $_POST['billing_method'];
	$price = $_POST['price'];

	//Prepare the request
	$prepare = $pdo->prepare('INSERT INTO products (product, description, certification, producer, origin, lots_quantity, labeling_date, billing_method, price) VALUES (:product, :description, :certification, :producer, :origin, :lots_quantity, :labeling_date, :billing_method, :price)');

	$prepare->bindValue('product', $_POST['product']);
	$prepare->bindValue('description', $_POST['description']);
	$prepare->bindValue('certification', $_POST['certification']);
	$prepare->bindValue('producer', $_POST['producer']);
	$prepare->bindValue('origin', $_POST['origin']);
	$prepare->bindValue('lots_quantity', $_POST['lots_quantity']);
	$prepare->bindValue('labeling_date', $_POST['labeling_date']);
	$prepare->bindValue('billing_method', $_POST['billing_method']);
	$prepare->bindValue('price', $_POST['price']);

	//Execute the request
	$exec = $prepare->execute();

	//SHOW ARRAY IN THE BROWSER
	$query = $pdo->query ('SELECT*FROM products');
	$products = $query->fetchAll();


	echo '<pre>';
    print_r($_POST);
	print_r($products);
    echo '</pre>';


