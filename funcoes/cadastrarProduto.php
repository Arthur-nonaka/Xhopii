<?php
require_once "banco.php";
session_start();

$conexao = Conectar();

// echo $_POST['nome'];
// echo $_POST['fabricante'];
// echo $_POST['descricao'];
// echo $_POST['valor'];
// echo $_POST['quantidade'];
// $img = $_FILES['foto'];
// echo $img;

if ($conexao->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST['nome']) && !empty($_POST['fabricante']) && !empty($_POST['descricao']) && !empty($_POST['valor']) 
&& !empty($_POST['quantidade']) && isset($_FILES['foto'])){
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $foto = $_FILES["foto"]["tmp_name"];
    $fotoblob = addslashes(file_get_contents($foto));

    $sql = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, foto) VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$fotoblob')";
    // echo $sql;

    if ($conexao->query($sql) === TRUE) {
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
?>