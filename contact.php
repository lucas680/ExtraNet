<?php
session_start();

if(isset($_SESSION['gerente'])){
    header('location: gerente/');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Contate-nos</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item active">
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
    <div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Contate-nos</h4>
                        <h2>vamos entrar em contato</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Nossa localização no mapa</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                    <div id="map">
                        <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Sobre nosso escritório</h4>
                        <p>Nossa empresa se esforça para oferefer cada vez mais um atendimento de qualidade e um serviço diferenciado.<br><br> Além de um ambiente amigável e uma estrutura moderna, contamos ainda com uma equipe excepcional e disposta a sempre
                            fazer o melhor. </p>
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


    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Envie-nos uma mensagem</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Nom completo" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Sujeito" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Sua mensagem" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Accordion Title One</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis
                                    ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Second Title Here</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis
                                    ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Accordion Title Three</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis
                                    ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Fourth Accordion Title</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis
                                    ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                    </ul>
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