<?php
$y = 0;

while($y < 10){

    echo "O X é $y <br>";
    if($y === 5){
        echo "Terminando o looping <br>";
        break;
    }
    $y++;
}
    echo "Saiu do looping <br>";
?>