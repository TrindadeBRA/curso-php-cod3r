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
    <title>Curso PHP - Cod3r</title>
</head>

<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>
    <main class="main">
        <div class="content">
            <nav class="modulos">
                <div class="modulo verde">
                    <div class="mini-header verde">
                        <h3>Módulo 01</h3>
                        <h6>Conceitos básicos</h6>
                    </div>
                    <ul>
                        <li>
                            <a href="/exercicio.php?dir=conceitos-basicos&file=ola">Olá PHP</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=conceitos-basicos&file=html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=conceitos-basicos&file=css">Integração CSS</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=conceitos-basicos&file=comentarios">Comentários PHP</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=conceitos-basicos&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <div class="mini-header vermelho">
                        <h3>Módulo 02</h3>
                        <h6>Tipos de dados</h6>
                    </div>
                    <ul>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=int">Tipo Inteiro</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=float">Tipo Float</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=operacoes-aritmeticas">Op. Aritméticas</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=desafio-precedencia">Desafio Precedência</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=string">Tipo String</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=desafio-string">Desafio - Tipo String</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=booleano">Tipo Booleano</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=tipo-de-dados&file=conversoes">Conversões</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <div class="mini-header azul">
                        <h3>Módulo 03</h3>
                        <h6>Variáveis</h6>
                    </div>
                    <ul>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=basico">Variáveis</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=desafio-equacao">Desafio Equação</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=atribuicao">Atribuições</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=variaveis-variaveis">Variáveis Variáveis</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=desafio-variaveis-variaveis">Desafio Variáveis Variáveis</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=valor-referencia">Valor vs Referência</a>
                        </li>
                        <li>
                            <a href="/exercicio.php?dir=variaveis&file=constantes">Constantes</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </main>
    <footer class="footer">
        <p>TrinityWeb - <?= date("Y"); ?></p>
    </footer>
</body>

</html>