<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/style.css" />
    <title>Xhopii - Produto</title>
</head>

<body>
    <header class="header-home">
        <section class="cabecalho">
            <section class="logo">
                <img src="./assets/img/logo.png" />
                <h1>Xhopii</h1>
            </section>
            <form method="POST" action="./processamento/sair.php">

                <input type="submit" value="Sair" class="sair"></input>

            </form>
        </section>
        <nav>
            <ul>
            <li><a href="homePage.php">Home</a></li>
                <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
                <li><a href="cadastroFuncionario.php">Cadastro Funcionário</a></li>
                <li><a href="cadastroProduto.php">Cadastro Produto</a></li>
                <li><a href="verClientes.php">Ver Clientes</a></li>
                <li><a href="verFuncionarios.php">Ver Funcionários</a></li>
                <li><a href="verProdutos.php">Ver Produtos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <section class="imagem">
                <section class="imagem-opcoes">
                    <img src="img/produto1.png" class="escolhido" />
                    <img src="img/produto2.png" />
                    <img src="img/produto3.png" />
                    <img src="img/produto4.png" />
                    <img src="img/produto5.png" />
                </section>
                <section class="imagem-escolhida">
                    <img src="img/produto1.png" />
                </section>
            </section>
            <section class="info">
                <h1>
                    Camisa Desenvolvedor Front-End CSS
                </h1>
                <h2>R$56,90</h2>
                <p>171 peças disponíveis</p>
                <p>Modelos: </p>
                <section class="opcoes">
                    <button>
                        Preto
                    </button>
                    <button>
                        Azul
                    </button>
                    <button>
                        Verde
                    </button>
                    <button>
                        Cinza
                    </button>
                    <button>
                        Rosa
                    </button>
                </section>
                <p>Tamanhos: </p>
                <section class="opcoes">
                    <button>
                        P
                    </button>
                    <button>
                        M
                    </button>
                    <button>
                        G
                    </button>
                    <button>
                        GG
                    </button>
                </section>
                <p>Tamanho Selecionado: P</p>
                <button class="comprar">
                    Comprar Agora
                </button>
            </section>
        </section>
    </main>
</body>

</html>