<?php 

    $arr = [1, 2, 3, 4, 19, 234, 12, 34, 5, 12];

    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");// vai reutilizando a funcao até somar tudo na array

    echo $resultado;

?>