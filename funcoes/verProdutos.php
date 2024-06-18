<?php
require_once 'banco.php';

function verProdutos()
{
    $conexao = Conectar();
    $sql = "SELECT * FROM produto";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
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

function verProdutosBaratos()
{
    $conexao = Conectar();
    $sql = "SELECT * FROM produto ORDER BY valor ASC LIMIT 10";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
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



