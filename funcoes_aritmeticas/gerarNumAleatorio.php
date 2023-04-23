<?php

    $min = 0;
    $max = 100;

    $num = mt_rand($min, $max);// numero aleatorios 
    //rand() - 1951 - Linear Congrential Gererator
    //mt_rand() - 1997 - Mersenne Twister
    //ramdom_int() gera numeros aleatorios criptograficamente seguros

    echo "Gerando um número aleatório entre $min e $max... \n";
    echo "O numero gerado foi $num";
?>