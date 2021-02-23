<?php

// Creazione della classe + documentazione block

/**
 * @author Romina Trazzi mymail@posta.it
 * @copyright 2020-2021
*/

include __DIR__ . "/classes/user.php";
include __DIR__ . "/classes/admin.php";

// Variabili a cui viene assegnato un oggetto completo di parametri 

$user1 = new User ('Romina', 'Trazzi', 32, 'myemail@posta.it', 12, 1);
$user2 = new User ('Giorgio', 'Rossi', 25, 'hismail@posta.it', 21, 2);
$user3 = new User ('Alessandro', 'Verdi', 40, '', 28, 2);

// var_dump($user1);

$user1 -> setLevel(2);

// var_dump($user1);

$admin1 = new Admin ('Fabiola', 'Gardin', 32, 'myemail@posta.it', 12, 1, 'arcobaleno', 'red');

// var_dump($admin1);

// Inseriamo gli utenti in un array per ciclare all'interno di ognuno

$listaUsers = [$user1, $user2, $user3, $admin1];

var_dump($listaUsers);

/* foreach ($listaUsers as $user) {
    
    foreach ($user as $value) {
        echo $value . "<br>";
    }; 
} */


// Riportiamo il tutto in pagina HTML per stamparlo a schermo


?>


<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--meta properties -->
        <meta name="author" content="Romina Trazzi">
        <meta name="description" content="Esercizio php oop">
        <meta name="keywords" content="php programmazione ad oggetti">
    </head>

    <body>

        <h1>Creazione di una classe</h1>

        <?php 
            
            foreach ($listaUsers as /* $index => */ $user) {
                echo "<div>";
                // echo $index . "<br>";

                foreach ($user as $key => $value) {
                    echo  $key . ":" . $value . "<br>";
                }; 

                echo "<br></div>";
            } 

        ?> 


    </body>
</html>