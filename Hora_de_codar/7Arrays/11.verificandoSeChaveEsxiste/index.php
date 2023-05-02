<?php 

    $arr = [
        'nome' => 'Gustavo',
        'idade' => 20
    ];

    if(array_key_exists('nome', $arr)){
        echo "A chave existe. <br>";
    }else {
        echo "A chave não existe. <br>";
    }

    if(array_key_exists('preofissao', $arr)){
        echo "A chave existe. <br>";
    }else {
        echo "A chave não existe. <br>";
    }

    if (isset($arr['teste'])) {
        echo "A chave existe. <br>";
    }else {
        echo "A chave não existe. <br>";
    }
?>