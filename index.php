

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="img/favicon.ico"/>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\exercicios.css">
    <title>Curso PHP</title>
</head>
<body>

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <!-- conteúdo -->
    <main class="principal">
        <div class="content">

        <!-- nav -->
			<nav class="modulos">

				<div class="modulo verde">
                    <h3>Módulo 01 </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercícios A</a></li>

                    </ul>
                </div>
			</nav>
        </div>
    </main>

    <!-- footer -->
    <footer id="rodape" class="rodape">
        <p>Copyright &copy; <?= date('Y'); ?> by Héber Silvério <br/>
            <div>
                <a href="https://www.facebook.com/heber.silverio.73/" target="blank">Facebook |</a>
                <a href="https://www.youtube.com/channel/UCxUTJTs6eHpBoeBcoPL3ZJg?view_as=subscriber" target="blank"> Youtube</a> </p>
            </div>
    </footer>

</body>
</html>
