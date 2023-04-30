<?php 

    $str = "Esta é minha string";
    $minha = substr($str, 8, 5);//STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string";

    $novaString = substr($str2, 8);// omitir ultimo comprimento == pega a string do indice até o fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3);

    echo $novaString2 . "<br>";
?>