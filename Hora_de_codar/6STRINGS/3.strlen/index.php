<?php 

    $str1 = "Esta string é muito grande";
    $str2 = "Esta não";
    echo strlen($str1) . ".<br>";
    echo strlen($str2) . ".<br>";

    $length1 = strlen($str1);
    $length2 = strlen($str2);

    if($length1 > $length2){
        echo "A length 1 é maior que a length 2.";
    }else{
        echo "A length 2 é maior que a length 1.";
    }
?>