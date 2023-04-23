<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        //0x = hexadecimal  0b = binario  0 = octal
        //$num = 0;
        //echo "O valor da variável é $num";

        //$v = 300;
        //var_dump($v);//mostra o tipo primitivo das variaveis

        //$num = (int)3e2; // 3x 10(2) coerção
        //echo "o valor é $num ";
        //var_dump($num)

        //$num = (float)"950";
        //var_dump($num)

        //$vet = [6, 2, 3, 7, 8];
        //var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>