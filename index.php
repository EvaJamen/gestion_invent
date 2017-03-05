<?php

	//CONNECT TO PHPMYADMIN
	include 'includes/config.php';

	//INPUT COMMANDS IN PRODUCTS TABLE
	include 'includes/command_input.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Gestionnaire - Inventaire</title>
</head>
<body>

	<!-- CREATE FORM TO FILL COMMANDS-->
<form action="#" method="post">
	<fieldset>
		<label for="username">Username</label>
		<input type="text" name="username" placeholder="username" id="username">
		<br>
		
		<label for="password">Password</label>
		<input type="password" name="password" size="20" id="password">
		<br>
		
		<br>
		<input type="reset" value="Reset">
		
		<br>
    	<input type="submit" value="Send">
	</fieldset>
	
	<fieldset>
		<label for="product">Product</label>
    	<input type="text" name="product" placeholder="Name of product" id="product">
		<br>
		
		<br>
		<label for="description">Description</label>
		<br>
		<textarea cols="30" rows="10" name="description" placeholder="Describe your product" id="description"></textarea>
		
		<br>
		<label for="certification">Certification</label>
		<input type="radio" name="certification" value="bio" id="bio" checked><label for="bio">bio</label>
		<input type="radio" name="certification" value="not bio" id="not bio"><label for="not bio">not bio</label>
		
		<br>
		<label for="producer">Producer</label>
    	<input type="text" name="producer" placeholder="Name of producer" id="producer">
		
		<br>
		<label for="origin">Origin</label>
    	<input type="text" name="origin" placeholder="Origin of your product" id="origin">
		
		<br>
		<label for="lots_quantity">Quantity</label>
    	<input type="number" name="lots_quantity" placeholder="Null" id="lots_quantity">
		
		<br>
		<label for="labeling_date">Labeling date</label>
    	<input type="date" name="labeling_date" id="labeling_date">
		<br>
		<label for="billing_method">Billing method</label>
		<input type="radio" name="billing_method" value="kg" id="kg" checked><label for="kg">/kg</label>
		<input type="radio" name="billing_method" value="unit" id="unit"><label for="unit">/unit</label>
		
		<br>
		<label for="price">Price</label>
    	<input type="number" name="price" placeholder="Null" id="price">
		
		<br>
		<input type="reset" value="Reset">
		
		<br>
    	<input type="submit" value="Send">
		
	</fieldset>
</form>
	
	
</body>
</html>