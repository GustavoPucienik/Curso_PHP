<?php 

    $raca = "Vira lata";
    $nome = "Turca";
    $idade = 3;
    $cor = "preta";

    $turca = compact("raca", "nome", "idade", "cor");

    print_r($turca);
    echo "<br>";

    foreach($turca as $caracteristicas => $value){
        echo "$caracteristicas: $value. <br>";
    }
?>