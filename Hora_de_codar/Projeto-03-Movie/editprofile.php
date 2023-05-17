<?php 
    require_once("templates/header.php");
    require_once("templates/header.php");

    $user = new User();

    $userDAO = new UserDAO($conn, $BASE_URL);
    $userData = $userDAO->verifyToken(true);

    $fullname = $user->getFullName($userData);

    if ($userData->image == "") {
        $userData->image = "user.png";
    }


?>
    <div id="main-container" class='container-fluid edit-profile-page'>
        <div class="col-md-12">
            <form action="<?= $BASE_URL ?>user_process.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="type" value="update">
                <div class="row">
                    <div class="col-md-4">
                        <h1><?= $fullname ?></h1>
                        <p class="page-description">Altere seus dados no formulário abaixo:</p>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Digite o seu nome" value="<?= $userData->name?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Sobrenome:</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Digite o seu sobrenome" value="<?= $userData->lastname?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" readonly class="form-control disabled" name="email" id="email" placeholder="Digite o seu sobrenome" value="<?= $userData->email?>">
                        </div>
                        <input type="submit" class="btn card-btn" value="Alterar dados">
                    </div>
                    <div class="col-md-4">
                        <div id="profile-image-container" style="background-image: url('<?=$BASE_URL?>img/users/<?= $userData->image?>')">
                        </div>
                        <div class="form-group">
                            <label for="image">Foto:</label>
                            <input type="file"  class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio:</label>
                            <textarea name="bio" id="bio" rows="5" class="form-control" placeholder="Conte quem você é e o que faz..."><?= $userData->bio?></textarea>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row" id="change-password-container">
                <div class="col-md-4">
                    <h2>Alterar a senha:</h2>
                    <p class="page-description">Digite a nova senha:</p>
                    <form action="<?= $BASE_URL?>/user_process" method="post">
                    <input type="hidden" name="type" value="changepassword">
                    <div class="form-group">
                        <label for="password">Nova senha:</label>
                        <input type="password" name="password" class="form-control" placeholder="Digite a sua nova senha">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirme a senha:</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirme a sua nova senha">
                    </div>
                        <input type="submit" class="btn card-btn" value="Alterar senha">
                </form>
                </div>
            </div>
        </div>
    </div>

<?php 
    require_once("templates/footer.php");
?>