<?php
	include 'control/conexao.php';
     $sql = "Select * from avalia order by ava_usuario desc";
     $resultado = mysqli_query($conexao, $sql);
     while ($linha = $resultado->fetch_assoc()) {
            $usuario = $linha['ava_usuario'];
            $comentario = $linha['ava_comentario'];
            echo $usuario;
            echo "<br />";
            echo $comentario;
            echo "<hr /><br /><br />";
     }
?>