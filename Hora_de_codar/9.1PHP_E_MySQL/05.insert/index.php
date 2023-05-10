<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    //

    $table = "itens";
    $nome = "Xicara";
    $descricao = "uma xicara usada, vermelha";

    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();

?>