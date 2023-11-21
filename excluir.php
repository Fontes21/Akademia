<?php
    include_once("excluir.php");
    $p = new Produto();

    $p->excluir($_GET["pid"]);
    echo "Produto excluído";
?>

<a href="formProduto.php">Voltar</a>

