<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
</head>

<body>
    <h1>calculado Médias</h1>
    <?php
    //  LISTA DE NOTAS - entrada de dados
    $notasAluno1 = array(9.7, 4.5, 1.3, );
    $notasAluno2 = array(2.7, 6.5, 7.3, );
    $notasAluno3 = array(7.7, 5.5, 4.7, );

    // processamento dos dados
    function calcularMedia($notas)
    {

        //$soma = array_sum($notas);
        $soma = 0;
        $quantidade = count($notas); //conte as notas
    

        for ($i = 0; $i < $quantidade; $i++) {
            $soma = $soma + $notas[$i];
        }

        if ($quantidade > 0) {
            return $soma / $quantidade;
        } else {
            return 0;
        }

    }

        $mediaAluno1 = calcularMedia($notasAluno1);
        $mediaAluno2 = calcularMedia($notasAluno2);
        $mediaAluno3 = calcularMedia($notasAluno3);

        // saida - imprimindo
        $mediaAluno1 = number_format($mediaAluno1, 2, ',', '.');
        $mediaAluno2 = number_format($mediaAluno2, 2, ',', '.');
        $mediaAluno3 = number_format($mediaAluno3, 2, ',', '.');

        echo "<br> Media do aluno 1: $mediaAluno1";
        echo "<br> Media do aluno 2: $mediaAluno2";
        echo "<br> Media do aluno 3: $mediaAluno3";

    ?>
</body>

</html>