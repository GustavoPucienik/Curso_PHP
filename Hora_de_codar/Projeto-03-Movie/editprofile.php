<?php 
    require_once("templates/header.php");
    require_once("templates/header.php");

    $userDAO = new UserDAO($conn, $BASE_URL);
    $userData = $userDAO->verifyToken(true);


?>
    <div id="main-container" class='container-fluid'>
        <h1>Edição de perfil</h1>
    </div>

<?php 
    require_once("templates/footer.php");
?>