<?php
session_start();

if(isset($_SESSION['gerente'])){
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Funcionários</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom-Stylesheet-Links -->
    <!-- Bootstrap-CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" media="all"> -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all">
    <!-- Owl-Carousel-CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css" media="all"> -->
    <!-- Chocolat-CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/chocolat.css" type="text/css" media="all"> -->
    <!-- Animate-CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/animate-custom.css" type="text/css" media="all"> -->
    <!-- //Custom-Stylesheet-Links -->
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
    <!-- //Fonts -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <!-- ***** Preloader Start *****  -->
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
              
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Funcionários</a>
                        </li>
                        
                        <?php
                        if(isset($_SESSION['logado'])){
                            ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Logado<b class="caret"></b></a>
                                <div class="dropdown-menu" style="width: 223px; padding:10px;">
                                    
                                    <h6>Nome: <?php echo $_SESSION['nome'];?></h6>
                                    <h6 style="padding-top:10px;">Email: <br> <?php echo $_SESSION['email'];?></h6>

                                    <form style="padding-top:10px !important;" action="cadastro/" method="POST">
                                        <div class="send-button wthree agileits form">
                                            <input type="hidden" name="funcionario" value="1">
                                            <input style="width: 100%;" type="submit" value="Cadastrar Funcionário">
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

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Funcionário</h4>
                        <h2>Gerenciamento de funcionários</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



               <!--  aqui vai o codigo do crud  -->

    
   <!-- section de pesquisa -->
    <section class="container-fluid sec-pesq-fun" id="pesquisar">
                <div class="text-center">
                    <h3 class="font-pesq-fun">Pesquisar Funcionários</h3>
                        
                    <div class="container">
                        <div class="">
                            <form method="POST" action="#">
                                <input type="text" class="form-control mb-2 bar-pesq-fun" name="pesquisa" placeholder="pesquisar">   
                                <button type="submit" class="btn btn-outline-secondary mb-2 bot-pesq-fun">
                                    <img src="../img/lupa.png" width="20px">
                                        Pesquisar
                                </button>
                            
                            </form>
                
                
                        </div>

                        <h3 class="light text-center font-text-pesq-fun">Funcionários</h3>     
                                                                                        
               
                        <div class="row tabela">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome:</th>
                                        <th scope="col">Email:</th>
                                        <th scope="col">Editar:</th>
                                        <th scope="col">Desativar:</th>                     
                                    </tr>                   
                                </thead>
                                <tbody>
                                <?php
                                
                                    include '../control/conexao.php';


                                if(isset($_POST['pesquisa'])){
                                $pesquisa = $_POST['pesquisa'];
        

                                $sql = "Select f_nome, f_email from funcionario where (f_nome like '%$pesquisa%' AND f_status = 1) or (f_email like '%$pesquisa%' AND f_status = 1)";
            
                            
                                }else{
                                
                                $sql = "Select f_nome, f_email  from funcionario where f_status = 1";
                                }
                                
                                $resultado = mysqli_query($conexao, $sql);
                                while($linha = $resultado -> fetch_assoc()){
                                    
                                echo "<tr>
                                        <td>".$linha['f_nome']."</td>
                                        <td>".$linha['f_email']."</td>
                                        <td class='icon-usu'> <a href='cadastro/index.php?nome=".$linha['f_nome']."&email=".$linha['f_email']."'><img class='cor' src='../img/editar.png' width='20px'></a> </td>
                                        <td class='icon-usu'> <a href='alert.php?f_email=".$linha['f_email']."'><img class='cor' src='../img/apagar1.png' width='20px'></a></td>  
                                </tr>";


                    }
    

     ?>
          
                                        
                                    </tbody>
                                                    
                                </table>        
                         </div>
                         
                            
                    </div>
                            
</section>

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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/accordions.js"></script>


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

<?php
}else{
    header('location: ../');
}
?>