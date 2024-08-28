<?php

session_start();
require_once "../../controller/Controlador.php";

$controlador = new Controlador();


//Login
if (isset($_POST['name']) && isset($_POST['senha'])) {
    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    header('Location:../home.php');
    die();
}

//Cliente
if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cpf'])
    && isset($_POST['data']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $dataNasc = $_POST['data'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $controlador->cadastrarCliente($nome, $sobrenome, $cpf, $dataNasc, $telefone, $email, $senha);

    header('Location:../cadastroCliente.php');
    die();
}

//Funcionario
if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cpf'])
    && isset($_POST['data']) && isset($_POST['telefone']) && isset($_POST['cargo'])
    && isset($_POST['salario']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $dataNasc = $_POST['data'];
        $telefone = $_POST['telefone'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $controlador->cadastrarFuncionario($nome, $sobrenome, $cpf, $data, $telefone, $cargo, $salario, $email, $senha);

        header('Location:../cadastroFuncionario.php');
        die();
}

//Produto
if (isset($_POST['nome']) && isset($_POST['fabricante']) && isset($_POST['descricao'])
    && isset($_POST['valor']) && isset($_POST['quantidade'])){
        $nome = $_POST['nome'];
        $fabricante = $_POST['fabricante'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];

        $controlador->cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade);

        header('Location:../cadastroProduto.php');
        die();
    }