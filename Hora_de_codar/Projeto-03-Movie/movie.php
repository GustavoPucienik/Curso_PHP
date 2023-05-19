<?php
    require_once("templates/header.php");
    require_once("models/movie.php");
    require_once("dao/movieDAO.php");
    
    $id = filter_input(INPUT_GET, "id");
    $movie;

    $movieDAO = new MovieDAO($conn, $BASE_URL);

    if (empty($id)) {

        $message->setMessage("O filme não foi encontrado!","error", "index.php");

    } else{

        $movie = $movieDAO->findById($id);

        //verifica
        if (!$movie) {
            
        $message->setMessage("O filme não foi encontrado!","error", "index.php");

        }

    }

    //Checar se o filme é do usuário
    $userOwnsMovie = false;

    if (!empty($userData)) {

        if ($userData->id === $movie->users_id) {

            $userOwnsMovie = true;

        }
        
    }

    //resgatar reviews do filme
    ?>