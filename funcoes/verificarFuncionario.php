<?php
require_once 'banco.php';

$conexao = Conectar();
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
if ($email != "" && $senha != "") {
    $sql = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $email;
        header('Location: ../homePage.php');
    } else {
        $_SESSION['resFuncionario'] = "Email ou senha incorretos";
        header('Location: ../login.php');
    }
} else {
    $_SESSION['resFuncionario'] = "Informe todos os valores";
    header('Location: ../login.php');
}


