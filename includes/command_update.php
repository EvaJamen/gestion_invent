<?php


$prepare = $pdo->prepare('UPDATE products SET product="'.$_POST['product'].'" WHERE producer="'.$_POST['producer'].'"');


$prepare->execute();