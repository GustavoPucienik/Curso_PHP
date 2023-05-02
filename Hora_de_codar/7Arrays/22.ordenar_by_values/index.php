<?php 
    //ordernar pelos valores das chaves arsort decrescente
    //ordenar pelas chaves ksort

    $arr = [
        'Gustavo' => 50,
        'Pedro' => 20,
        'Joaquim' => 30,
        'Maria' => 40
    ];

    arsort($arr);
    print_r($arr);
    echo "<br>";

    $arr2 = [
        'Gustavo' => 10,
        'Pedro' => 20,
        'Ana' => 30,
        'Carla' => 40,
        'Mariana' => 50
    ];

    ksort($arr2);
    print_r($arr2);
    echo "<br>";

?>