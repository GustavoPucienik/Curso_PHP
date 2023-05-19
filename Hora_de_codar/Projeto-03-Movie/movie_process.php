<?php 

require_once("globals.php");
require_once("db.php");
require_once("models/movie.php");
require_once("models/message.php");
require_once("dao/userDAO.php");
require_once("dao/movieDAO.php");

$message = new Message($BASE_URL);
$userDAO = new UserDAO($conn,$BASE_URL);
$movieDAO = new MovieDAO($conn,$BASE_URL);

// Resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//Resgata dados do usuario
$userData = $userDAO->verifyToken();

if ($type == "create") {
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");
    $image = filter_input(INPUT_POST, "image");

    $movie = new Movie();

    //validação minima de dados
    if (!empty($title) && !empty($description) && !empty($category)) {

        $movie->title = $title;
        $movie->description = $description;
        $movie->trailer = $trailer;
        $movie->category = $category;
        $movie->length = $length;
        $movie->image = $image;
        $movie->users_id = $userData->id;

        //upload imagem do filme
        if (isset($_FILES["image"])) {

            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
            $jpgArray = ["image/jpeg", "image/jpg"];

            //chegando tipo da imagem
            if (in_array($image["type"],$imageTypes)) {

                //checa se imagem é jpeg
                if(in_array($image["type"], $jpgArray)){
                    $imagefile = imagecreatefromjpeg($image["tmp_name"]);
                }else{
                    $imagefile = imagecreatefrompng($image["tmp_name"]);

                }

                //Gerando o nome da imagem
                $imageName = $movie->imageGenerateName();

                imagejpeg($imagefile, "./img/movies/" . $imageName, 100);

                $movie->image = $imageName;

            } else{
                $message->setMessage("Tipo invalido de imagem(Only png, jpeg or jpg)", "error", "back");
            }


        }
            $movieDAO->create($movie);

    } else{

        $message->setMessage("Você precisa adicionar pelo menos, titulo, descrição e categoria!", "error", "back");

    }
}else if($type === "delete"){

    // Recebe os dados do form
    $id = filter_input(INPUT_POST, "id");

    $movie = $movieDAO->findById($id);

    if($movie) {

      // Verificar se o filme é do usuário
      if($movie->users_id === $userData->id) {

        $movieDAO->destroy($movie->id);

        } else{
            
            $message->setMessage("Informações invalidas!", "error", "index.php");
        }

    }else{

    $message->setMessage("Informações invalidas!", "error", "index.php");

    }

}
 else {
}

?>