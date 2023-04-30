<?php 
    $str = "Testando o metodo explode";
    $fraseArray = explode(" ",$str);
    print_r($fraseArray);
    echo "<br>";

    $fraseArray2 = explode(",",$str);
    print_r($fraseArray2);
    echo "<br>";

    $frase = "Carro, Avião, Moto";
    $fraseArray3 = explode(",",$frase);
    print_r($fraseArray3);
    echo "<br>";

    for($i = 0; $i < count($fraseArray3); $i++){
        echo "$fraseArray3[$i].<br>";
    }
    echo "<br>";


    //exercicio

    $exer = "carro - navio - helicoptero - barco - jangada";
    $exerArr = explode("-",$exer);
    $arr = [];
    for($i = 0; $i < count($exerArr); $i++){
        array_push($arr ,$exerArr[$i]);
    }
    print_r($arr);
?>