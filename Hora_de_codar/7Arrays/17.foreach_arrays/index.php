<?php 

    $gustavo = [
        'nome' => 'Gustavo',
        'idade' => 20,
        'profissao' => 'Programador'
    ];

    $mario = [
        'nome' => 'Mario',
        'idade' => 24,
        'profissao' => 'encanador'
    ];

    foreach ($gustavo as $carac => $value) {
        
        echo "$carac =>  $value <br>";
    }

    foreach ($mario as $carac => $value) {
        
        echo "$carac =>  $value <br>";
    }
?>