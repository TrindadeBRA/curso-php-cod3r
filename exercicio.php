<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\exercicios.css">
    <title>Exercícios - PHP</title>
</head>
<body class="exercicio">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="menu">
        <a href="index.php">Voltar</a>
        <a onClick="window.location.reload();">Atualizar</a>
        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>">Sem formatação</a>
    </nav>
    <main class="main">
        <div class="content">
           <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           ?>
        </div>
    </main>
    <footer class="footer">
        <p>TrinityWeb - <?= date("Y"); ?></p>
    </footer>
</body>
</html>