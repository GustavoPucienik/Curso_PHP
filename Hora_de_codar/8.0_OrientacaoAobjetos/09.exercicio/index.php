<?php 

    class Carro{

        public $cor;
        public $tetoSolar;
        public$velocidadeMaxima;

        function setVelMax($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelMax(){
            echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
        }


    }// class



    $bmw = new Carro;
    $bmw->cor = "Branca";
    $bmw->tetoSolar = true;
    $bmw ->velocidadeMaxima = 300;
    $bmw->setVelMax(350);

    $bmw->getVelMax();

?>