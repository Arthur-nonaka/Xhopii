<?php

require_once "./Cliente.php";
require_once "./Funcionario.php";
require_once "./Produto'.php";

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

    public function inserirCliente(Cliente $cliente) {
        $conexao = Conectar();
        $sql = "INSERT INTO cliente (nome, sobrenome, cpf, datanascimento, telefone, email, senha, foto) VALUES ('$cliente->nome', '$cliente->sobrenome', '$cliente->cpf', '$cliente->data', '$cliente->telefone', '$cliente->email', '$cliente->senha', '$cliente->foto')";

        if($conexao->query($sql) === TRUE){
            $_SESSION['resCliente'] = "Cadastro Concluído";
            header("Location:../cadastroCliente.php");
            die();
        } else {
            header("Location:../cadastroCliente.php");
            $_SESSION['resCliente'] = "Erro ao cadastrar cliente";
            die();
        }
    }
}