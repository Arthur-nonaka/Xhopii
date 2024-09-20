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
    <title>Xhopii</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/style.css" />
</head>

<body>
    <header class="header-home">
        <section class="cabecalho">
            <section class="logo">
                <img src="./assets/img/logo.png" />
                <h1>Xhopii - Funcionarios</h1>
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

    <section class="mainProduto">
        <section>
            <h1>Funcionarios</h1>

            <section class="funcionarios">
                <?php
                require_once "../controller/Controlador.php";

                $controlador = new Controlador();
                $controlador->visualizarFuncionarios();
                ?>

            </section>
        </section>
    </section>

    <footer>
        <section class="info-grupo">
            <section>
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <section>
                    <label>Central de Ajuda</label>
                    <label>Como Comprar</label>
                    <label>Métodos de Pagamento</label>
                    <label>Garantia Xhopii</label>
                    <label>Devolução e Reembolso</label>
                    <label>Fale Conosco</label>
                    <label>Ouridoria</label>
                </section>
            </section>
            <section>
                <h2>SOBRE A XHOPII</h2>
                <label>Sobre Nós</label>
                <label>Políticas Xhopii</label>
                <label>Política de Privacidade</label>
                <label>Programa de Aliados da Xhopii</label>
                <label>Seja um Entregador Xhopii</label>
                <label>Ofertas Relâmpago</label>
                <label>Xhopii Blog</label>
                <label>Empresa</label>
            </section>
            <section>
                <h2>PAGAMENTO</h2>
                <section class="images">
                    <img src="img/pix.png" />
                    <img src="img/boleto.png" />
                    <img src="img/american.png" />
                    <img src="img/visa.png" />
                    <img src="img/mastercard.png" />
                    <img src="img/hipercad.png" />
                    <img src="img/elo.png" />
                </section>
            </section>
            <section>
                <h2>SIGA-NOS</h2>
                <label><img src="img/instagram.png" />Instagram</label>
                <label><img src="img/twitter.png" />Twitter</label>
                <label><img src="img/facebook.png" />Facebook</label>
                <label><img src="img/youtube.png" />Yotube</label>
                <label><img src="img/linekin.png" />Linkedln</label>
            </section>
            <section>
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <img src="img/qr-code.png" />
                <img src="img/googleplay.png" height="22px" />
                <img src="img/appstore.png" height="22px" />
            </section>
        </section>
        <label class="copyright">
            @ 2024 Xhopii. Todos os direitos acadêmicos reservados
        </label>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>