<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        //var_dump($_GET); // ($_GET && $_POST && $_COOKIES) === $_REQUEST

        $nome = $_GET["nome"] ?? "nome";// se não receber dados ele recebe o valor "nome" por padrão
        $sobrenome = $_GET["sobrenome"] ??"sobrenome";//se não receber dados ele recebe o valor "sobrenome" por padrão
        echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é o meu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>