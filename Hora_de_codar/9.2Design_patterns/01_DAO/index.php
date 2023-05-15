<?php 

    include_once("db.php");
    include_once("dao/carDAO.php");

    $carDao = new CarDAO($conn);

    $cars = $carDao->findAll();

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" id="" placeholder="Insira a marca"><br>
        <label for="brand">Km do carro:</label>
        <input type="text" name="km" id="" placeholder="Insira a kilometragem"><br>
        <label for="brand">Cor do carro:</label>
        <input type="text" name="color" id="" placeholder="Insira a cor"><br>
        <input type="submit" value="Salvar">
    </div>
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li><?= $car->getbrand() ?> - <?= $car->getkm() ?> - <?= $car->getcolor() ?></li>
    <?php endforeach; ?>
</ul>