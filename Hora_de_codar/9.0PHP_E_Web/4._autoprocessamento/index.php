<?php 

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])){

        $nome = $_POST["nome"];

    }

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOPROCESSAMENTO</title>
</head>
<body>
    <?php 
        if($method == "GET"):
    ?>
    <form action="index.php" method="post">

        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>
    <?php 
    else:
    ?>

        <h1>O seu nome é <?=$nome?></h1>

    <?php 
    endif;
    ?>
</body>
</html>