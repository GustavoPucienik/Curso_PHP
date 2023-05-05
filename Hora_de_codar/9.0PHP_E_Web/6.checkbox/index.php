<?php 

    if(isset($_POST['ingredientes'])) {

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input com multiplos valores</title>
</head>
<body>
    <form action="index.php" method="post">

    <div>
        <input type="checkbox" name="ingredientes[]" value="Tomate">Tomate
    </div>

    <div>
        <input type="checkbox" name="ingredientes[]" value="Abobora">Abóbora
    </div>

    <div>
        <input type="checkbox" name="ingredientes[]" value="Feijao">Feijão
    </div>

    <div>
        <input type="checkbox" name="ingredientes[]" value="Alface">Alface
    </div>

    <div>
        <input type="checkbox" name="ingredientes[]" value="Cebola">Cebola
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>

    </form>
</body>
</html>