<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="twitter (1).png" type="image/x-icon">
    <link rel="stylesheet" href="batePapo.css">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <div class="painel">
        <div class="cabecalho">
            <h1>Definição de cookie</h1>
            <a href="betePapo.html" class="boto4">fazer nova postagem</a>
        </div>

        <div class="canteudo">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = $_POST["usuario"];
                setcookie("nome", $nome, time() + 86400 * 30, "/");
                
                echo"cookie de nome de usuario definido com sucessco. <br>";
                echo"Nome Usuário: $nome";
                

            }else{
                echo"Erro:Requisição Inálida ";
            }
            ?>
        </div>
        <div class="rodape">

        </div>
    </div>
</body>

</html>