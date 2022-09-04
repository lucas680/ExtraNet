<?php
session_start();
include 'conexao.php';

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $senha = $_POST['pass'];
    $log = $_SESSION['logado'];

    $sql = "UPDATE cliente SET 
    cli_nome = '$nome',
    cli_email = '$email',
    cli_senha = '$senha',
    cli_estado = '$estado',
    cli_cidade = '$cidade' 
    WHERE cli_codigo = '$log'";

    mysqli_query($conexao, $sql);

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['estado'] = $estado;
    $_SESSION['cidade'] = $cidade;

    header('location: ../');
}

?>