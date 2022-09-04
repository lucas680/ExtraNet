<?php 

 include 'conexao.php';
 
        
		if((isset($_GET['estado'])) && (isset($_GET['f_email'])) && ($_GET['estado'] == 'desativar')){

			$f_email = $_GET['f_emai'];
		
			$id = "SELECT f_codigo FROM `funcionario` WHERE `f_email` LIKE '$f_email'";
			$id = mysqli_query($conexao, $id);
			$id = mysqli_fetch_assoc($id);
			$id = $id['f_codigo'];

			$sql = "UPDATE `funcionario` SET `f_status` = '0' WHERE `funcionario`.`f_codigo` = $id;";
			
			mysqli_query($conexao, $sql);
			
			echo "
				<!DOCTYPE html>
				<html lang='pt-br'>
				<head>
				<meta charset='utf-8'>
				<title> </title>

				</head>
				<body>
						<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>


						<script>
										swal({

				  title: 'ExtraNet',
				  text: 'Desativada com sucesso!',
				  icon: 'success',
				  button: 'ok',

				})

				.then((willDelete) => {
				 
					window.location.href= '../gerente/funcionario.php';      

				});

						</script>

				</body>

				</html>";
		}else{
			header('location: ../gerente/funcionario.php');
		}

?>