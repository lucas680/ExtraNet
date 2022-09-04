<?php
session_start();

?>
<!DOCTYPE Html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estrelaestilo.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
    <!-- //Fonts -->

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

    <title>Avaliar</title>
</head>

<body>


    <div class="d-md-flex half">
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="../index.html">
                        <h2>extra<em>net</em></h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Início
              <span class="sr-only">(current)</span>
            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../avaliacoes.php">avaliações</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">avaliar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about.php">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact.php">Contate-nos</a>
                            </li>

                            <?php
                            if(isset($_SESSION['logado'])){
                                ?>
                                <li class="nav-item dropdown">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Logado<b class="caret"></b></a>
                                    <div class="dropdown-menu" style="width: 223px; padding:10px;">
                                    
                                        <h6>Nome: <?php echo $_SESSION['nome'];?></h6> 
                                        <h6 style="padding-top:5px;">Email: <br> <?php echo $_SESSION['email'];?></h6>

                                        <form style="padding-top:10px !important;" action="../cadastro/" method="POST">
                                            <div class="send-button wthree agileits form">
                                                <input type="hidden" name="editar" value="1">
                                                <input style="width: 100%;" type="submit" value="Editar dados">
                                            </div>
                                        </form>
                                        <form style="padding-top:10px !important;" action="../control/deslogar.php" method="POST">
                                            <div class="send-button wthree agileits form">
                                                <input type="hidden" name="deslogar" value="1">
                                                <input style="width: 100%; margin-top:10px;" type="submit" value="Sair">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <?php
                            }else{
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login/">Login</a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="bg" style="background-image: url('../img/bg-avaliar.jpeg');"></div>
        <div class="contents">


            <div class="container" style="margin-top: 45px;">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-5">
                                <h3><strong>Avaliar</strong></h3>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>
                            <form action="../control/avasalvar.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group estrelas" style="text-align:center">
                                    <input type="radio" id="vazio" name="estrela" value="" checked>
                                    <label for="estrela_um"><i class="fa"></i></label>
                                    <input type="radio" id="estrela_um" name="estrela" value="1">
                                    <label for="estrela_dois"><i class="fa"></i></label>
                                    <input type="radio" id="estrela_dois" name="estrela" value="2">
                                    <label for="estrela_tres"><i class="fa"></i></label>
                                    <input type="radio" id="estrela_tres" name="estrela" value="3">
                                    <label for="estrela_quatro"><i class="fa"></i></label>
                                    <input type="radio" id="estrela_quatro" name="estrela" value="4">
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
                                </div>
                                <div class="form-group first">
                                    <label for="username">Nome de usuário</label>
                                    <input type="text" class="form-control" name="usuario" placeholder="Nome de usuário" id="username">
                                    </di>
                                    <div class="form-group last mb-3">
                                        <label for="password">Comentário</label><br>
                                        <textarea class="form-textarea" id="wmd-input" name="comentario" rows="7" placeholder="Seu comentário" id="password"></textarea>
                                    </div>

                                    <div class="form-group last mb-3">
                                        <label for="password">Sugestão</label><br>
                                        <textarea class="form-textarea" id="wmd-input" rows="4" name="sugestao" placeholder="Sua sugestão" id="password"></textarea>
                                    </div>

                                    <!-- <div class="d-sm-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                                      <input type="checkbox" checked="checked"/>
                                      <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div> -->

                                    <input type="submit" value="Enviar" class="btn btn-block btn-primary">

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="js/jquery-3.3.1.min.js"></script>
        <scrip src="js/popper.min.js"></scrip>
        <scrip src="js/bootstrap.min.js"></scrip>
        <scrip src="js/main.js"></scrip>
</body>

</html>