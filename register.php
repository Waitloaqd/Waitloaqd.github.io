<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessão</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">

    <!-- Meus Css -->
    <link rel="stylesheet" href="public/styles/main.css">
    <link rel="stylesheet" href="public/styles/register.css">
    <link rel="stylesheet" href="public/styles/responsive.css">

    <link rel="icon" href="public/img/Icone-novo.png">

</head>

<body>

    <?php
        if(isset($_GET['sucess'])){
            if($_GET['sucess'] == 'false'){
            echo "
                <script>  
                    setTimeout(() => {
                        alert('Login ou senha errado, Tente novamente.')
                    }, 500)
                </script>";
            }
        }
        
    ?>
    <img src="public/img/banner.jpg" class="banner img-fluid card-img-top" alt="">


    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">

        <!--organizar os elementos em um container-->
        <div class="container">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">


                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarSite">


                <ul class="navbar-nav mr-auto">


                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">

                    <li class="nav-item dropdown">
                        <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Jogos</a>

                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Gênero de jogos</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Aventura</a>
                            <a class="dropdown-item" href="#">Ação</a>
                            <a class="dropdown-item" href="#">Corrida</a>
                            <a class="dropdown-item" href="#">Esportes</a>
                            <a class="dropdown-item" href="#">Estratégia</a>
                            <a class="dropdown-item" href="#">Indie</a>
                            <a class="dropdown-item" href="#">Multiplayer</a>
                            <a class="dropdown-item" href="#">RPG</a>
                            <a class="dropdown-item" href="#">Simulação</a>
                        </div>
                    </li>
                    </li>

                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Consoles</a>

                        <div class="dropdown-menu">

                            <h6 class="dropdown-header">Tipos de Consoles</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Playstation</a>
                            <a class="dropdown-item" href="#">Xbox</a>
                            <a class="dropdown-item" href="#">Nintendo</a>
                            <a class="dropdown-item" href="#">Pc Gamer</a>
                        </div>
                    </li>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link modale" data-toggle="modal" data-target="#exampleModalScrollable">
                            Contato
                        </a>


                    </li>
                </ul>


                <ul class="navbar-nav ml-auto">


                    <li class="nav-item dropdown">
                        <div class="btn-group dropleft">
                            <a class="nav-link d-none d-md-block" dropdown="toggle" href="#" data-toggle="dropdown"
                                id="navDrop"><img src="public/img/github.png" alt=""></a>

                            <!--div para as opções do social-->
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header">Github dos Desenvolvedores</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="_blank" href="https://github.com/Vitor-Carmo">Vitor</a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/Julio6666">Julio</a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/Beatriz016">Beatriz
                                    Vitória</a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/JoseNiltonCosta">José
                                    Nilton</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <form class="form-inline ml-0 ml-lg-2">

                    <input class="form-control ml-0  mr-2" type="search" placeholder="Buscar na loja">

                    <button class="btn btn-default-color d-none d-md-block" type="Submit">Buscar</button>
                </form>


            </div>
        </div>

    </nav>

    <div class="body">
        <div class="container">

            
            <form class="register" action="src/login_validation.php" method="post">
                <h1>INICIAR SESSÃO</h1>
                <h3>com uma conta na maets existente</h3>

               


                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>

                    <div class="form-flex">
                        <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>

                        <select name="perfil" class="form-control" id="exampleFormControlSelect1">
                            <option value="2">Cliente</option>
                            <option value="1">Administrador</option>
                        </select>

                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="txtsenha" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="action">
                    <button type="submit" class="btn ">Iniciar sessão</button>
                    <div class="back">
                        <img src="public/img/back.png" alt="voltar" width="25px"> <a href="index.php">Voltar</a>
                    </div>
                </div>

            </form>
        </div>

    </div>


    <div class="trasicion">

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <div class="footer-content">

            <!-- Grid row-->
            <div class="container text-center text-md-left ">
                <hr>
                <!-- Footer -->
                <footer class="page-footer font-small blue pt-4">

                    <!-- Footer-Links -->
                    <div class="container-fluid text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6 mt-md-0 mt-3">

                                <!-- Content -->

                                <h5 class="text-uppercase">Contate-nos!</h5>
                                <h6>Redes sociais</h6>
                                <p>Twitter: <a class="minhacor" href="#!">@MaetsOfficial</a></p>
                                <p>Facebook: <a class="minhacor" href="#!">MaetsOfficial</a></p>

                            </div>
                            <!-- Grid column -->



                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">

                                <!-- Links -->
                                <h5 class="text-uppercase">Informações extras</h5>

                                <ul class="list-unstyled minhacor">
                                    <li>
                                        <a class="minhacor" href="#!">Carreiras</a>
                                    </li>
                                    <li>
                                        <a class="minhacor" href="#!">Anunciantes</a>
                                    </li>
                                    <li>
                                        <a class="minhacor" href="#!">Organizações</a>
                                    </li>
                                    <li>
                                        <a class="minhacor" href="#!">Nossa sede</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">

                                <!-- Links -->
                                <h5 class="text-uppercase"></h5>

                                <ul class="list-unstyled minhacor">
                                    <li>
                                        <a class="minhacor" href="#!">Política de privacidade</a>
                                    </li>
                                    <li>
                                        <a class="minhacor" href="#!">Termos legais</a>
                                    </li>

                                    <li>
                                        <a class="minhacor" href="#!">Reembolsos</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Footer-Links -->
                </footer>
            </div>

        </div>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Preencha o formulário
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Endereço de E-mail</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="e-mail@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Digite aqui sua mensagem "></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default-color">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>