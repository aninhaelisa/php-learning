<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        echo "<p>Olá, $nome! Você tem $idade anos.</p>";
        ?>
    </main>

</body>

</html>