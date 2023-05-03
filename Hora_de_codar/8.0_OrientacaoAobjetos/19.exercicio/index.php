<?php 

    class Cachorro {
        public $nome;
        public $raca;
        public $cor;
        function __construct($nome,$raca, $cor){

            $this->nome = $nome;
            $this->raca = $raca;
            $this->cor = $cor;

        }
    public function exibirAnimal(){
        echo "O nome do cachorro é $this->nome, da raça $this->raca e da cor $this->cor.<br>";
    }
    }

    $omar = new Cachorro("Omar", "Vira-lata", "Caramelo");

    $omar->exibirAnimal();

    $nome = "Tubarão";
    $raca = "Pinscher";
    $cor = "Cinza";

    $tubarao = new Cachorro($nome,$raca,$cor);

    $tubarao->exibirAnimal();


?>