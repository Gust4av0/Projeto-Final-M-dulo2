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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #171D25;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Jogos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Lenhador da Redenção</a></li>
                                <li><a class="dropdown-item" href="#">Jogo2</a></li>
                                <li><a class="dropdown-item" href="#">Jogo3</a></li>
                                <li><a class="dropdown-item" href="#">Jogo4</a></li>
                                <li><a class="dropdown-item" href="#">Jogo5</a></li>
                                <li><a class="dropdown-item" href="#">Jogo6</a></li>
                                <li><a class="dropdown-item" href="#">Jogo7</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="equipe">Sobre Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>