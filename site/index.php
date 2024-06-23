<?php
    //configurações API
    $api_key = "4619b955d4ee4ca48c251fd6d85068b2";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detona Games - Site</title>
    <meta name="description" content="Detona Games, o seu site repleto de Jogos para se divertir!">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="shortcut icon" href="imagens/Logo.png">

    <base href="http://localhost/DetonaGames/site/">

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!--Cabeçalho/Barra navegação-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="nav" data-aos="fade-right">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="imagens/Logo.png" alt="Logo Site" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" id="corFonteNav">
                                <i class="fa-solid fa-house-chimney"></i>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="equipe" id="corFonteNav">
                                <i class="fa-solid fa-people-group"></i>
                                Equipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" id="corFonteNav">
                                <i class="fa-solid fa-headset"></i>
                                Jogos
                            </a>
                            <ul class="dropdown-menu" id="gridNav">
                                <li><a class="dropdown-item hover" href="jogo1" id="corFonteNav2">Lenhador da
                                        Redenção</a>
                                </li>
                                <li><a class="dropdown-item hover" href="jogo2" id="corFonteNav2">GTA V</a></li>
                                <li><a class="dropdown-item hover" href="jogo3" id="corFonteNav2">Red Dead Redemption
                                        2</a></li>
                                <li><a class="dropdown-item hover" href="jogo4" id="corFonteNav2">Resident Evil 7 Biohazard</a>
                                </li>
                                <li><a class="dropdown-item hover" href="jogo5" id="corFonteNav2">The Last of Us™ Part
                                        I</a></li>
                                <li><a class="dropdown-item hover" href="jogo6" id="corFonteNav2">PUBG:
                                        BATTLEGROUNDS</a>
                                </li>
                                <li><a class="dropdown-item hover" href="jogo7" id="corFonteNav2">Dead by Daylight</a>
                                </li>

                        </li>
                    </ul>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="corFonteNav">
                            <i class="fa-solid fa-question"></i>
                            Sobre
                        </a>
                        <ul class="dropdown-menu" id="gridNav">
                            <div class="hover">
                                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-login"
                                        id="corFonteNav2">
                                        <i class="fa-solid fa-right-to-bracket"></i>
                                        Login</a></li>
                            </div>
                            <div class="hover">
                                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-cadastro"
                                        id="corFonteNav2">
                                        <i class="fa-solid fa-gears"></i>
                                        Cadastre-Se!</a></li>
                            </div>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <div class="hover">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-contato"
                                    id="corFonteNav2">
                                    <i class="fa-solid fa-envelope"></i>
                                    Contato</a>
                            </div>

                    </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <!--Conteúdo Principal-->
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

    <!--Rodapé-->
    <footer class="footer">
        <p>Site desenvolvido por Gustavo Marcolin Soares | &copy; Todos os Direitos Reservados!</p>

        <a href="https://www.linkedin.com/in/gustavo-marcolin-soares-b07ab42b0/"><i class="fa-brands fa-linkedin fa-2x"></i></a>
        <a href="mailto:gustavomarcolin2005@gmail.com"><i class="fa-solid fa-envelope fa-2x"></i></a>
    </footer>

    <!--Modal Contato-->
    <div class="modal fade" id="modal-contato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="gridContato">
                <div class="modal-header">
                    <h5 class="modal-title" id="entreContato">Entre em Contato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group">
                            <span class="input-group-text">Nome e Sobrenome</span>
                            <input type="text" aria-label="First name" placeholder="Nome" class="form-control">
                            <input type="text" aria-label="Last name" placeholder="Sobrenome" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email aqui">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deixe se Comentário</label>
                            <textarea class="form-control" placeholder="Insira aqui seu Comentário" id="mensagem"
                                rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <a href="https://wa.me/5544998800700" class="centro"><i class="fa-brands fa-whatsapp fa-4x" id="icones"></i></a>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Login-->
    <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="gridContato">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Cadastrado</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Cadastro-->
    <div class="modal fade" id="modal-cadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="gridContato">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                        <input type="name" class="form-control" id="nome" placeholder="Seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sobrenome</label>
                        <input type="name" class="form-control" id="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" placeholder="Sobrenome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Documento</label>
                        <input type="number" class="form-control" id="documento" placeholder="000.000.000-00">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Seu melhor email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="senha">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success">Finalizar!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/fslightbox.js"></script>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script>
    AOS.init();
</script>

</html>