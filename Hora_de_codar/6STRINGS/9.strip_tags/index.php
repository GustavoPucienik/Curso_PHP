<?php 

    $textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textoHtml;
    $salvartextobanco = strip_tags($textoHtml);
    echo $salvartextobanco;
?>