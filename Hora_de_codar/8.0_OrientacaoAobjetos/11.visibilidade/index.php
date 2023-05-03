<?php 

    class Car {
        public $rodas = 4;
        private $vidro = "Sem pelicula";
        protected $portas = 4;
        public function getVidro(){
            return $this->vidro;
        }
        public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico {

        public function alterarRodas($obj){
            $obj->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }

    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $gustavo = new Mecanico;

    $gustavo->alterarRodas($carro);

    echo $carro->rodas . "<br>";
    //não pode alterar por que é privado
    //$gustavo->colocarPelicula($carro, "Com pelicula");

    echo $carro->getVidro() . "<br>";

    // $carro->vidro = "teste";//NAO MUDA PQ VIDRO É PRIVADO

    //echo $carro->portas . "<br>"; // tbm não da certo
    
    echo $carro->getPortas() . "<br>";

?>