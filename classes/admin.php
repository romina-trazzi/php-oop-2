<?php

    include __DIR__ . "/classes/user.php";

    class Admin extends User {  // Estende la classe User con le proprietà della classe Admin
        protected $password;
        public $comment_color;

        public function __construct($name, $surname, $age, $email, $comments, $level, string $password, string $comment_color) {
            parent:: __construct($name, $surname, $age, $email, $comments, $level);
            $this -> password = $password;
            $this-> comment_color = $comment_color;
        }
    } 

?>