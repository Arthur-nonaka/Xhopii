<?php
class Funcionario{
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $email;
    protected $telefone;
    protected $dataNasc;
    protected $salario;

    public function __construct($nome, $sobrenome, $cpf, $email, $telefone, $dataNasc, $salario){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->dataNasc = $dataNasc;
        $this->salario = $salario;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }
    
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    
    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getDataNasc(){
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    
    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
}