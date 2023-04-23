<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
        $num = $_POST["numero"] ?? 0;
        $ant = -1 + $num;
        $suc = 1 + $num;
    ?>
<body>
    <section>
        <h1>Resultado final:</h1>
       <?php echo "<p>Numero escolhido:  $num</p>
                   <p>Numero antecessor:  $ant</p>
                   <p>Numero sucessor:  $suc</p>
       "?>
        <button id="btn">Voltar</a></p>
    </section>
    
</body>
<script> 
 const btnvoltar = document.getElementById("btn")
 btnvoltar.addEventListener("click", () => window.location.href='index.php')
</script>
</html>