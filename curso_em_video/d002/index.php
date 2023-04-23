<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <main>
        <h1>Gerar numeros aleatórios</h1>
        <?php
            $min = 0;
            $max = 100;
            $numRandom = mt_rand($min, $max);
            echo "<p>Gerando numero aleatório entre $min e $max.</p>";
            echo "O numero gerado foi $numRandom";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
        </main>

</body>
</html>