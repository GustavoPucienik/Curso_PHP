<?php 

    $data = new DateTime();

    print_r($data);
    echo "<br>";

    $data->setDate(1999, 12, 01);

    print_r($data);
    echo "<br>";

    $data->setTime(04,20,15);
    
    print_r($data);
    echo "<br>";

?>