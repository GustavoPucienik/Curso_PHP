<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo global</title>
</head>
<body>
<?php 
   
    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5>2){ //tbm compartilha do escopo global
        $teste = "dsa";

        echo "$teste if 1 <br>";
    }

    echo "$teste global 2 <br>";

    function funcao(){

        $teste = "varfunc";
        echo "$teste local <br>";

    }

    funcao();

    function testandoGlobal(){
        global $teste;
        $teste = 12;
        echo "$teste global função <br>";
    }

    testandoGlobal();

?>
</body>
</html>
