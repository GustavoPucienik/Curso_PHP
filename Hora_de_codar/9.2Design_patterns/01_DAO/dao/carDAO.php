<?php 

    include_once("models/car.php");

    class CarDAO implements CarDAOinterface {

        private $conn;
        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll(){

            $cars = [];

            $stmt = $this->conn->query("SELECT * FROM cars");

            $data = $stmt->fetchAll();

            foreach ($data as $item) {
                $car = new Car();
                $car->setid($item['id']);
                $car->setbrand($item['brand']);
                $car->setkm($item['km']);
                $car->setcolor($item['color']);

                $cars[] = $car;
            }

            return $cars;

        }

        public function create(Car $car){

            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindParam(":brand", $car->getbrand());
            $stmt->bindParam(":km", $car->getkm());
            $stmt->bindParam(":color", $car->getcolor());

            $stmt->execute();

        }

    }

?>