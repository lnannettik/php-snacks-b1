<?php

// SNACK 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


$name = $_GET['name'];
echo $name;
$mail = $_GET['mail'];
$age = $_GET['age'];


if (
    strlen($name) > 3 
    &&
    strpos($mail, '.') !== false 
    &&
    strpos($mail, '@') !== false 
    && 
    !is_nan($age)
) {
    echo 'accesso riuscito';

}else{

    echo 'eh no';
};

?>