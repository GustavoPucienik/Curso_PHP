<?php 

require_once("globals.php");
require_once("db.php");

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css" integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigations">
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
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>auth.php" class="nav-link"> Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="main-container" class='container-fluid'>
        <h1>Corpo do site</h1>
    </div>
    <footer id="footer">
        <div id="social-container">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar filme</a></li>
                <li><a href="#">Adicionar crítica</a></li>
                <li><a href="#">Entrar / Registrar</a></li>
            </ul>
        </div>
        <p>&approxeq; 2023 Gus</p>
    </footer>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.js" integrity="sha512-L6XANV6sOsx9N9c787eDN1pjB2Pzautd3xDgn4cMKuoleHSuCJi5pCDGPCtwE3Bd4A1Olnr0k0aQXbczYzg+wg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>