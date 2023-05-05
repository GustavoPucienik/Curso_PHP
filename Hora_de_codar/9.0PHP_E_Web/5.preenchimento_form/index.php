<?php 

    $usuario = [

        'nome' => 'Gustavo',
        'idade' => 21,
        'profissao' => 'Programador'

    ];

    if($usuario){

        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autopreenchimento</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?=$nome?>">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite sua idade" value="<?=$idade?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="Digite sua profissão" value="<?=$profissao?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>