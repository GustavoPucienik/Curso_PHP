<?php 

    $carro = [
        'Marca' => 'bmw',
        'rodas' => 4,
        'teto-solar' => true,
        'velocidade_max' => 300,
        'Blindado' => false
    ];

    print_r($carro);

    $marca = $carro['Marca'];
    $velocidade_max = $carro['velocidade_max'];

    echo "</br> O carro é da marca $marca e a velocidade maxima dele é de $velocidade_max"
?>