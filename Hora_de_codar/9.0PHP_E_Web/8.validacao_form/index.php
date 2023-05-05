<?php 

    $validacoes = [];

    if(count($_POST) > 0){

        if($_POST['nome'] == ""){
            $validacoes[] = "Por favor, preencha o nome do Usuario!";
        }

        if($_POST['email'] == ""){
            $validacoes[] = "Por favor, preencha o email do Usuario!";
        }
        
        if($_POST['senha'] == ""){
            $validacoes[] = "Por favor, preencha a senha do Usuario!";
        }
        
        if($_POST['senha'] != $_POST['confirma']){
            $validacoes[] = "A senha e a confirmação estão diferentes!";
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="email" name="email" placeholder="Digite seu email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="password" name="confirma" placeholder="Confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>