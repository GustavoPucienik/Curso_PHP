<?php 

    class Humano {

        public $idade = 20;

        public function falar(){
            echo "Olá Mundo!<br>";
        }

        private function gritar(){
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessaGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "lalala <br>";
        }

        public function acessaFalarBaixinho(){
            $this->falarBaixinho();
        }

    }

    class Programador extends Humano {

        public function falarBaixinhoPro(){
            echo "lalala <br>";
        }

    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessaGritar();

    $gustavo = new Programador;

    echo $gustavo->idade . "<br>";

    $gustavo->falar();
    $gustavo->acessaGritar();
    $gustavo->FalarBaixinhoPro();

?>