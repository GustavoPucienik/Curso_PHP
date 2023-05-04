<?php 

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2023, 06, 03);
$dataC->setDate(2023, 06, 03);
$dataB->setTime(04, 20, 00);
$dataC->setTime(04, 20, 00);
    
    if($dataB > $dataA){
        echo "A data B é maior que a data A<br>";
    } else {
        echo "A data B não é maior que a data A<br>";
    }

    if($dataA < $dataB){
        echo "A data A é maior que a data B<br>";
    }

    if($dataB == $dataC){
        echo "As datas B e C são iguais <br>";
    }

?>