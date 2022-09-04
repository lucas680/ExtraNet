<?php
session_start();

if(isset($_SESSION['gerente'])){
    header('location: gerente/');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sobre</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
    <!-- //Fonts -->
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>extra<em>net</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Início
                  <span class="sr-only">(current)</span>
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="avaliacoes.php">Avaliações</a>
                        </li>
                        <?php
                            if(isset($_SESSION['logado'])){
                                ?>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="avaliar/">Avaliar</a>
                                </li>    
                                
                                <?php
                            }
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contate-nos</a>
                        </li>
                        <?php
                        if(isset($_SESSION['logado'])){
                            ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Logado<b class="caret"></b></a>
                                <div class="dropdown-menu" style="width: 223px; padding:10px;">
                                    
                                    <h6>Nome: <?php echo $_SESSION['nome'];?></h6> 
                                    <h6 style="padding-top:5px;">Email: <br> <?php echo $_SESSION['email'];?></h6>

                                    <form style="padding-top:10px !important;" action="cadastro/" method="POST">
                                        <div class="send-button wthree agileits form">
                                            <input type="hidden" name="editar" value="1">
                                            <input style="width: 100%;" type="submit" value="Editar dados">
                                        </div>
                                    </form>
                                    <form style="padding-top:10px !important;" action="control/deslogar.php" method="POST">
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

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Sobre</h4>
                        <h2>Nossa empresa</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Nosso Background</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Quem somos &amp; O que fazemos?</h4>
                        <p>Somos uma empresa provedora de internet preparada ajudar nossos clientes ao máximo.
                            <br><br> Nossa grande equipe de profissionais está preparada para intruí-lo(a) no que precisar e fará o possível para se sentir acolhido(a).
                            <br><br> Nosso principal objetivo é aumentar as conexões entre as pessoas através do acesso à rede.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Nosso time de membros</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="img/usuario.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Caun Martins</h4>
                            <span>Designer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="img/usuario.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Rafael Freitas</h4>
                            <span>Programador</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="img/usuario.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>João de Deus</h4>
                            <span>Programador</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="img/usuario.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Lucas Pereira</h4>
                            <span>Programador</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Nossos serviços</h4>
                            <p>Ao se tornar nosso cliente, você terá acesso a internet de alta qualidade onde quer que esteja, desde rede de longo alcance até pacotes de fibra óptica.</p>
                            <a href="#" class="filled-button">Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Promoções exclusivas</h4>
                            <p>Ao se tornar um cliente fidelizado, você terá acesso à descontos imperdíveis que fará seu plano se tornar ainda mais barato.</p>
                            <a href="#" class="filled-button">Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Benefícios adicionais</h4>
                            <p>Ao fazer o seu cartão, você terá ainda acesso a descontos e benefícios de empresas parceiras como a Cubcs Construções</p>
                            <a href="#" class="filled-button">Ler mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                    <p>Copyright &copy; 2021 ExtraNET Co., Ltd. </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>