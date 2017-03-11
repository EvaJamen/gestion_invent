<?php

//$query = $pdo->query('SELECT * FROM products ORDER BY product');
//$products = $query->fetchAll();
//Ordre alphabétique


$exec = $pdo->exec('UPDATE products SET lots_quantity="'.$_POST['lots_quantity'].'" WHERE producer="'.$_POST['producer'].'"');