<?php 

    $arr = ["Gustavo","Brasil", "Portugues", 3, true, "palavra", [], 7, 8];
    $x = count($arr);
    $y = 0;

    while($y < $x){
        if(is_string($arr[$y])){
            echo $arr[$y] . "<br>";
        }
        $y++;
    }
?>