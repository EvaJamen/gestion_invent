<?php
	//INPUT COMMANDS IN PRODUCTS TABLE WITH THE FORM

	$error_messages = array();
	$success_messages = array();

	if(empty($_POST))
	{
		$_POST['product'] 		= '';
		$_POST['description']   = '';
		$_POST['certification']    	= '';
		$_POST['producer'] = '';
		$_POST['origin'] = '';
		$_POST['lots_quantity'] = '';
		$_POST['labeling_date'] = '';
		$_POST['billing_method'] = '';
		$_POST['price'] = '';
		
		echo 'It is appears that your form is empty ! Please insert values';
		echo '<pre>';
		print_r($_POST);
    	echo '</pre>';
	}

	else
	{
		//Prepare the request
		$prepare = $pdo->prepare('INSERT INTO products (product, description, certification, producer, origin, lots_quantity, labeling_date, billing_method, price) VALUES (:product, :description, :certification, :producer, :origin, :lots_quantity, :labeling_date, :billing_method, :price)');

		$prepare->bindValue('product', $_POST['product']);
		$prepare->bindValue('description', $_POST['description']);
		$prepare->bindValue('certification', $_POST['certification']);
		$prepare->bindValue('producer', $_POST['producer']);
		$prepare->bindValue('origin', $_POST['origin']);
		$prepare->bindValue('lots_quantity', 	$_POST['lots_quantity']);
		$prepare->bindValue('labeling_date', $_POST['labeling_date']);
		$prepare->bindValue('billing_method', $_POST['billing_method']);
		$prepare->bindValue('price', $_POST['price']);

		//Execute the request
		$exec = $prepare->execute();
		
	//SHOW ARRAY IN THE BROWSER
		$query = $pdo->query ('SELECT*FROM products');
		$products = $query->fetchAll();
	echo '<pre>';
	print_r($products);
    echo '</pre>';
	echo 'Your command has been successfully registered';
		
		
	}