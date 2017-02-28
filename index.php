<?php

	//CONNECT TO PHPMADMIN
	include 'includes/config.php';


	//TEST TO CREATE A SECOND LINE IN MY ARRAY. THE FIRST WAS CREATED DIRECTLY IN PHPMYADMIN
	//Define values of my array
	$data = array (
		'product' => 'Tomate',
		'description' => 'Elle est une excellente source de vitamine C ainsi que de provitamine A ou carotène (0,6 mg/100 g) et de vitamine E (1 mg/100 g) aux vertus anti-oxydantes.',
		'certification' => 'not bio',
		'producer' => 'Ferme Fruirouge',
		'origin' => 'France',
		'lots_quantity' => 100,
		'labeling-date' => '2017-02-28 01:45:22',
		'billing_method' => 'kg',
		'price' => 1.45
	);

	//Prepare the request
	$prepare = $pdo->prepare('INSERT INTO products (product, description, certification, producer, origin, lots_quantity, labeling-date, billing_method, price) VALUES (:product, :description, :certification, :producer, :origin, :lots_quantity, :labeling-date, :billing_method, :price)');

	$prepare->bindValue('product', $data['product']);
	$prepare->bindValue('description', $data['description']);
	$prepare->bindValue('certification', $data['certification']);
	$prepare->bindValue('producer', $data['producer']);
	$prepare->bindValue('origin', $data['origin']);
	$prepare->bindValue('lots_quantity', $data['lots_quantity']);
	$prepare->bindValue('labeling-date', $data['labeling-date']);
	$prepare->bindValue('billing_method', $data['billing_method']);
	$prepare->bindValue('price', $data['price']);

		//Execute the request
	/* $exec = $prepare->execute();
	

/*
	//SHOW ARRAY IN THE BROWSER
	$query = $pdo->query ('SELECT*FROM products');
	$products = $query->fetchAll();

	echo '<pre>';
	print_r($products);
	echo '</pre>';
	exit;
	
*/
?>

