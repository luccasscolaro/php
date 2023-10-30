<?php
    //Fazer conexão do backend com o banco de dados
    $nomeServidor = "sql301.infinityfree.com";
    $username = "if0_35249655";
    $senha = "nkTLI1bbUoE";
    $nomeBanco = "if0_35249655_rede_banco";

    //mysqli - driver responsável por conectar com o banco
    $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

    //se a conexão falhar - die encerra execução e apresenta mensagem
    if($conexao -> connect_error){
        die("Conexão com o banco de dados falhou!". $conexao -> connect_error);
    }

?>