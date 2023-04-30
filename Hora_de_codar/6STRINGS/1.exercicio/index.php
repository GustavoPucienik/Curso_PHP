<?php 
    $arr = [
        'Porta' => 100,
        'Maçaneta' => 5,
        'Motor' => 2000,
        'Retrovisor' => 8
    ];

    function itensCaros($arr){

        $arrItensCaros = [];

        foreach($arr as $item => $preco){

           if($preco > 10){

            array_push($arrItensCaros, $item);

           } 

        }

        return $arrItensCaros;

    }

    $novoArr = itensCaros($arr);

    print_r($novoArr);
?>