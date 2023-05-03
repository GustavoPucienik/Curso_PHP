<?php 

    class Pessoa{

        function falar(){
            echo "Olá eu sou um objeto! <br>";
        }

        function somar($x,$y){
            echo $x + $y . " é a resposta<br>";
        }

    }

    $gustavo = new Pessoa;

    $gustavo->falar();
    $gustavo->falar();

    $joao = new Pessoa;

    $joao->falar();
    $joao->somar(3,4);
    $gustavo->somar(57,34);

?>