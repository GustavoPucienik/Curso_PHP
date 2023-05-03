<?php 

    interface Caracteristica {

        const nome = "Gustavo";

        public function falar();
    }

    class Humano implements Caracteristica{

        public $idade = 20;
        public function falar(){
            echo "Olá mundo<br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }

    }

    $gustavo = new Humano;

    $gustavo->falar();

?>