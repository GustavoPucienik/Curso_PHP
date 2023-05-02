<?php 

    $ranking = [
        "Gustavo" => 300,
        "Jonas" => 200,
        "Ana" => 150,
        "Joana" => 160,
        "Mariana" => 100,
        "Joao" => 75
    ];

    asort($ranking);
    print_r($ranking);

?>

<h1>Ranking:</h1>
<ol>
<?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> >> <?= $pontuacao ?> pontos</li>
<?php endforeach; ?>
</ol>