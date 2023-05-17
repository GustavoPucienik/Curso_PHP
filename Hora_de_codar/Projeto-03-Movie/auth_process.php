<?php 

require_once("globals.php");
require_once("db.php");
require_once("models/user.php");
require_once("models/message.php");
require_once("dao/userDAO.php");

$message = new Message($BASE_URL);

// resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

// Verificação do tipo de formulario
if($type === "register"){

    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    //Verificação de dados
    if ($name && $lastname && $email && $password) {


        
    } else {

        //Enviar uma msg de erro, de dados faltantes
        $message->setMessage("Por favor preencha todos os campos", "error", "back");

    }

} else if($type === "login"){}
?>