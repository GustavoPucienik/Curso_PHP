<?php 

    if(10 > 0 && 1 < 999) {
        echo "deu certo o if";
    }

    $pessoa = "gus";
    $idade = 21;
    if($pessoa != "joao" && $idade >= 18){
        echo " deu certo";
    }else{
        echo "não deu certo";
    }

    if(10 > 2){
        echo "Entrou no primeiro if <br>";
        if(10 === 11){
            echo "Entrou no segundo if <br>";
        }else{
            echo "Não entrou no segundo item e foi pro else do segundo if <br>";
        }
    }
    else{
        echo "Nem entrou no primeiro if e foi pro else <br>";
    }
?>