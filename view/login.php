<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/style.css" />
  <title>Login</title>
</head>

<body>
  <header class="header-login">
    <section class="logo-texto">
      <img id="logo" src="./assets/img/logo.png" />
      <h1 id="xhopii">Xhopii</h1>
      <h1 id="titulo-entre">Entre</h1>
    </section>

    <a id="link-ajuda" href="#ajuda">Precisa de ajuda?</a>
  </header>

  <section class="main-login">
    <section class="base-login">
      <!-- <section class="preencher-login"> -->
      <form class="inputs-login" method="POST" action="./processamento/processamento.php">
        <h2 id="texto-login">Login</h2>
        <input type="email" id="input-login" placeholder="Email" name="email"/>
        <input type="password" id="input-login" placeholder="Senha" name="senha" />
        <a href="homePage.html"><button id="btn-login">ENTRE</button></a>
      </form>
      <!-- </section> -->

      <section class="links-login">
        <a href="redefinirSenhaVerifica.php">Esqueci minha senha</a>
        <a href="#sms">Fazer login com SMS</a>
      </section>

      <section class="divisao-login">
        <hr id="line" />
        OU
        <hr id="line" />
      </section>

      <section class="opcoes-login">
        <button id="btn-opcao">
          <img src="./assets/img/facebookLogin.png" width="30px" height="30px" />
          Facebook
        </button>
        <button id="btn-opcao">
          <img src="./assets/img/googleLogin.png" width="30px" height="30px" /> Google
        </button>
        <button id="btn-opcao">
          <img src="./assets/img/appleLogin.jpg" width="30px" height="30px" /> Apple
        </button>
      </section>

      <section class="cadastro-link">
        <p>Novo na Xhopii?</p>
        <a href="cadastroFuncionario.php">Cadastrar</a>
      </section>
      <?php
      session_start();
      if (!empty($_SESSION['resFuncionario'])) {
        echo $_SESSION['resFuncionario'];
      }
      ?>
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
          <img src="./assets/img/pix.png" />
          <img src="./assets/img/boleto.png" />
          <img src="./assets/img/american.png" />
          <img src="./assets/img/visa.png" />
          <img src="./assets/img/mastercard.png" />
          <img src="./assets/img/hipercad.png" />
          <img src="./assets/img/elo.png" />
        </section>
      </section>
      <section>
        <h2>SIGA-NOS</h2>
        <label><img src="./assets/img/instagram.png" />Instagram</label>
        <label><img src="./assets/img/twitter.png" />Twitter</label>
        <label><img src="./assets/img/facebook.png" />Facebook</label>
        <label><img src="./assets/img/youtube.png" />Yotube</label>
        <label><img src="./assets/img/linekin.png" />Linkedln</label>
      </section>
      <section>
        <h2>ATENDIMENTO AO CLIENTE</h2>
        <img src="./assets/img/qr-code.png" />
        <img src="./assets/img/googleplay.png" height="22px" />
        <img src="./assets/img/appstore.png" height="22px" />
      </section>
    </section>
    <label class="copyright">
      @ 2024 Xhopii. Todos os direitos acadêmicos reservados
    </label>
  </footer>
</body>

</html>