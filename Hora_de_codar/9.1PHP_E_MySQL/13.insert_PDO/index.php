<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //
    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUE (:nome, :descricao)");

    $nome = "Suporte monitor";
    $descricao = "O suporte está novo e na caixa ainda.";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();
    
?>