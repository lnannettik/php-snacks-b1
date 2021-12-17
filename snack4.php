<?php

// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta


$randomNum = [];

for ($i = 0; $i < 15; $i++) {

    $numero = rand(0,15);
    
    if (!in_array($numero, $randomNum)) {
        $randomNum[] = $numero;

    } else {
        $i--;
    }

}

var_dump($randomNum);


?>