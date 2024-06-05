<?php
require_once "banco.php";
session_start();

$conexao = Conectar();

if(!empty($_POST['nome']) && !empty($_POST['fabricante']) && !empty($_POST['descricao']) && !empty($_POST['valor']) && !empty($_POST['quantidade']) && !empty($_POST['foto'])){
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, foto) VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$foto')";
}

if ($conexao->query($sql) === TRUE) {
    $_SESSION['res'] = "Cadastro concluído";
    header('Location:./cadastroFuncionario.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
  }
  
  $conexao->close();
?>