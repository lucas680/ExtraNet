<?php
session_start();
include 'conexao.php';

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['pass'];

    $sqlCliente = "SELECT * FROM cliente WHERE cli_email = '$email' AND cli_senha = '$senha'";
    $sqlGerente = "SELECT * FROM gerente WHERE g_email = '$email' AND g_senha = '$senha'";
    $sqlFuncio = "SELECT * FROM funcionario WHERE f_email = '$email' AND f_senha = '$senha'";

    $resultadosCli = mysqli_query($conexao, $sqlCliente);
    $resultadosGer = mysqli_query($conexao, $sqlGerente);
    $resultadosFun = mysqli_query($conexao, $sqlFuncio);

    $rowCli = mysqli_num_rows($resultadosCli);
    $rowGer = mysqli_num_rows($resultadosGer);
    $rowFun = mysqli_num_rows($resultadosFun);
    if($rowCli == 1){
        while($row = $resultadosCli -> fetch_assoc()){
            $_SESSION['nome'] = $row['cli_nome'];
            $_SESSION['email'] = $row['cli_email'];
            $_SESSION['senha'] = $row['cli_senha'];
            $_SESSION['estado'] = $row['cli_estado'];
            $_SESSION['cidade'] = $row['cli_cidade'];
            $_SESSION['status'] = $row['cli_status'];
            $_SESSION['logado'] = $row['cli_codigo'];   
        }
        header('location: ../');
    }else if($rowGer == 1){
        while($row = $resultadosGer -> fetch_assoc()){
            $_SESSION['nome'] = $row['g_nome'];
            $_SESSION['email'] = $row['g_email'];
            $_SESSION['senha'] = $row['g_senha'];
            $_SESSION['status'] = $row['g_status'];
            $_SESSION['logado'] = $row['g_codigo'];
            $_SESSION['gerente'] = 1;   
        }
        header('location: ../gerente/index.php');
    }else if($rowFun == 1){
        while($row = $resultadosFun -> fetch_assoc()){
            $_SESSION['nome'] = $row['f_nome'];
            $_SESSION['email'] = $row['f_email'];
            $_SESSION['senha'] = $row['f_senha'];
            $_SESSION['status'] = $row['f_status'];
            $_SESSION['logado'] = $row['f_codigo'];   
        }
        header('location: ../index.php');
    }else{
        header('location: ../login/');
    }

}else{
    header('location: ../login/');
}
?>