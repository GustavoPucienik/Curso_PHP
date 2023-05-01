<?php 

    $arr = [
        [1,2,3,4],
        [2, 4, 6, 8],
        [3, 6, 9, 12]
    ];

    //loop no array
    for($i =0; $i < count($arr); $i++){

        echo "Imprimindo array externo " . ($i) . "<br>";
        for ($j=0; $j < count($arr[$i]); $j++) { 
            echo $arr[$i][$j] . "<br>";
        }

    }
?>