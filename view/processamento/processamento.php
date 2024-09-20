<?php

session_start();
require_once "./../../controller/Controlador.php";

$controlador = new Controlador();


//Login
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $resultado = $controlador->login($email, $senha);

    // $resultado = $conexao->query($sql);
    if ($resultado == true) {
        $_SESSION['email'] = $email;
        header('Location: ../homePage.php');
    } else {
        $_SESSION['resFuncionario'] = "Email ou senha incorretos";
        header('Location:../login.php');
    }
} else {
    $_SESSION['resFuncionario'] = "Informe todos os valores";
    header('Location:../login.php');
}



//Cliente
if(!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['cpf']) && !empty($_POST['data']) && !empty($_POST['telefone']) 
&& !empty($_POST['email']) && !empty($_POST['senha']) && isset($_FILES['foto']) && isset($_POST['tipo']) == "cliente"){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $foto = $_FILES['foto']['tmp_name'];
    $fotoblob = addslashes(file_get_contents($foto));

    $resultado = $controlador->cadastrarCliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $fotoblob);

    if($resultado === TRUE){
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

//Funcionario
if($_POST['nome'] != '' && $_POST['sobrenome'] != '' && $_POST['cpf'] != '' && $_POST['telefone'] != '' 
&& $_POST['cargo'] != '' && $_POST['salario'] != '' && $_POST['email'] != '' && $_POST['senha'] != '' 
&& $_POST['data'] != '' && isset($_FILES['foto']) && isset($_POST['tipo']) == "funcionario"){
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
    
    $resultado = $controlador->cadastrarFuncionario($nome, $sobrenome, $cpf,$cargo, $email, $telefone, $dataNasc, $salario, $fotoblob);

    // if($resultado === true) {
    //     header("Location:../login.php");
    //     $_SESSION['resFuncionario'] = "Cadastro Concluído";
    //     die();
    // }
    // else {
    //     header("Location:../cadastroFuncionario.php");
    //     $_SESSION['resFuncionario'] = "Erro ao cadastrar funcionario";
    //     die();
    // }
}
else {
    header("Location:../cadastroFuncionario.php");
    $_SESSION['resFuncionario'] = "Insira todos os valores";
    die();
}

//Produto
if(!empty($_POST['nome']) && !empty($_POST['fabricante']) && !empty($_POST['descricao']) && !empty($_POST['valor']) 
&& !empty($_POST['quantidade']) && isset($_FILES['foto']) && isset($_POST['tipo']) == "produto"){
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $foto = $_FILES["foto"]["tmp_name"];
    $fotoblob = addslashes(file_get_contents($foto));

    $resultado = $controlador->cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade, $fotoblob);

    if ($resultado === true) {
        $_SESSION['resProduto'] = "Cadastro concluído";
        header('Location:../cadastroProduto.php');
        die();    
      } else {
        header("Location:../cadastroProduto.php");
        $_SESSION['resProduto'] = "Erro ao cadastrar produto";
        die();
      }
} else {
  header("Location:../cadastroProduto.php");
  $_SESSION['resProduto'] = "Insira todos os valores";
  die();
}

//Redefinir Senha
if(!empty($_POST['senha']) && !empty($_POST['confirmarSenha'])){
    if($_POST['senha'] == $_POST['confirmarSenha']){
        $senha = $_POST['senha'];
        $email = $_SESSION['email'];
    
        $resultado = $controlador->redefinirSenha($senha, $email);
    
        if($resultado == true){
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