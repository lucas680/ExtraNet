<?php
session_start();
include '../../control/conexao.php';


if(isset($_POST['funcionario']) || isset($_GET['nome'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	if(isset($_POST['editar'])){
		?>
		<title>Editar</title>
		<?php
	}else{
	?>
	<title>Cadastro</title>
	<?php } ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('../../img/cad.png');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<?php
				if(isset($_GET['nome'])){
					$nome = $_GET['nome'];
					$email = $_GET['email'];

					$sql = "SELECT * FROM funcionario WHERE f_nome = '$nome'  AND 
					f_email = '$email'";

					$resultados = mysqli_query($conexao, $sql);

					while($row = $resultados->fetch_assoc()){
						$id = $row['f_codigo'];
						$senha = $row['f_senha'];
					}

					?>
					<form class="login100-form validate-form" action="../../control/funeditar.php" method="POST">
						<span class="login100-form-title p-b-59">
							Editar
						</span>

						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
							<span class="label-input100">Nome completo</span>
							<input class="input100" type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome...">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Email válido é obrigatório: ex@abc.xyz">
							<span class="label-input100">Email</span>
							<input class="input100" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email...">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Senha é obrigatório">
							<span class="label-input100">Senha</span>
							<input class="input100" type="text" name="senha" value="<?php echo $senha; ?>" placeholder="*************">
							<span class="focus-input100"></span>
						</div>

						<div class="flex-m w-full p-b-33">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									<span class="txt1">
										Eu concordo com os
										<a href="#" class="txt2 hov1">
											Termos de uso
										</a>
									</span>
								</label>
							</div>

						
						</div>

						
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn">
									Editar
								</button>
							</div>

							<a href="../" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
								Início
								<i class="fa fa-long-arrow-right m-l-5"></i>
							</a>
						</div>>
					</form>
				<?php
				}else{
				?>

				<form class="login100-form validate-form" action="../../control/funcadastro.php" method="POST">
					<span class="login100-form-title p-b-59">
						Cadastro de Funcionários
					</span>

					<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
						<span class="label-input100">Nome completo</span>
						<input class="input100" type="text" name="nome" placeholder="Nome...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email válido é obrigatório: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Senha é obrigatório">
						<span class="label-input100">Senha</span>
						<input class="input100" type="text" name="senha" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Eu concordo com os
									<a href="#" class="txt2 hov1">
										Termos de uso
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Cadastrar
							</button>
						</div>

						<a href="../index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Início
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php
}else{
	header('location: ../');
}
?>