<?php

class Cliente {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $data;
    private $telefone;
    private $email;
    private $senha;
    private $foto;


    public function __construct($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->data = $data;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
        $this->foto = $foto;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getData() {
        return $this->data;
    }
    public function setData($data) {
        $this->data = $data;
    }

    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFoto() {
        return $this->foto;
    }
    
    public function setFoto($foto) {
        $this->foto = $foto;
    }


}