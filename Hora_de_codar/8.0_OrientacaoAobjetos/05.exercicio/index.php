<?php 

    class Cachorro {

        function latir(){
            echo "AU AUAU";
        }

        function andar($m){
            if($m >= 2 ){

                print("O cachorro andou $m metros<br>");

            } else{

                ($m == 0)? print("O cachorro não andou") :print("O cachorro andou $m metro<br>");

            }
        }

    }//fim class

    $xiba = new Cachorro;

    $xiba->andar(1);
    $xiba->andar(3);
    $xiba->andar(0);

?>