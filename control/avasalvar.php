<?php
session_start();
include_once ("conexao.php");
if (isset($_POST['estrela'])) {
	$estrela = $_POST['estrela'];
	$usuario = $_POST['usuario'];
	$comentario = $_POST['comentario'];
	$sugestao = $_POST['sugestao'];
	$estrela2;
	$quantidade;

	$sql = "select * from funcionario where f_nome='$usuario'";
	$resultado = mysqli_query($conexao, $sql);
	$row = mysqli_num_rows($resultado);
	if($row == 1){
		while($linha = $resultado->fetch_assoc()){
				$estrela2 = $linha['f_estrelas']+$estrela;
				$quantidade = $linha['f_quantidade']+1;
				$id = $linha['f_codigo'];
		}	
	}

	mysqli_query($conexao, "
	UPDATE `funcionario` SET 
	`f_estrelas`=$estrela2,
	f_quantidade=$quantidade
	WHERE f_codigo =$id
	");

	$sql = "INSERT INTO avalia(ava_estrela, ava_usuario, ava_comentario, ava_sugestao)
	VALUES($estrela, '$usuario', '$comentario', '$sugestao')";
			
	$resultado_avaliacos = mysqli_query($conexao, $sql);
	
	if(mysqli_insert_id($conexao)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: ../index.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação";
		header("Location: ../index.php");
	}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: ../index.php");
}

echo "<script type='text/javascript'>
		alert('Salvo com sucesso!');
		location.href='../index.php';
	  </script>";

?>