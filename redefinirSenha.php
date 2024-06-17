<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Redefinição de Senha</title>
</head>
<body>
    <header class="header-login">
        <section class="logo-texto">
          <img id="logo" src="img/logo.png" />
          <h1 id="xhopii">Xhopii</h1>
          <h1 id="titulo-entre">Redefinir Senha</h1>
        </section>
  
        <a id="link-ajuda" href="#ajuda">Precisa de ajuda?</a>
      </header>

    <section class="main-redefinir">
        <section class="box">
          <form action="funcoes/redefinirSenha.php" method="POST">
            <a href="login.php"><i class='bx bx-arrow-back' id="backArrow"></i></a>
            <section class="redefinir-info">
                <h2>Redefinir Senha</h2>
                <input id="input-redefinir" type="text" placeholder="Email" name="email">
                <input type="submit" id="btn-redefinir" value="ENVIAR">
              <?php
                session_start();
                if(!empty($_SESSION['resSenha'])){
                  echo $_SESSION['resSenha'];
                }
              ?>
              </section>
          </form>
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