<?php 
    //podemos criar variaveis rapidamente de arrays associativos;
    $arr = [
        'cor' => 'Vermelho',
        'forma' => 'retangular',
        'material' => 'aço'
    ];
    print_r($arr);
    echo "<br>";

    extract($arr);

    echo "variavel cor: $cor <br>";
    echo "variavel forma: $forma <br>";
    echo "variavel material: $material <br>";

    $pessoa = [
        'nome' => 'João',
        'idade' => 29
    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";
?>