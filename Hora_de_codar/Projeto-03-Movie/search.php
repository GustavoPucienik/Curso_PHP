<?php 
    require_once("templates/header.php");
    require_once("dao/movieDAO.php");

    //DAO dos filmes
    $movieDAO = new MovieDAO($conn, $BASE_URL);

    //Resgata busca do usuário
    $q = filter_input(INPUT_GET, "q");

    $movies = $movieDAO->findByTitle($q);

?>
    <div id="main-container" class='container-fluid'>
        <h2 class="section-title" id="search-title">Você esta buscando por: <span id="search-result"></span> <?= $q ?></h2>
            <p class="section-description">Resultados de busca retornado com base na sua pesquisa.</p>
        <div class="movies-container">
            <?php foreach($movies as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($movies) === 0): ?>
                <p class="empty-list">Não há filmes para esta busca, <a href="<?= $BASE_URL?>index.php">voltar</a></p>
            <?php endif; ?>
        </div>
    </div>

<?php 
    require_once("templates/footer.php");
?>