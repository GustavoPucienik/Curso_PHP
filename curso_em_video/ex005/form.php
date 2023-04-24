<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="superglobais.php?Tipo=Aluno&Turno=Noite" method="post">
            <label for="usu">Usuário</label>
            <input type="text" name="usu">
            <label for="senha">Senha</label>
            <input type="password" name="senha" required>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>