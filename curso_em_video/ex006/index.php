<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php //Capturando os dados do formulario retroalimentado
    $num0 = $_GET['v1'] ?? 0;
    $num1 = $_GET['v2'] ?? 0;

    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$num0?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$num1?>">
            <input type="submit" value="Somar">
        </form>
<br>
        <section>
            <h2>Resultado da soma</h2>
            <?php
                $soma = $num0 + $num1;
                print "<p> A soma entre os valores $num0 e $num1 é igual a $soma";
            ?>
        </section>
    </main>
</body>
</html>