<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meida</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Media do Aluno</h1>
    <?php
    $nota01 = $_GET["nmat"];
    $nota02 = $_GET["nport"];
    $nota03 = $_GET["nbio"];
    $media = number_format(($nota01 + $nota02 + $nota03) / 3 ,1);

    echo "<h2>A nota final do aluno(a) foi de $media.</h2>";
    if ($media <= 4){
        echo "<p>Aluno <b>REPROVADO</b></p>";
    } elseif ($media == 5) {
        echo "<p>Aluno em <b>RECUPERAÇÃO</b></p>";
    }else{
        echo "<p>Aluno <b>APROVADO</b></p>";
    }
    
    ?>
    <form action="index.html" method="get">
        <input type="submit" value="Voltar">
    </form>
</body>
</html>