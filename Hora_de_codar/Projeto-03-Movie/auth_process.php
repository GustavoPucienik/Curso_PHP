<?php 

require_once("globals.php");
require_once("db.php");
require_once("models/user.php");
require_once("models/message.php");
require_once("dao/userDAO.php");

$message = new Message($BASE_URL);

$userDAO = new UserDAO($conn, $BASE_URL);

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

        //Verifica se as senhas batem
        if ($password === $confirmpassword) {

            //verificar se o email ja está cadastrado no sistema
            if($userDAO->findByEmail($email) === false){

                $user = new User();

                //Criação de token e senha
                $userToken = $user->generateToken();
                $finalPassword = $user->generatePassword($password);

                $user->name = $name;
                $user->lastname = $lastname;
                $user->email = $email;
                $user->password = $password;
                $user->token = $userToken;

                $auth = true;

                $userDAO->create($user, $auth);

            } else{

                //enviar uma msg de erro, usuário ja existe
                $message->setMessage("Usuário ja cadastrado, tente outro email.","error","back");

            }

        } else{

        //Enviar uma msg de erro, de senhas não batem
        $message->setMessage("As senhas não coincidem!", "error", "back");

        }

        
    } else {

        //Enviar uma msg de erro, de dados faltantes
        $message->setMessage("Por favor preencha todos os campos!", "error", "back");

    }

} else if($type === "login"){

$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

// Tenta autenticar usuário
if($userDAO->autenticateUser($email,$password)) {

  $message->setMessage("Seja bem-vindo!", "sucess", "editprofile.php");

// Redireciona o usuário, caso não conseguir autenticar
} else {

  $message->setMessage("Errou a senha e/ou email.", "error", "back");

}

} else {

$message->setMessage("Informações inválidas!", "error", "index.php");

}
?>