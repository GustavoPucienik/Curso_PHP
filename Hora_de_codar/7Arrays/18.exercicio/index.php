<?php 

    $pessoas = [
        'Gustavo' => 20,
        'Joao' => 30,
        'Godolfredo' => 12,
        'Enzo' => 78
    ];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nomes => $idade): ?>
        <tr>
            <td><?= $nomes; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>