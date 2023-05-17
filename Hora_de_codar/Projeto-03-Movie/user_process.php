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

    //upload da imagem
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
        
        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
        $jpgArray = ["image/jpeg", "image/jpg"];

        $ext = strtolower(substr($image["name"], -4));

        //checagem de tipo de imagem
        if (in_array($image["type"], $imageTypes)) {

            //checar se é jpg ou jpeg
            if($ext == ".jpg"){
                $imageFile = imagecreatefromjpeg($image["tmp_name"]);

            }else if($ext == ".png") {
                $imageFile = imagecreatefrompng($image["tmp_name"]);

            }else if($ext == "jpeg") {
                $imageFile = imagecreatefromjpeg($image["tmp_name"]);
            }

            $imageName = $user->imageGenerateName($ext);

            imagejpeg($imageFile, "img/users/" . $imageName, 100);

            $userData->image = $imageName;

        } else {
            $message->setMessage("Tipo invalido de imagem(Only png, jpeg or jpg)", "error", "back");
        }

    }

    $userDAO->update($userData);

    //Atualizar senha do usuario
} else if($type === "changepassword"){

    //receber dados do post
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
    
    //Resgata dados do usuario
    $userData = $userDAO->verifyToken();

    $id = $userData->id;

    if ($password == $confirmpassword) {

        $user = new User();

        //$finalpassword = $user->generatePassword($password); essa func coloca um hash ao inves da senha que esscolhi

        $user->password = $password;//$finalpassword seria aqui no exemplo do prof
        $user->id = $id;

        $userDAO->changePassword($user);

    }else {

        $message->setMessage("As senhas não correspondem!", "error", "back");

    }

}else {
    $message->setMessage("Informações invalidas!", "error", "index.php");
}

?>