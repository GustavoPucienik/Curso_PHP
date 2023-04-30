<?php 

    $frase = "O rato roeu o rei de Roma";
        $a = 0;

    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] == "a"){
            $a++;
        }
    }
        echo "Numeros de a: $a";
?>