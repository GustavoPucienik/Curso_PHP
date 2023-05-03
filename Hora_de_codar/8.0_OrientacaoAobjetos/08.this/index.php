<?php 

    class Animal {

        public $nome;

        function escolherNome($nome){
            $this->nome = $nome;
        }//func
        function miar(){
            echo "Miauu!!! <br>";
        }

        function miarForte(){
            echo "MIIAAUUUUU!!! <br>";
        }

    }// Class

    $zoe = new Animal;
    $isis = new Animal;

    $zoe->escolherNome("Zoe");
    $isis->escolherNome("Isis");

    echo "O nome do animal é: $zoe->nome.<br>";
    echo "e do outro é: $isis->nome.<br>";

    $zoe->miar();
    $isis->miarForte();

?>