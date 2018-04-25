<?php

$enviado = false;

if( isset($_GET['enviar']) ){

  $url = 'https://expert-curso-online.herokuapp.com/alunos.json';

  $data = array('usuario' => array('nome' => $_POST['nome'], 'email' => $_POST['email'], 'senha' => $_POST['senha'], 'telefone' => $_POST['telefone']));

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
   //if ($result !== FALSE) { 
  //   // header("Location: http://example.com/myOtherPage.php");
  //die($result);
  //}

  $enviado = true;

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title> Diagnóstico de talentos - Registro/Login</title>
  <link rel="stylesheet" href="css/agenda-online.css">
</head>
<body>
  <div class="container">
    <div class="main">
      <h1 class="main__title"> Comprar Curso - Logar / Registrar</h1>
      <div class="user-required">
        <div class="user-required__row">
          <div class="user-required__col-data">
            <div class="user-required__data-box">
              <div class="user-required__data-box__message-box">
                <h2 class="user-required__data-box__message-box-title"> Para prosseguir é necessário estar registrador e logado!</h2>
                <p class="user-required__data-box__message-box-short-description">
                  Se você ainda não for registrado preencha os dados de cadastro.
                </p>
              </div>
              <?php if ($enviado) { ?>
                <?php if ($result !== FALSE) { ?>
                  <div>Cadastro realizado com sucesso ...</div>
                <?php }else{ ?>
                  <div>Erro ao Cadastrar ...</div>
                <?php } ?>
              <?php } ?>
              <div class="user-required__data-box__form">
                <form action="cadastro-login2.php?&enviar=true" method="post" id="for_user-register">
                  <fieldset>
                    <legend> Cadastrar-se</legend>
                    <div class="user-required__data-box__form-group">
                      <label for="register-fname" class="user-required__data-box__form-group__label">Nome</label>
                      <input type="text" name="nome" required id="register-fname" class="user-required__data-box__form-group__input" placeholder="ex. João Augusto Rodrigues" autocomplete="name" autofocus title="Digite o seu nome completo"> <br />
                    </div>
                    <div class="user-required__data-box__form-group">
                      <label for="register-email" class="user-required__data-box__form-group__label">Email</label>
                      <input type="email" class="user-required__data-box__form-group__input" id="register-email" name="email" required placeholder="ex. jrodrigues@meuemail.com" autocomplete="email" title="Digite um email de formato válido" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" > <br />
                    </div>
                    <div class="user-required__data-box__form-group">
                      <label for="register-password" class="user-required__data-box__form-group__label">senha</label>
                      <input type="password" class="user-required__data-box__form-group__input" id="register-password" name="senha" required autocomplete="off" placeholder="Crie uma senha " title="Digite uma senha" > <br />
                    </div>
                    <div class="user-required__data-box__form-group">
                      <label for="register-tel" class="user-required__data-box__form-group__label">Telefone</label>
                      <input type="tel" class="user-required__data-box__form-group__input" id="register-tel" name="telefone" autocomplete="telephone" placeholder="ex.(51)4321-9876 " title="Digite seu telefone" > <br />
                    </div>
                    <input type="submit" class="button button--primary user-required__data-box__form-button" value="Cadastrar">
                  </fieldset>
                </form>
                <p class="user-required__data-box__message-box-short-description">
                    Caso seja registrado efetue o login logo abaixo.
                </p>
                <form action="https://expert-curso-online.herokuapp.com/api/v1/alunos/logar.json" method="get" id="for_user-login">
                  <fieldset>
                    <legend>Logar-se</legend>
                    <div class="user-required__data-box__form-group">
                      <label for="login-email" class="user-required__data-box__form-group__label">Email</label>
                      <input type="email" class="user-required__data-box__form-group__input" id="login-email" name="email" required placeholder="ex. jrodrigues@meuemail.com" autocomplete="email" title="Digite seu email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" > <br />
                    </div>
                    <div class="user-required__data-box__form-group">
                      <label for="login-password" class="user-required__data-box__form-group__label">senha</label>
                      <input type="password" class="user-required__data-box__form-group__input" id="login-password" name="senha" required autocomplete="off" placeholder="Sua Senha " title="Digite sua senha" > <br />
                    </div>
                    <input type="submit" class="button button--primary user-required__data-box__form-button" value="Entrar">
                  </fieldset>

                </form>
              </div>
            </div>
          </div>


          <div class="user-required__col-sidebar">
            <div class="user-required__sidebar">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
