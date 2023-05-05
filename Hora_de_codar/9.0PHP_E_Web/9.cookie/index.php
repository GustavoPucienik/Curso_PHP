<?php 

    setcookie("nome", "Gustavo", time() + 3600);

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Olá mundo!</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem-vindo <?= $nome?></p>
    <?php endif; ?>
</body>
</html>