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

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Cabeçalho/Barra navegação-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="nav">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" aria-current="page" href="index.php" id="corFonte">
                        <i class="fa-solid fa-house-chimney"></i>    
                        Home</a></li>
                        <li><a class="nav-link" href="equipe" id="corFonte">
                        <i class="fa-solid fa-people-group"></i>    
                        Equipe</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false" id="corFonte">
                                <i class="fa-solid fa-headset"></i>
                                Jogos</a>
                            <ul class="dropdown-menu" id="dropdonw">
                                <li><a class="dropdown-item" href="jogo1" id="corFonte" id="corFonte">Lenhador da Redenção</a></li>
                                <li><a class="dropdown-item" href="jogo2" id="corFonte">Jogo2</a></li>
                                <li><a class="dropdown-item" href="jogo3" id="corFonte">Jogo3</a></li>
                                <li><a class="dropdown-item" href="jogo4" id="corFonte">Jogo4</a></li>
                                <li><a class="dropdown-item" href="jogo5" id="corFonte">Jogo5</a></li>
                                <li><a class="dropdown-item" href="jogo6"id="corFonte">Jogo6</a></li>
                                <li><a class="dropdown-item" href="jogo7" id="corFonte">Jogo7</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="nav-link" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modal-contato" id="corFonte">
                                        <i class="fa-solid fa-envelope"></i>
                                        Contato</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false" id="corFonte">
                                <i class="fa-solid fa-question"></i>
                                Sobre</a>
                            <ul class="dropdown-menu" id="dropdonw">
                                <li><a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#modal-cadastro" id="corFonte">
                                    <i class="fa-solid fa-gears"></i>
                                    Cadastre-Se!</a></li>
                                <li><a class="nav-link" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modal-login" id="corFonte">
                                        <i class="fa-solid fa-right-to-bracket"></i>
                                        Login</a></li>
                                    </ul>
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

        <a href=""><i class="fa-brands fa-linkedin fa-2x"></i></a>
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
                            <input type="email" class="form-control" id="email"
                                placeholder="Email aqui">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deixe se Comentário</label>
                            <textarea class="form-control" placeholder="Insira aqui seu Comentário"
                                id="mensagem" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <a href="#" class="centro"><i class="fa-brands fa-whatsapp fa-4x" id="icones"></i></a>
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
                            <input type="email" class="form-control" id="email"
                                aria-describedby="emailHelp">
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
                        <input type="name" class="form-control" id="nome"
                            placeholder="Seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sobrenome</label>
                        <input type="name" class="form-control" id="sobrenome"
                            placeholder="Sobrenome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento"
                            placeholder="Sobrenome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Documento</label>
                        <input type="number" class="form-control" id="documento"
                            placeholder="000.000.000-00">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email"
                            placeholder="Seu melhor email">
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

<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>