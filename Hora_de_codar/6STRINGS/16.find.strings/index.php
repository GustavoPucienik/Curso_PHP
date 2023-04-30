<?php 
    $str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";
    $palavra = "metodo";
    $testeFind = strpos($str, $palavra);
    echo "$testeFind <br>";

    $testeFind1 = strpos($str, "Java");
    echo $testeFind1 == false? "Não encontrou<br>" : "";

?>