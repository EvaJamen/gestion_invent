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
	<link rel="stylesheet" href="../src/css/style.css" />
</head>
<body>
	<div class="container">
	<header>
		<section id="topBar">
        	<nav class="container">
				<ul class="menu">
					<li><a href="../index.php" title="menu">HOME</a></li>
            		<li><a href="#" title="menu">NEW ORDER</a></li>
					<li><a href="update_form.php" title="menu">MODIFY ORDER</a></li>
					<li><a href="inventory_base.php" title="menu">INVENTORY</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
	<div class="messages success">
		<?php foreach($success_messages as $_message): ?>
			<p><?= $_message ?></p>
		<?php endforeach ?>
	</div>

	<div class="messages errors">
		<?php foreach($error_messages as $_key => $_message): ?>
			<p><?= "$_key : $_message" ?></p>
		<?php endforeach ?>
	</div>
	
	<!-- CREATE FORM TO FILL COMMANDS-->
<form class="form_style" action="#" method="post">
	<fieldset>
		<legend>Product</legend>
		<div class="registration">
			<label for="product">Product</label>
    		<input type="text" name="product" placeholder="Name of product" id="product">
			<br>
		</div>
		
		<div class="registration">
			<label for="certification">Certification
				<input type="radio" name="certification" value="bio"  id="bio" checked>
				bio
			</label>
			<label for="certification">
				<input type="radio" name="certification" value="not bio" id="not bio">
				not bio
			</label>
		</div>
		
		<br>
		
		<div class="registration">
			<label for="producer">Producer</label>
    		<input type="text" name="producer" placeholder="Name of producer" id="producer">
		</div>
</fieldset>
	
	<fieldset>
		<legend>Detail</legend>
		<div class="registration">
		<label for="description">Description</label>
		<textarea cols="150" rows="10" name="description" placeholder="Describe your product" id="description"></textarea>
		</div>
		<div class="registration">
			<label for="origin">Origin</label>
    		<input type="text" name="origin" placeholder="Origin of your product" id="origin">
		</div>
		
		<div class="registration">
			<label for="labeling_date">Labeling date*</label>
    		<input type="date" name="labeling_date" id="labeling_date">
			<span id="date">*Don't file if you want the currently set date</span>
		</div>

	</fieldset>
	
	<fieldset>
		<legend>Pricing</legend>
		<div class="registration">
			<label for="lots_quantity">Quantity</label>
    		<input type="number" name="lots_quantity" placeholder="Null" id="lots_quantity">
		</div>
		
		<div class="registration">
			<label for="billing_method">Billing
				<input type="radio" name="billing_method" value="kg"  id="kg" checked>
				/kg
			</label>
			<label for="billing_method">
				<input type="radio" name="billing_method" value="unit" id="unit">
				/unit
			</label>
		</div>
		<br>
		
		<div class="registration">
			<label for="price">Price</label>
    		<input type="number" name="price" placeholder="Null" id="price">
		</div>
	</fieldset>
		<div class="registration">
		<input type="reset" value="Reset">
		
		<br>
    	<input type="submit" value="Send">
		</div>
</form>
	
	<script>
	</script>
		</div>
</body>
</html>