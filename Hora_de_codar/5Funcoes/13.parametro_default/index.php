<?php 

    function pdefault($a = "a pé", $b = "20"){//é uma boa pratica colocar os argumentos default
                                              //por ultimo para não dar erro
        echo "Ando mais de $a, e tenho $b anos de idade <br>";
    };

    pdefault();
    pdefault("carro",50);
    $x = "moto";
    pdefault($x);

?>