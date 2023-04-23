<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //$num = number_format(1000, 2, ",", ".");
    //echo "Numero mil formatado: $num";

    //formatação de moedas com internacionalização
    //biblioteca INTL

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrao, 1000,"BRL") . " equivalem a US\$" . 5.17;
    ?>
</body>
</html>