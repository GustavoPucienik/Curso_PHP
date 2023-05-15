<?php 

    include_once("db.php");
    include_once("dao/carDAO.php");

    $car = new CarDAO($conn);

    $brand = $_POST['brand'];
    $km = $_POST['km'];
    $color = $_POST['color'];

    $newCar = new Car();

    $newCar->setbrand($brand);
    $newCar->setkm($km);
    $newCar->setcolor($color);

    $car->create($newCar);

    header("Location: index.php");

?>