<?php 

require_once("globals.php");
require_once("db.php");
require_once("models/message.php");
require_once("dao/userDAO.php");

$message = new Message($BASE_URL);

$flassMessage = $message->getMessage();

if (!empty($flassMessage["msg"])) {
    //Limpar a mensagem
    $message->clearMessage();
}

    $userDAO = new UserDAO($conn, $BASE_URL);

    $userData = $userDAO->verifyToken(false);

    //print_r($userData); exit;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="shot icon" href="<?= $BASE_URL?>img/moviestar.ico">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL?>css/style.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL?>" class="navbar-brand">
                <img src="<?= $BASE_URL?>img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="true" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
        <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <?php if($userData): ?>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>newmovie.php" class="nav-link">
                        <i class="far fa-plus-square"></i> Incluir filme
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>dashboard.php" class="nav-link">
                        <i class="far fa-plus-square"></i> Meus filmes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>editprofile.php" class="nav-link bold">
                        <?= $userData->name ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>logout.php" class="nav-link">
                        <i class="far fa-plus-square"></i> Sair
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>auth.php" class="nav-link"> Entrar / Cadastrar</a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </nav>
    </header>
    <?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
        <p class="msg <?= $flassMessage["type"]?>"><?= $flassMessage["msg"]?></p>
    </div>
    <?php endif; ?>