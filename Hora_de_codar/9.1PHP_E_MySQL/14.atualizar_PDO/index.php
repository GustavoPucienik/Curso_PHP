<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //
    $id = 6;
    $nome = "Teclado microsoft";
    $descricao = "Este teclado é novo e está na caixa.";

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();

?>