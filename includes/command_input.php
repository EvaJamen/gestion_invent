<?php
	//INPUT COMMANDS IN PRODUCTS TABLE WITH THE FORM

	//Array to check error
	$error = array();
	
	if(!empty($_POST))
	{
		
		// Retrieve data
		$product = trim($_POST['product']);
		$description        = trim($_POST['description']);
		$certification    = $_POST['certification'];
		$producer = trim($_POST['producer']);
		$origin = trim($_POST['origin']);
		$lots_quantity        = (int)$_POST['lots_quantity'];
		$labeling_date    = $_POST['labeling_date'];
		$billing_method    = $_POST['billing_method'];
		$price       = (int)$_POST['price'];
		
		// some products error
		if(empty($product))
			$error['product'] = 'should not be empty';
		if(empty($description))
			$error['description'] = 'should not be empty';
		if(empty($producer))
			$error['producer'] = 'should not be empty';
		if(empty($origin))
			$error['origin'] = 'should not be empty';
		if(empty($lots_quantity))
			$error['lots_quantity'] = 'should not be empty';
		if(empty($labeling_date))
			$error['labeling_date'] = 'should not be empty';
		if(empty($price))
			$error['price'] = 'should not be empty';
		
		// any products error
		if(empty($error))
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
			
		//Execute the request, confirm and reset form with default values
		$prepare->execute();
		
		print 'Your order has been successfully registered';
			
		$_POST['product'] 		= '';
		$_POST['description']   = '';
		$_POST['certification']    	= '';
		$_POST['producer'] = '';
		$_POST['origin'] = '';
		$_POST['lots_quantity'] = '';
		$_POST['labeling_date'] = '';
		$_POST['billing_method'] = '';
		$_POST['price'] = '';
			
		}
	}

	else
	{
		//default values
		$_POST['product'] 		= '';
		$_POST['description']   = '';
		$_POST['certification']    	= '';
		$_POST['producer'] = '';
		$_POST['origin'] = '';
		$_POST['lots_quantity'] = '';
		$_POST['labeling_date'] = '';
		$_POST['billing_method'] = '';
		$_POST['price'] = '';
	}
		
