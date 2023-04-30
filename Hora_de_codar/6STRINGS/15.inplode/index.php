<?php 
    $arr = ["Maça", "Pera", "Mamão", "Batata"];
    $str = implode(", ",$arr);
    echo "$str <br>";

    $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

    $str2 = implode(" <=> ", $arr2);
    echo "$str2 <br>";


    //exercicio

    $array = ["O", "PHP", "é", "muito", "legal"];
    $str0 = implode(" ",$array);
    echo "$str0";
?>