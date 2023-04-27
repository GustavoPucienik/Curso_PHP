<?php 

    $j = 0;

    //Contador; condição; Incremento/decremento
    for($i = 0; $i < 11; $i++){

        echo "Testando for $i <br>";
    }
    echo "<br>";

    //exercicio01
    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $q = "a";

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] % 2 == 0){
            echo "Numero: $arr[$i] <br>" ;
        }
    }
    echo "<br>";

    //exercicio02
    $arr2 = [];

    for($i = 1; $i <= 10; $i++){
        array_push($arr2, $i);
    }
    print_r($arr2);
    echo "<br> <br>";

    //exercicio02
    $arr3 = [];

    for($i = 10; $i <= 20; $i++){
        array_push($arr3, $i);
    }
    for($i = 0; $i < count($arr3); $i++){
        if($arr3[$i] % 2 !== 0){
            echo "Numero impar: $arr3[$i], ";
        }
    }

?>