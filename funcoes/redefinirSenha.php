<?php

require_once "banco.php";

$conexao = Conectar();
session_start();

if(!empty($_POST['senha']) && !empty($_POST['confirmarSenha'])){
    if($_POST['senha'] == $_POST['confirmarSenha']){
        $senha = $_POST['senha'];
        $senha = $_POST['confirmarSenha'];
        $email = $_SESSION['email'];
    
        $sql = "UPDATE funcionario SET senha = '$senha' WHERE email = '$email'";
        echo $sql;
    
        if($conexao->query($sql) === TRUE){
            header("Location:../login.php");
            die();
        } else {
            $_SESSION['senhaRedefinida'] = "Ocorreu um erro!";
            header("Location:../redefinirSenha.php");
            die();
        }
    } else {
        $_SESSION['senhaRedefinida'] = "As senhas estão diferentes!";
        header("Location:../redefinirSenha.php");
        die();
    }
} else {
    $_SESSION['senhaRedefinida'] = "Preencha todos os campos!";
    header("Location:../redefinirSenha.php");
    die();
}