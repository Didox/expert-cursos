<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title> Diagnóstico de talentos - Tire Suas Dúvidas</title>
  <link rel="stylesheet" href="css/agenda-online.css">
</head>
<body>
  <div class="container">
    <div class="main">
      <h1 class="main__title"> Comprar Curso - Tire Suas Dúvidas</h1>
      <div class="ask-contact">
        <div class="ask-contact__row">
          <div class="ask-contact__col-data">
            <div class="ask-contact__data-box">
              <div class="ask-contact__data-box__course-box">
                <h2 class="ask-contact__data-box__course-box-title"> Psicologia Do Esporte - Combo Modulo 1 e 2</h2>
                <p class="ask-contact__data-box__course-box-short-description">
                  Entenda o quão importante é o equilibrio emocional desempenho dos seus
                  jogadores.
                </p>
              </div>

              <div class="ask-contact__data-box__form">
                <form action="detalhes_curso.php?id=4" method="post" id="form_doubts">
                  <fieldset>
                    <legend> Você está com Dúvida? Deixe no Ajudar! </legend>
                    <div class="ask-contact__data-box__form-group">
                      <label for="fname" class="ask-contact__data-box__form-group__label">Nome completo</label>
                      <input type="text" name="fname" required id="fname" class="ask-contact__data-box__form-group__input" placeholder=" Ex. João Augusto Rodrigues" autocomplete="name" autofocus title="Digite o Nome completo do Titular do Cartão"> <br />
                    </div>
                    <div class="ask-contact__data-box__form-group">
                      <label for="email" class="ask-contact__data-box__form-group__label">Email</label>
                      <input type="email" class="ask-contact__data-box__form-group__input" id="email" name="email" required placeholder="Ex. jrodrigues@meuemail.com" autocomplete="email" title="Digite um email de formato válido" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" > <br />
                    </div>
                    <div class="ask-contact__data-box__form-group">
                      <label for="doubt" class="ask-contact__data-box__form-group__label">Dúvida</label>
                      <textarea type="text" class="ask-contact__data-box__form-group__text-area" id="doubt" name="doubt" required placeholder="Escreva aqui sua dúvida, questionamento "  title="Conte-nos suas dúvidas" ></textarea> <br />
                    </div>
                  </fieldset>



                    <input type="submit" class="button button--primary ask-contact__data-box__form-button" value="Enviar Dúvida">

                </form>

              </div>
            </div>
          </div>

          <div class="ask-contact__col-sidebar">
            <div class="ask-contact__sidebar">
              <div class="ask-contact__sidebar__contact-div">
              <span class=ask-contact__sidebar__contact-text> Outras formas de Contato</span>
                <address class="ask-contact__sidebar__contact-box">
                  <li class="ask-contact__sidebar__contact-li">
                    <span class="ask-contact__sidebar__contact-email"> Email: <br>cursos@diagnosticodetalentos.com.br</span>  <br>
                    <span class="ask-contact__sidebar__contact-phone"> Telefone:<br> (51)98589-7158 </span> <br>
                  </li>
                </address>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
