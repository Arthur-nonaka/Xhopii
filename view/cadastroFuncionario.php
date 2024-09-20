<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/style.css" />
  <title>Cadastrar Funcionário</title>
</head>

<body>
  <header class="header-home">
    <section class="cabecalho">
      <section class="logo">
        <img src="img/logo.png" />
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

  <section class="main-clientes">
    <!-- <section class="box-cad"> -->
    <form class="box-cad" method="POST" action="./processamento/processamento.php" enctype="multipart/form-data">
      <?php
      session_start();
      if (!empty($_SESSION['resFuncionario'])) {
        echo $_SESSION['resFuncionario'];
      }
      ?>
      <section class="cad-title">
        <h2>Cadastrar Funcionário</h2>
      </section>
      <input type="text" placeholder="Nome" name="nome">
      <input type="text" placeholder="Sobrenome" name="sobrenome">
      <input type="text" placeholder="CPF" name="cpf">
      <input type="date" name="data">
      <input type="text" placeholder="Telefone" name="telefone">
      <input type="text" placeholder="Cargo / Função" name="cargo">
      <input type="text" placeholder="Salário" name="salario">
      <input type="text" placeholder="Email" name="email">
      <input type="password" placeholder="Senha" name="senha">

      <h3>Selecionar foto de perfil:</h3>
      <!-- <button>Enviar arquivo</button>
                <p>Nenhum arquivo escolhido</p> -->
      <input type="file" name="foto" id="foto">
      <input class="button" type="submit" value="CADASTRAR"></input>
    </form>


    <!-- </section> -->
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
</body>

</html>