<?php
include 'conexao.php';

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO `funcionario`(`f_nome`, `f_email`, `f_senha`, `f_status`) 
            VALUES ('$nome', '$email', '$senha', 1)";
    
    mysqli_query($conexao, $sql);

    echo "
    <script type='text/javascript'>
        alert('salvo com sucesso!');
    </script>
    ";

    header('location: ../gerente/');
}else{
    header('location: ../gerente/');
}
?>