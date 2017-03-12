<?php

$error = array();

if(!empty($_POST))
	{

		$product = trim($_POST['product']);
		$producer = trim($_POST['producer']);
		$lots_quantity        = (int)$_POST['lots_quantity'];
		
		if(empty($product))
			$error['product'] = 'should not be empty';
		if(empty($producer))
			$error['producer'] = 'should not be empty';
		if(empty($lots_quantity))
			$error['lots_quantity'] = 'should not be empty';

		if(empty($error))
		{
		$prepare = $pdo->prepare('UPDATE products SET lots_quantity="'.$_POST['lots_quantity'].'" WHERE producer="'.$_POST['producer'].'" AND product="'.$_POST['product'].'"');

		$prepare->execute();
			
		echo "<script>alert(\"Your update has been successfully registered\")</script>";
			
		}
		
		$_POST['product'] 		= '';
		$_POST['producer'] = '';
		$_POST['lots_quantity'] = '';
	}

else{
	
	$_POST['product'] 		= '';
		$_POST['producer'] = '';
		$_POST['lots_quantity'] = '';
}