<?php

class User {

    // Dichiarazione delle variabili 

    public $name;
    public $surname;
    public $age;
    public $email;
    public $comments;
    public $level;

    // Costruzione dell'oggetto con parametri

    public function __construct(string $name, string $surname, int $age, string $email, int $comments, int $level) {
        $this -> name = $name;
        $this-> surname = $surname;
        $this -> age = $age;
        $this -> email = $email;
        $this -> comments = $comments;
        $this -> level = $level;
    }

    public function setLevel (int $level) {    // Riassegna il valore alla variabile level quando richiamata se il numero di commenti è > 100
        if ($comments > 100) {
            $this -> level = 5;
        } else {
            $this -> level = $level;
        }   
    }
}

?>