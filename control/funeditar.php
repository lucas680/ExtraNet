<?php
include 'conexao.php';
session_start();

if(isset($_POST['id'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $log = $_POST['id'];

    $sql = "UPDATE funcionario SET 
    f_nome = '$nome',
    f_email = '$email',
    f_senha = '$senha' 
    WHERE f_codigo = $log";

    mysqli_query($conexao, $sql);
    
    header('location: ../gerente/funcionario.php');

}else{
    header('location: ../');
}
?>