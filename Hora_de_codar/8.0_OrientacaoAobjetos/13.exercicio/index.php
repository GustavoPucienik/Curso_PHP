<?php 

    class Humano {
        public $maos = 2;
        public $pernas = 2;

        public function falar(){
            echo "Olá mundo!<br>" ;
        }
    }

    class Professor extends Humano{

        public $disciplina = "Matematica";

        public function lecionando(){
            echo "O professor está dando aula de $this->disciplina <br>";
        }

    }

    $marcos = new Humano;

    echo "$marcos->maos <br>";
    $marcos->falar();

    $joao = new Professor;

    echo "$joao->pernas <br>";
    echo "$joao->disciplina<br>";

    $joao->falar();

    $joao->lecionando();

?>