<?php 
    include_once("templates/header.php")
?>

    <div class="container">
        <?php include_once("templates/backBtn.php") ?>
        <h1 id="main-title">Criando contato</h1>

        <form action="<?= $BASE_URL?>config/precess.php" method="POST">
            <input type="hidden" name="type" value="create">

            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Preencha o nome" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Preencha o telefone" required>
            </div>
            
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Insira as observações" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php 
    include_once("templates/footer.php")
?>