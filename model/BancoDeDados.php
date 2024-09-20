<?php

require_once "Cliente.php";
require_once "Funcionario.php";
require_once "Produto.php";

class BancoDeDados {
    private $host;
    private $login;
    private $senha;
    private $banco;

    public function __construct($host, $login, $senha, $banco) {
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->banco = $banco;
    }

    public function Conectar() {
        return mysqli_connect($this->host, $this->login, $this->senha, $this->banco);
    }

    public function inserirProduto(Produto $produto) {
        $conexao = Conectar();
        $sql = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, foto) VALUES ('$produto->getNome()', '$produto->getFabricante()', '$produto->getDescricao()', '$produto->getValor()', '$produto->getQuantidade()', '$produto->getFoto()')";
        mysqli_query($conexao, $sql);
    }

    public function retornarProdutos() {
        $conexao = Conectar();
        $sql = "SELECT * FROM produto";
        return mysqli_query($conexao, $sql);
    }

    public function inserirCliente(Cliente $cliente) {
        $conexao = Conectar();
        $sql = "INSERT INTO cliente (nome, sobrenome, cpf, datanascimento, telefone, email, senha, foto) VALUES ('$cliente->getNome()', '$cliente->getSobrenome()', '$cliente->getCpf()', '$cliente->getData()', '$cliente->getTelefone()', '$cliente->getEmail()', '$cliente->getSenha()', '$cliente->getFoto()')";
        mysqli_query($conexao, $sql);
    }

    public function retornarClientes() {
        $conexao = Conectar();
        $sql = "SELECT * FROM cliente";
        return mysqli_query($conexao, $sql);
    }

    public function inserirFuncionario(Funcionario $funcionario) {
        $conexao = Conectar();
        $sql = "INSERT INTO funcionario (nome,sobrenome, cpf,telefone, cargo, salario, email, senha, datanascimento, foto) 
        VALUES ('$funcionario->getNome()','$funcionario->getSobrenome()', '$funcionario->getCpf()', '$funcionario->getTelefone()', '$funcionario->getCargo()', '$funcionario->getSalario()', '$funcionario->getEmail()', '$funcionario->getSenha()', '$funcionario->getData()', '$funcionario->getFoto()')";
        mysqli_query($conexao, $sql);
    }

    public function retornarFuncionarios() {
        $conexao = Conectar();
        $sql = "SELECT * FROM funcionario";
        return mysqli_query($conexao, $sql);
    }

    public function retornarFuncionarioByEmail($email) {
        $conexao = Conectar();
        $sql = "SELECT * FROM funcionario WHERE email = '$email' LIMIT 1";
        return mysqli_query($conexao,$sql);
    }

    public function updateSenhaFuncionario($email, $senha) {
        $conexao = Conectar();
        $sql = "UPDATE funcionario SET senha = '$senha' WHERE email = '$email'";
        mysqli_query($conexao, $sql);
    }


}