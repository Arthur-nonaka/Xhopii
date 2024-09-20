<?php
 
 require_once(__DIR__ . '/../model/BancoDeDados.php');
 require_once(__DIR__ . '/../model/Produto.php');
 require_once(__DIR__ . '/../model/Cliente.php');
 require_once(__DIR__ . '/../model/Funcionario.php');
 
class Controlador{
    private $bancoDeDados;
 
    public function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }
 
    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){
 
        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);

        return true;
    }
 
    public function visualizarProdutos(){
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        if ($listaProdutos->num_rows > 0) {
            while ($linha = $listaProdutos->fetch_assoc()) {
                $image_data = base64_encode($linha['foto']);
                echo "<section class='produtos-item'>";
                echo "<img src='data:image/jpeg;base64,{$image_data}' />";
                echo "<a href='produto.html'><label>" . $linha['nome'] . "</label></a>";
                echo "<section class='info-produto'>";
                echo "<p><strong>Fabricante: </strong></p>";
                echo "<p class='descricao'>". $linha['fabricante']."</p>";
                echo "</section>";
                echo "<section class='info-produto'>";
                echo "<p><strong>Descrição: </strong></p>";
                echo "<p class='descricao'>". $linha['descricao']."</p>";
                echo "</section>";
                echo "<section class='preco-quantidade'>";
                echo "<label class='preco'> R$ " . $linha['valor'] . "</label>";
                echo "<label class='quantidade'> " . $linha['quantidade'] . " disponiveis</label>";
                echo "</section>";
                echo "</section>";
    
            }
        } else {
            echo "Nenhum produto cadastrado!";
        }
    }

    public function visualizarProdutosBaratos() {
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        if ($listaProdutos->num_rows > 0) {
            while ($linha = $listaProdutos->fetch_assoc()) {
                $image_data = base64_encode($linha['foto']);
    
                echo "<section class='produtos-item' style='height: inherit'>";
                echo "<img src='data:image/jpeg;base64,{$image_data}' />";
                echo "<a href='produto.html'><label>" . $linha['nome'] . "</label></a>";
                echo "<section class='preco-quantidade'>";
                echo "<label class='preco'> R$ " . $linha['valor'] . "</label>";
                echo "<label class='quantidade'> " . $linha['quantidade'] . " disponiveis</label>";
                echo "</section>";
                echo "</section>";
            }
        }
    }

    public function cadastrarClientes($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto) {
        $cliente = new Cliente($nome, $sobrenome, $cpf, $data, $telefone, $email, $senha, $foto);
        $this->bancoDeDados->inserirCliente($cliente);

        return true;
    }
    
    public function visualizarClientes() {
        $listaClientes = $this->bancoDeDados->retornarClientes();
        if($listaClientes->num_rows > 0) {
            while($row = $listaClientes->fetch_assoc()) {
                Echo "<section class='funcionario-item'>";
                Echo "<label style='color: rgb(227, 77, 35); font-size: 23px'>" . $row['nome'] . " " . $row['sobrenome'] . "</label>";
                Echo "<label>Email: " . $row['email'] . "</label>";
                Echo "<label>CPF: " . $row['cpf'] . "</label>";
                Echo "<label>Telefone: " . $row['telefone'] . "</label>";
                Echo "</section>";
            }
        }else {
            echo "Nenhum funcionário cadastrado!";
        }
    }


    public function cadastrarFuncionario($nome, $sobrenome, $cpf, $email, $telefone, $dataNasc, $salario, $foto) {
        $funcionario = new Funcionario($nome, $sobrenome, $cpf, $email, $telefone, $dataNasc, $salario, $foto);
        $this->bancoDeDados->inserirFuncionario($funcionario);

        return true;
    }

    public function visualizarFuncionarios() {
        $listaFuncionarios = $this->bancoDeDados->retornarFuncionarios();
        if($listaFuncionarios->num_rows > 0) {
            while($row = $listaFuncionarios->fetch_assoc()) {
                Echo "<section class='funcionario-item'>";
                Echo "<label style='color: rgb(227, 77, 35); font-size: 23px'>" . $row['nome'] . " " . $row['sobrenome'] . "</label>";
                Echo "<label>Email: " . $row['email'] . "</label>";
                Echo "<label>CPF: " . $row['cpf'] . "</label>";
                Echo "<label>Cargo: " . $row['cargo'] . "</label>";
                Echo "<label>Salario: " . $row['salario'] . "</label>";
                Echo "<label>Telefone: " . $row['telefone'] . "</label>";
                Echo "</section>";
            }
        }else {
            echo "Nenhum funcionário cadastrado!";
        }
    }

    public function login($email, $senha) {
        $result = $this->bancoDeDados->retornarFuncionarioByEmail($email);
        if($result[0]['email'] == $email && $result[0]['senha'] == $senha) {
            return true;  
        }
        return false;
    }

    public function redefinirSenha($senha, $email) {
        $result = $this->bancoDeDados->retornarFuncionarioByEmail($email);
        if($result != null) {
            $this->bancoDeDados->updateSenhaFuncionario($result[0]['email'], $result[0]['senha']);
            return true;
        }

        return false;
    }
}
 
?>
 