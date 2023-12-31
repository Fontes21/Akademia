<?php
    include_once("lista.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/estilo.css" rel="stylesheet">
</head>
<body>

    <h1>Lista de usuários</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" minlength="3" required><br><br>

        <label>email:</label>
        <input type="text" name="email" minlength="3" required><br><br>

        <label>cidade:</label>
        <input type="text" name="cidade" minlength="3" required><br><br>

        <input type="submit" name="inserir" value="Inserir">

        <?php

            if ( isset($_REQUEST["inserir"]) ) //evitar que o procedimento seja executado sem apertar o botão
            {
                $p = new Produto(); //criar objeto da classe Produto
                $p->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["cidade"]); // encapsular os valores do form no objeto produto
                
                echo $p->inserirProduto() == true ?
                        "<p>cadastro feito.</p>" :
                        "<p>Ocorreu um erro.</p>";
            }
        ?>

    </form>

    <section class="lista">

            <table>
                <tr>
                    <th>Nome</th>
                    <th>email</th>
                    <th>cidade</th>
                </tr>

            <?php

                $p = new Produto(); //criar objeto da classe Produto
                $lista = $p->listarProduto();

                foreach ($lista as $item) {
                   echo "
                        <tr>
                            <td> " . $item["nome"] . "</td>
                            <td> " . $item["email"] . "</td>
                            <td> " . $item["cidade"] . "</td>
                            <td> <a href='excluirProduto.php?pid=" . $item["idProduto"] .  "'>Excluir</a> </td>
                        </tr>
                        ";
                }

            ?>

            </table>
    </section>
    
</body>
</html>