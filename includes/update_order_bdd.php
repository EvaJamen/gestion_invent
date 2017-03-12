<?php
	//UPDATE ORDERS IN TABLE PRODUCTS OF MY BDD

	//Array to check errors
	$error = array();

	if(!empty($_POST)) {
		// Retrieve data
		$product		= trim($_POST['product']);
		$producer		= trim($_POST['producer']);
		$lots_quantity	= (int)$_POST['lots_quantity'];
		
		// Check empty data to fill the error array
		if(empty($product))
			$error['product']		= 'should not be empty';
		if(empty($producer))
			$error['producer']		= 'should not be empty';
		if(empty($lots_quantity))
			$error['lots_quantity']	= 'should not be empty';

		// Any error
		if(empty($error)) {
			//Prepare the request
			$prepare = $pdo->prepare('UPDATE products SET lots_quantity="'.$_POST['lots_quantity'].'" WHERE product="'.$_POST['product'].'" AND producer="'.$_POST['producer'].'"');
			
			$prepare->bindValue('lots_quantity', $_POST['lots_quantity']);
			$prepare->bindValue('product', $_POST['product']);
			$prepare->bindValue('producer', $_POST['producer']);

			//Execute the request and alert to confirm the registering
			$prepare->execute();
			
			echo "<script>alert(\"Your update has been successfully registered\")</script>";		
		}
		
		//Reset form by filling with default values
		$_POST['product']		= '';
		$_POST['producer']		= '';
		$_POST['lots_quantity']	= '';
	}

	else {
		$_POST['product']		= '';
		$_POST['producer']		= '';
		$_POST['lots_quantity']	= '';
	}