<?php 
    $arr = [];

    print_r($arr);
    echo "<br>";

    $arr[0] = 10;
    $arr[1] = 12;
    print_r($arr);
    echo "<br>";

    $arr[3] = "Gus";
    print_r($arr);
    echo "<br>";

    $arrAsso = [];
    print_r($arrAsso);
    echo "<br>";
    
    $arrAsso["Carro"] = "Gol";
    print_r($arrAsso);
    echo "<br>";
    
    $arrAsso["Moto"] = "BMW1000R";
    $arrAsso["Aviao"] = "Boeing";
    print_r($arrAsso);echo "<br><br>";
    


    //adicionando item ao fim da arr

    $arr2 = [1, 2, 3];
    $arr2[] = 4;
    $arr2[] = 20;
    print_r($arr2);
?>