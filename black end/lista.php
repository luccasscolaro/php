<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="twitter (1).png" type="image/x-icon">
    <link rel="stylesheet" href="batePapo.css">
    <title>lista de posts</title>
</head>

<body>
    <div class="painel">
        <div class="cabecalho">
            <h1>lista de posts</h1>
            <a href="lista.php" class="boto3">lista</a>
        </div>
        <div class="canteudo">
            <?php
            $usuario = $_COOKIE["nome"];
        
            session_start();

            foreach ($_SESSION["postagens"] as $postagem) {
                echo '<div class ="card">';
                echo "<strong> $usuario: </strong>";
                echo "$postagem";
                echo '</div>';
            }   

            ?>
        </div>
        <div class="rodape">
            <a href="cookie.html" class="boto1">Cadastrar Usuario</a>
            <a href="busca.html" class="boto2">Buscar</a>
        </div>
    </div>
</body>

</html>