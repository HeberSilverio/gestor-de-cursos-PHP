

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- estilo -->
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <!-- conteúdo -->
    <main class="principal">
        <div class="conteudo">

        <!-- nav -->
			<nav class="modulos">

				<div class="modulo verde">
                    <h3>01 - Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Tags PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                    </ul>
                </div>
				<div class="modulo vermelho">
                    <h3>02 - Tipos </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipos String</a></li>
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
