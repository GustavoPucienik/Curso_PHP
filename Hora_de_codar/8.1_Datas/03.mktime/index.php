<?php 

    $dataNascimento = mktime(02, 12, 33, 02, 04, 1991);//hora, minuto, segundo // mes, dia, ano

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/y', $dataNascimento);

    echo $dataNascimentoFormatada . "<br>";

    $dataEspecifica = mktime(10, 20, 11, 04, 28, 2040);

    $dataFuturaFormatada = date('d/m/y', $dataEspecifica);

    echo $dataFuturaFormatada;

?>