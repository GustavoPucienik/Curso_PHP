<?php 

    $arr = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $diff = array_diff($arr,$arr2);

    print_r($diff);
    echo "<br>
            Retornou os numeros do primeiro array que não tem no segundo<br>-<br>";

    $diff2 = array_diff($arr2,$arr);
    print_r($diff);
    echo "<br>Retornou os numeros do segundo array que não tem no primeiro<br><br>";

?>