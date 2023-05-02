<?php 

    $carros = [
        'Marca' => 'BMW',
        'Motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'Portas' => 4
    ];

    $chaves = array_keys($carros);

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carros);

    print_r($valores);
    echo "<br>";
?>