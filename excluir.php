<?php
    include_once("excluir.php");
    $p = new Produto();

    $p->excluir($_GET["pid"]);
    echo "usuário excluído";
?>

<a href="excluir.php">Voltar</a>

