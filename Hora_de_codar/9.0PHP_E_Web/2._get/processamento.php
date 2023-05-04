<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método get</title>
</head>
<?php 

    if($_GET["nome"]){
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
    } else {
        $nome = "Gus";
        $idade = 21;
    }
?>
<body>
    <h1>O seu nome é <?= $nome?>, e a sua idade é <?= $idade?></h1>
</body>
</html>