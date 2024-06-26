<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Login</title>
</head>

<body>
  <header class="header-login">
    <section class="logo-texto">
      <img id="logo" src="img/logo.png" />
      <h1 id="xhopii">Xhopii</h1>
      <h1 id="titulo-entre">Entre</h1>
    </section>

    <a id="link-ajuda" href="#ajuda">Precisa de ajuda?</a>
  </header>

  <section class="main-login">
    <section class="base-login">
      <!-- <section class="preencher-login"> -->
      <form class="inputs-login" method="POST" action="./funcoes/verificarFuncionario.php">
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
          <img src="img/facebookLogin.png" width="30px" height="30px" />
          Facebook
        </button>
        <button id="btn-opcao">
          <img src="img/googleLogin.png" width="30px" height="30px" /> Google
        </button>
        <button id="btn-opcao">
          <img src="img/appleLogin.jpg" width="30px" height="30px" /> Apple
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