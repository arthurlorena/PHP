<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
            //importando os dados
            require_once("data/produtos.php");

            //importando as funções
            require_once("php/Produto.php");

           // exibindo os produtos na tela
            foreach ($produtos as $produto) {
                include("views/card.php");
            }

        ?>
    </div>
</body>
</html>