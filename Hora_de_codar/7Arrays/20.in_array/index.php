<?php 
    //verifica se um item passado por parametro esta no array
    $arr = ["banana", "maça", "batata", "pera", "mamão"];

    in_array("batata", $arr) ? print("há o item no array <br>"):  print("Não há batata no array <br>");

    
    in_array("arroz", $arr) ? print("há o item no array <br>"):  print("Não há o item no array <br>");

?>