<?php 

require_once("globals.php");
require_once("db.php");
require_once("models/user.php");
require_once("models/message.php");
require_once("dao/userDAO.php");

$message = new Message($BASE_URL);

$userDAO = new UserDAO($conn, $BASE_URL);

// Resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//Atualizar o usuario
if ($type === "update") {

    //Resgata dados do usuario
    $userData = $userDAO->verifyToken();

    //recebe dados do post
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $bio = filter_input(INPUT_POST, "bio");

    // Criar um novo objeto de usuário
    $user = new User();

    //preencher os dados do usuario
    $userData->name = $name ;
    $userData->lastname = $lastname ;
    $userData->email = $email ;
    $userData->bio = $bio ;

    $userDAO->update($userData);

    //Atualizar senha do usuario
} else if($type === "changepassword"){

}else {
    $message->setMessage("Informações invalidas", "error", "index.php");
}

?>