<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método get</title>
</head>
<body>

    <form action="cadastro.php" method="post">

        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>

        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Teto solar">Teto solar
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Pelicula">Pelicula
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado">Blindado
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>
<style>

    body{
    display: flex;
    justify-content: center;
    align-items: center;
    }

    form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: aqua;
    padding: 16px;
    }

    div{
        margin: 5px;
    }

</style>
</html>