<html lang="pt-br"></html>
<?php 

    function alteraDados($nome, $idade){
        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome , $idade];
    }

    $dados = alteraDados("Gustavo", 20);

    print_r($dados);

    echo "<br>";

    echo "$dados[0], $dados[1]";
?>