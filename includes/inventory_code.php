<?php

if(!empty($_POST))
{
	
	$product = trim($_POST['product']);
	$producer = trim($_POST['producer']);
	
	if($_POST['product']=='Sort by product')
	{
	$query = $pdo->query('SELECT * FROM products ORDER BY product');
	}
	
	else if($_POST['producer']=='Sort by producer')
	{
	$query = $pdo->query('SELECT * FROM products ORDER BY producer');
	}
	
	else if($_POST['id']=='Sort by id')
	{
	$query = $pdo->query('SELECT * FROM products');
	}
	
	$products = $query->fetchAll();
	echo '<pre>';
	print_r ($products);
	echo '</pre>';
	
	$_POST['product'] = '';
	$_POST['producer'] = '';
}

else
{$query = $pdo->query('SELECT * FROM products');
	$products = $query->fetchAll();
	echo '<pre>';
	print_r ($products);
	echo '</pre>';
	
	$_POST['product'] = '';
	$_POST['producer'] = '';
}
