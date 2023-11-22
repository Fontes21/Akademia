<?php
    include_once("class/Produto.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $p = new usuario();
        $p->buscarusuario($_GET["pid"]);

        echo "
            <form method='POST'>
            <label>Nome:</label>
            
            <input type='text' name='nome' minlength='3' value='" . $p->getNome() . "' required><br><br>
            <label>Valor:</label>
            
            <input type='text' name='dtnascimento' minlength='3' value='" . $p->getdtnascimento() . " ' required><br><br>
            <label>Categoria:</label>
            
            <input type='submit' name='atualizar' value='Atualizar'>
        ";

        if ( isset($_REQUEST["atualizar"]) ) //evitar que o procedimento seja executado sem apertar o botão
        {

            $p->setNome($_REQUEST["nome"]);
            $p->setdtnascimento($_REQUEST["dtnascimento"]);

            echo $p->atualizarProduto($_GET["pid"]) == true ?
                    "<p>usuário cadastrado.</p>" :
                    "<p>Ocorreu um erro.</p>";
        }
    
?>

</form>
</body>
</html>