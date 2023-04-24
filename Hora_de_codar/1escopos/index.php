<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $x = 10;
    echo "$x global <br>";

    function teste(){
        $x = 5;

        echo "$x local <br>";
    }

    teste();

    echo "$x global <br>";

    teste();

    function testando(){

        $x = 12;

        echo "$x local 2 <br>";
    }

    $x = 99;

    teste();
    testando();
    echo "$x global <br>";
?>
</body>
</html>
