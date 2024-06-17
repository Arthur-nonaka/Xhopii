<?php

require_once "banco.php";
session_start();

$conexao = Conectar();

if(!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['cpf']) && !empty($_POST['data']) && !empty($_POST['telefone']) 
&& !empty($_POST['email']) && !empty($_POST['senha']) && isset($_FILES['foto'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $foto = $_FILES['foto']['tmp_name'];
    $fotoblob = addslashes(file_get_contents($foto));

    $sql = "INSERT INTO cliente (nome, sobrenome, cpf, datanascimento, telefone, email, senha, foto) VALUES ('$nome', '$sobrenome', '$cpf', '$data', '$telefone', '$email', '$senha', '$fotoblob')";

    if($conexao->query($sql) === TRUE){
        $_SESSION['resCliente'] = "Cadastro Concluído";
        header("Location:../cadastroCliente.php");
        die();
    } else {
        header("Location:../cadastroCliente.php");
        $_SESSION['resCliente'] = "Erro ao cadastrar cliente";
        die();
    }
} else {
    header("Location:../cadastroCliente.php");
    $_SESSION['resCliente'] = "Insira todos os valores";
    die();
}