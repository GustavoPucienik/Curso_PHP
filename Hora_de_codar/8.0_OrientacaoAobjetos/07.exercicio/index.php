<?php 

    class Pessoa {

        public $nome;
        public $idade;

        function andar($m){
            if($m >= 2 ){

                print("A pessoa andou $m metros!<br>");

            } else{

                ($m == 0)? print("A pessoa não andou!<br>") :print("A pessoa andou $m metro!<br>");

            }
        }

    }

    $gustavo = new Pessoa;

    $gustavo->nome = "Gustavo";
    $gustavo->idade = 29;

    echo "O nome dele é $gustavo->nome e ele tem $gustavo->idade anos.<br>";

    $gustavo->andar(3);

    $joao = new Pessoa;

    $joao->nome = "João";
    $joao->idade = 12;
    echo "O nome dele é $joao->nome e ele tem $joao->idade anos.<br>";

?>