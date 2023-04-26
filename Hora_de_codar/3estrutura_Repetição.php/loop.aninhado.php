<?php 

    $i = 1;

    while($i <= 10){
        echo "Looping externo foi executado $i vez" . ($i >=2? 'es<br>': '<br>');
        $j = 1;
        while($j <= 5){
            echo "Looping interno $j <br>";
        $j++;
        }
        $i++;
    }
?>