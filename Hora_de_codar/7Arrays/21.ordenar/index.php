<?php //sort para crescente   //rsort para decrescente

    $arr = [2, 1, 9, 7, 6, 4, 3, 5, 8, 0];

    print_r($arr);
    echo "<br>-<br>";
    sort($arr);
    print_r($arr);
    echo "<br>-<br>";

    rsort($arr);
    print_r($arr);

?>