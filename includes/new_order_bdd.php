<?php
	//INPUT ORDERS IN TABLE PRODUCTS OF MY BDD

	//Array to check errors
	$error = array();
	
	if(!empty($_POST)) {
		// Retrieve data
		$product		= trim($_POST['product']);
		$description	= trim($_POST['description']);
		$certification 	= $_POST['certification'];
		$producer		= trim($_POST['producer']);
		$origin			= trim($_POST['origin']);
		$lots_quantity	= (int)$_POST['lots_quantity'];
		$labeling_date	= $_POST['labeling_date'];
		$billing_method	= $_POST['billing_method'];
		$price			= (int)$_POST['price'];
		
		// Check empty data to fill the error array
		if(empty($product))
			$error['product']		= 'should not be empty';
		if(empty($description))
			$error['description']	= 'should not be empty';
		if(empty($producer))
			$error['producer']		= 'should not be empty';
		if(empty($origin))
			$error['origin']		= 'should not be empty';
		if(empty($lots_quantity))
			$error['lots_quantity']	= 'should not be empty';
		if(empty($price))
			$error['price']			= 'should not be empty';
		
		// Any error
		if(empty($error)) {
			// Fill the table with currently set date
			if(empty($labeling_date)) {
				//Define currently set date
				$_POST['labeling_date'] = date("j/n/Y h:i", time());
				
				//Prepare the request
				$prepare = $pdo->prepare('INSERT INTO products (product, description, certification, producer, origin, lots_quantity, billing_method, price) VALUES (:product, :description, :certification, :producer, :origin, :lots_quantity, :billing_method, :price)');
				
				$prepare->bindValue('product', $_POST['product']);
				$prepare->bindValue('description', $_POST['description']);
				$prepare->bindValue('certification', $_POST['certification']);
				$prepare->bindValue('producer', $_POST['producer']);
				$prepare->bindValue('origin', $_POST['origin']);
				$prepare->bindValue('lots_quantity', 	$_POST['lots_quantity']);
				$prepare->bindValue('billing_method', $_POST['billing_method']);
				$prepare->bindValue('price', $_POST['price']);
			
				//Execute the request and alert to confirm the registering
				$prepare->execute();
				
				echo "<script>alert(\"Your order has been successfully registered\")</script>"; 
			}
			
			// Handle the date to fill the table
			else {
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
		
				//Execute the request and alert to confirm the registering
				$prepare->execute();
				
				echo "<script>alert(\"Your order has been successfully registered\")</script>"; 
			}
		}
		
		//Reset form by filling with default values	
		$_POST['product']		= '';
		$_POST['description']	= '';
		$_POST['certification']	= '';
		$_POST['producer']		= '';
		$_POST['origin']		= '';
		$_POST['lots_quantity']	= '';
		$_POST['labeling_date']	= '';
		$_POST['billing_method']= '';
		$_POST['price']			= '';
	}

	else {
		//Reset form by filling with default values	
		$_POST['product']		= '';
		$_POST['description']	= '';
		$_POST['certification']	= '';
		$_POST['producer']		= '';
		$_POST['origin']		= '';
		$_POST['lots_quantity']	= '';
		$_POST['labeling_date']	= '';
		$_POST['billing_method']= '';
		$_POST['price']			= '';
	}
