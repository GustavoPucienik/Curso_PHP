<?php 

    class Car {

        private $id;
        private $brand;
        private $km;
        private $color;


        public function getid(){
            return $this->id;
        }
        public function setid($id){
            $this->id = $id;
        }

        public function getbrand(){
            return $this->brand;
        }
        public function setbrand($brand){
            $this->brand = $brand;
        }

        public function getkm(){
            return $this->km;
        }
        public function setkm($km){
            $this->km = intval($km);
        }

        public function getcolor(){
            return $this->color;
        }
        public function setcolor($color){
            $this->color = $color;
        }


    }


    interface CarDAOinterface {

        public function create(Car $car);
        public function findAll();

    }

?>