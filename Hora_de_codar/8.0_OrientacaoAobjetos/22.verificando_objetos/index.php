<?php 
    //is_object() verifica se uma variavel é um objeto
    //get_class() verifica a classe de um objeto
    //method_ecists() verifica se um metodo existe no objeto

    class Humano {
        public function falar(){
            echo "Ola <br>";
        }
    }

    $gustavo = new Humano;

    $teste = 10;

    if(is_object($gustavo)){
        echo "É um objeto <br>";
    }else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)){
        echo "É um objeto <br>";
    }else {
        echo "Não é um objeto <br>";
    }

    echo get_class($gustavo);

    if(method_exists($gustavo, "falar")){
        echo "<br>Metodo existe <br>";
    } else{
        echo "Metodo não existe <br>";
    }


    if(method_exists($gustavo, "abc")){
        echo "<br>Metodo existe <br>";
    } else{
        echo "Metodo não existe <br>";
    }

?>