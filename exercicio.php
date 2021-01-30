<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- estilos -->
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>

    <!-- nav -->
    <nav class="navegacao">
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>
            class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <!-- conteúdo -->
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>

    <!-- footer -->
    <footer class="rodape">
        <p>Copyright &copy; <?= date('Y'); ?> by Héber Silvério <br/>
            <div>
                <a href="https://www.facebook.com/heber.silverio.73/" target="blank">Facebook |</a>
                <a href="https://www.youtube.com/channel/UCxUTJTs6eHpBoeBcoPL3ZJg?view_as=subscriber" target="blank"> Youtube</a> </p>
            </div>
    </footer>

</body>
</html>
