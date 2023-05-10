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

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($data);

    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<br>";
    print_r($itens);

?>