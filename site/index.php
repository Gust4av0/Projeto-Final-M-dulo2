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
                        <a href="lenhador-redencao">Lenhador da Redenção</a>
                        <a href="jogo2">Jogo2</a>
                        <a href="jogo3">Jogo3</a>
                        <a href="jogo4">Jogo4</a>
                        <a href="jogo5">Jogo5</a>
                        <a href="jogo6">Jogo6</a>
                        <a href="jogo7">Jogo7</a>
                    </div>
                </li>

                <li>
                    <a href="equipe" title="Sobre Equipe">
                        <i class="fa-solid fa-people-group"></i>
                        Sobre Equipe
                    </a>
                </li>

                <li>
                    <a href="contato" title="Contato">
                        <i class="fa-solid fa-envelope"></i>
                        Contato
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            //verificar se o parametro existe
            if (isset($_GET["param"])){
                $param = $_GET["param"];
                //separar o parametro por / 
                $p = explode("/", $param); //explode ele explode a barrinha e separa
            }

            $page = $p[0] ?? "home";
            $jogo = $p[1] ?? NULL;

            if($page == "jogo"){
                $pagina = "jogo/{$jogo}.php";
            }else{
                $pagina = "paginas/{$page}.php";
            }

            //verificar se a página existe
            if (file_exists($pagina)){
                include $pagina; //a tag include serve para incluir uma página dentro de outra página
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