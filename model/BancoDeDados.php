<?php

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
}