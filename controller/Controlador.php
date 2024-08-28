<?php
 
require_once "../model/BancoDeDados.php";
require_once "../model/Produto.php";
require_once "../model/Cliente.php";
require_once "../model/Funcionario.php";
 
class Controlador{
    private $bancoDeDados;
 
    public function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }
 
    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){
 
        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }
 
    public function visualizarProdutos(){
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" .
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
    }

    public function cadastrarCliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto) {
        $cliente = new Cliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto);
        $this->bancoDeDados->inserirCliente($cliente);
    }

    public function visualizarClientes() {

    }
}
 
?>
 