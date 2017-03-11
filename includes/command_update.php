<?php


$prepare = $pdo->prepare('UPDATE products SET lots_quantity="'.$_POST['lots_quantity'].'" WHERE producer="'.$_POST['producer'].'" AND product="'.$_POST['product'].'"');


$prepare->execute();

echo 'La nouvelle quantité de '.$_POST['product'].' fourni par '.$_POST['producer'].' est de '.$_POST['lots_quantity'];