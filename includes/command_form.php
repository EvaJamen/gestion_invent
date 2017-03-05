<?php

	//CONNECT TO PHPMYADMIN
	include 'config.php';

	//INPUT COMMANDS IN PRODUCTS TABLE
	include 'command_input.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>New Order</title>
	<link rel="stylesheet" href="../styles/style.css" />
</head>
<body>

	<header>
		<section id="topBar">
        	<nav class="container">
				<ul class="menu">
            		<li><a href="#" title="menu">NEW ORDER</a></li>
					<li><a href="#" title="menu">MODIFY ORDER</a></li>
					<li><a href="#" title="menu">ERASE ORDER</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
	<!-- CREATE FORM TO FILL COMMANDS-->
<form action="#" method="post">
	<fieldset>
		<div class="registration">
			<label for="product">Product</label>
    		<input type="text" name="product" placeholder="Name of product" id="product">
			<br>
		</div>
		
		<div class="registration">
		<label for="description">Description</label>
		<textarea cols="150" rows="10" name="description" placeholder="Describe your product" id="description"></textarea>
		</div>
		
		<div class="registration">
			<label for="certification">Bio or not ?</label>
			<input type="radio" name="certification" value="bio" id="bio" checked><label for="bio"></label>
			<input type="radio" name="certification" value="not bio" id="not bio"><label for="not bio"></label>
		</div>
		
		<div class="registration">
			<label for="producer">Producer</label>
    		<input type="text" name="producer" placeholder="Name of producer" id="producer">
		</div>
		
		<div class="registration">
			<label for="origin">Origin</label>
    		<input type="text" name="origin" placeholder="Origin of your product" id="origin">
		</div>
		
		<div class="registration">
			<label for="lots_quantity">Quantity</label>
    		<input type="number" name="lots_quantity" placeholder="Null" id="lots_quantity">
		</div>
		
		<div class="registration">
			<label for="labeling_date">Labeling date*</label>
    		<input type="date" name="labeling_date" id="labeling_date">
			<span id="date">*Don't file if you want the currently set date</span>
		</div>
		
		<div class="registration">
			<label for="billing_method">/kg or /unit</label>
			<input type="radio" name="billing_method" value="kg" id="kg" checked><label for="kg"></label>
			<input type="radio" name="billing_method" value="unit" id="unit"><label for="unit"></label>
		</div>
		
		<div class="registration">
			<label for="price">Price</label>
    		<input type="number" name="price" placeholder="Null" id="price">
		</div>
		
		<br>
		<input type="reset" value="Reset">
		
		<br>
    	<input type="submit" value="Send">
		
	</fieldset>
</form>
	
	
</body>
</html>