<?php 

    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){

            echo self::BRACOS . "<br>";

        }

    }

    $gustavo = new Humano;

    echo $gustavo::OLHOS . "<br>";

    $gustavo->mostrarConstante()

?>