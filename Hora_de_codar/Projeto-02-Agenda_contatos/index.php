<?php 
    include_once("templates/header.php")
?>
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ""): ?>
            <p id="msg"><?php $printMsg?></p>
            <?php endif; ?>
            <h1 id="main-title">Minha agenda</h1>
            <?php if(is_countable($contacts) && count($contacts) > 0): ?>
                <table class="table" id="contacts-table">
                    <thead>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $contact): ?>
                         <tr>
                            <td scope="row"><?php $contact['id'] ?></td>
                            <td scope="row"><?php $contact['name'] ?></td>
                            <td scope="row"><?php $contact['phone'] ?></td>
                            <td class="actions">
                                <a href="#"><i class="fa fa-eye check-icon"></i></a>
                                <a href="#"><i class="fa fa-edit edit-icon"></i></a>
                                <button type="submit"><i class="fas fa-times delete-icon"></i></button>
                            </td>
                         </tr>   
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL?>create.php">Clique aqui para adicionar</a>.</p>
            <?php endif; ?>
    </div>
<?php 
    include_once("templates/footer.php")
?>