<?php
require_once 'banco.php';

function verClientes() {
    $conexao = Conectar();
    $sql = "SELECT * FROM cliente";
    $resultado = $conexao->query($sql);
    if($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
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