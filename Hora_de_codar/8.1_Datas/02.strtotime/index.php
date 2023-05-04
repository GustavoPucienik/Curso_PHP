<?php 

    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";
    
    $dezDias = strtotime("10 days");

    echo $dezDias . "<br>";

    $dataAtualMais5 = date('d/m/y', $cincoDias);

    echo $dataAtualMais5 . "<br>";
    
    $dataAtualMais10 = date('d/m/y', $dezDias);
    echo $dataAtualMais10 . "<br>";
    

    $doismeses = strtotime("2 months");
    echo $doismeses . "<br>";
    $dataAtualMais2mes = date('d/m/y', $doismeses);
    echo $dataAtualMais2mes . "<br>";


    $dozeanos = strtotime("12 years");
    $dataAtualMais12anos = date('d/m/y', $dozeanos);
    echo $dataAtualMais12anos . "<br>";

?>