<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detona Games - Site</title>
    <meta name="description" content="Detona Games, o seu site repleto de Jogos para se divertir!">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <a href="index.php">
            <img src="imagens/Logo.png" alt="Logo Detona Games" title="Detona Games" class="header-logo">
        </a>

        <nav class="header-nav">
            <ul>
                <li>
                    <a href="index.php" title="Home">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>

                <li class="dropdonw">
                    <a href="#" title="Jogos">
                        <i class="fa-solid fa-gamepad"></i>
                        Jogos
                    </a>

                    <div class="dropdonw-menu">
                        <a href="index.php?pg=jogo1">Lenhador da Redenção</a>
                        <a href="index.php?pg=jogo2">Jogo2</a>
                        <a href="index.php?pg=jogo3">Jogo3</a>
                        <a href="index.php?pg=jogo4">Jogo4</a>
                        <a href="index.php?pg=jogo5">Jogo5</a>
                        <a href="index.php?pg=jogo6">Jogo6</a>
                        <a href="index.php?pg=jogo7">Jogo7</a>
                    </div>
                </li>

                <li>
                    <a href="index.php?pg=equipe" title="Sobre Equipe">
                        <i class="fa-solid fa-people-group"></i>
                        Sobre Equipe
                    </a>
                </li>

                <li>
                    <a href="index.php?pg=contato" title="Contato">
                        <i class="fa-solid fa-envelope"></i>
                        Contato
                    </a>
                </li>

                <li class="btn-donwload">
                    <a href="#">
                        <i class="fa-solid fa-download"></i>
                        Arquivos
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        
        $pg = $_GET["pg"] ?? "home";
        $pg = "paginas/{$pg}.php"; //inclui outra página dentro da mesma página

        //verificar se um arquivo existe
        if (file_exists($pg)){
            include $pg; //a tag include serve para incluir uma página dentro de outra página
        }else {
            include "paginas/erro.php";
        }
        ?>
    </main>

    <footer class="footer">
        <p>Site desenvolvido por Gustavo Marcolin Soares | &copy; Todos os Direitos Reservados!</p>

        <a href="https://www.linkedin.com/in/gustavo-marcolin-soares-b07ab42b0/" target="_blank">
            <i class="fa-brands fa-linkedin fa-2x"></i>
        </a>

        <a href="https://github.com/Gust4av0" target="_blank">
            <i class="fa-brands fa-github fa-2x"></i>
        </a>
    </footer>

</body>

</html>