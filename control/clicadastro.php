<?php
include 'conexao.php';

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $senha = $_POST['pass'];

    $sql = "INSERT INTO cliente(`cli_nome`, `cli_email`, `cli_senha`, `cli_estado`, `cli_cidade`, `cli_status`) 
           VALUES ('$nome', '$email', '$senha', '$estado', '$cidade', 0)";

    mysqli_query($conexao, $sql);
    header('location: ../');
}else{
    header('location: ../');
}

?>