<?php
require_once "banco.php";
session_start();

$conexao = Conectar();

if($_POST['nome'] != '' && $_POST['sobrenome'] != '' && $_POST['cpf'] != '' && $_POST['telefone'] != '' 
&& $_POST['cargo'] != '' && $_POST['salario'] != '' && $_POST['email'] != '' && $_POST['senha'] != '' 
&& $_POST['data'] != '' && isset($_FILES['foto'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data = $_POST['data'];
    $foto = $_FILES["foto"]["tmp_name"];
    $fotoblob = addslashes(file_get_contents($foto));
    $sql = "INSERT INTO funcionario (nome,sobrenome, cpf,telefone, cargo, salario, email, senha, datanascimento, foto) 
    VALUES ('$nome','$sobrenome', '$cpf', '$telefone', '$cargo', '$salario', '$email', '$senha', '$data', '$fotoblob')";

    if($conexao->query($sql) == TRUE) {
        header("Location:../login.php");
        $_SESSION['resFuncionario'] = "Cadastro Concluído";
        die();
    }
    else {
        header("Location:../cadastroFuncionario.php");
        $_SESSION['resFuncionario'] = "Erro ao cadastrar funcionario";
        die();
    }
}
else {
    header("Location:../cadastroFuncionario.php");
    $_SESSION['resFuncionario'] = "Insira todos os valores";
    die();
}