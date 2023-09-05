<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="batePapo.css">
    <title>Document</title>
</head>

<body>
    <div class="painel">



        <div class="cabecanho">
            <h1>senac connect</h1>
        </div>
        <div class="conteudo">
            <h2>postagem</h2>

            <?php
            $usuario = "Lccas Scolaro";
            setcookie("nome", $usuario, time() + 86400 * 30, "/");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $postagem = $_POST["postagem"];
                echo "$usuario postou: $postagem ";


                session_start();


                if(!isset($_SESSION["postages"])){
                    $_SESSION["postagens"] = array();
                }
                array_push($_SESSION["postagens"],$postagem);
            }

            ?>
        </div>
        <div class="rodape">
            <a href="betePapo.html" class="boto">fazer nova postagem</a>
            <a href="usario.html" class="boto1">Cadastrar Usuario</a>
            <a href="busca.html" class="boto2">Buscar</a>
            <a href="lista.php" class="boto3">lista</a>
        </div>
    </div>
</body>

</html>