<?php
session_start();
include '../control/conexao.php';

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

    <title>Avaliações</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all">
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
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

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
                        <li class="nav-item active">
                            <a class="nav-link" href="avaliacoes.php">Avaliações</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="funcionario.php">Funcionários</a>
                        </li>
                        
                        <?php
                        if(isset($_SESSION['logado'])){
                            ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Logado<b class="caret"></b></a>
                                <div class="dropdown-menu" style="width: 223px; padding:10px;">
                                    
                                    <h6>Nome: <?php echo $_SESSION['nome'];?></h6> 
                                    <h6>Email: <br> <?php echo $_SESSION['email'];?></h6>

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
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2 style="color:red;"> <b>Avaliações<b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
    <div class="row">
        <!-- <table class="table table-hover table-secondary text-center">
        <thead>
            <tr>
                <th scope="col">Pontos(Estrela)</th>
                <th scope="col">Usuario</th>
            </tr>
        </thead>
        <tbody> -->

            <?php
                // $sql = "Select * from funcionario order by f_estrelas desc";
                // $resultado = mysqli_query($conexao, $sql);
                // while ($linha = mysqli_fetch_assoc($resultado)) {
                //     // $id= $linha['ava_cod'];
                //     // $consu= mysqli_query($conexao, "select ava_estrela from avalia where ava_cod=$id");
                //     // $atualizado = $consu + $estrela;
                //     // $up = mysqli_query($conexao, "UPDATE avalia SET ava_avalia='$atualizado' WHERE ava_cod=$id");
                //     if(isset($linha['f_estrelas'])){
                //     echo "<tr>
                //           <td>".$linha['f_estrelas']."</td>
                //           <td>".$linha['f_nome']."</td>
                //           </tr>";
                //     }
                // }
            ?> 
        <!-- </tbody>
        </table> -->
    
    </div>
    </section>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">Todas as avaliações</li>
                            <li data-filter=".des">Melhores do mês</li>
                            <li data-filter=".dev"></li>
                            <li data-filter=".gra"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">

                        <?php
                        $sql = "Select * from funcionario order by f_estrelas desc";
                        $resultado = mysqli_query($conexao, $sql);
                        while($linha=$resultado->fetch_assoc()){
                            if($linha['f_quantidade']!=null){
                                echo "
                            <div class='col-lg-4 col-md-4 all des'>
                                <div class='product-item'>
                                    <a href='#'><img src='../img/usuario.jpg' alt=''></a>
                                    <div class='down-content'>
                                        <a href='#'>
                                            <h4>".$linha['f_nome']."</h4>
                                        </a>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class='stars'>
                                            <li><i class='fa fa-star'></i></li>
                                            <li><i class='fa fa-star'></i></li>
                                            <li><i class='fa fa-star'></i></li>
                                            <li><i class='fa fa-star'></i></li>
                                            <li><i class='fa fa-star'></i></li>
                                        </ul>
                                        <span>Reviews (".$linha['f_quantidade'].")</span>
                                    </div>
                                </div>
                            </div>";
                        }
                    }
                        ?>
                            <!-- <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="img/usuario.jpg" alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Atendente</h4>
                                        </a>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (24)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a href="#"><img src="img/usuario.jpg" alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Atendente</h4>
                                        </a>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (36)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a href="#"><img src="img/usuario.jpg" alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Atendente</h4>
                                        </a>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (48)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="img/usuario.jpg" alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Atendente</h4>
                                        </a>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (60)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="img/usuario.jpg" alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Atendente</h4>
                                        </a>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (72)</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
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
                        <p>Copyright &copy; 2021 ExtraNET Co., Ltd.</a>
                        </p>
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