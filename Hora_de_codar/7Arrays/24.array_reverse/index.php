<?php 

    $arr = [1, 2, 3, 4, 5];

    $arrRev = array_reverse($arr);

    print_r($arr);
    echo "<br>";
    print_r($arrRev);
    echo "<br>";
    echo "<br>";
    
    $arr1 = [1, "Gus", 3, true, [1, 2, 3]];
    
    $arrRev1 = array_reverse($arr1);
    
    print_r($arr1);
    echo "<br>";
    print_r($arrRev1);
    echo "<br>";
?>