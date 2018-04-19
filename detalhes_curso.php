<?php
    $id=trim($_GET['id']); // tirar espaços com TRIM
    $json_file = file_get_contents("https://expert-curso-online.herokuapp.com/api/v1/curso/".$id.".json");
    $json_str = json_decode($json_file, true);
    $course = $json_str;

    $video_link = $course['url_video'];
    $changelink = array("watch?v=");
    $embed_video_link = str_replace($changelink, "embed/", $video_link);
    if(empty($course['valor']))
      {
        $course['valor']='R$ 200,00'; //TODO verificar na API
      }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Diagnóstico de talentos - Detalhes Curso</title>
  <link rel="stylesheet" href="css/agenda-online.css">

</head>

<body>
  <div class="container">
    <div class="main">
      <h1 class="main__title">Detalhes Curso</h1>
      <div class="course-details">
        <div class="course-details__row">
          <div class="course-details__col-data">
            <div class="course-details__data-box">
              <div class="course-details__data-box__title-box">
                <h2 class="course-details__data-box__title"> <?php echo $course['nome'] ?></h2>
                <p class="course-details__data-box__short-description">
                  <?php echo $course['subtitulo'] ?>
                </p>
              </div>
              <div class="course-details__data-box__video-box">
                <iframe width="100%" height="410" src="<?php echo $embed_video_link ?>"
                  frameborder="0" allowfullscreen></iframe>
              </div>

              <!--<div class="course-details__data-box__hot-topics">-->
              <!--  <h3 class="course-details__data-box__hot-topics__title"> Principais Tópicos</h3>-->
              <!--  <ul>-->
              <!--    <li>-->
              <!--      Introdução a Psicologia Esportiva-->
              <!--    </li>-->
              <!--    <li>-->
              <!--    Instrumentos de avaliação em Psicologia Esportiva-->
              <!--  </li>-->
              <!--    <li>-->
              <!--      Brams - Conceituação, aplicação, interpretação e sua-->
              <!--      contribuição no controle de cargas de treinamento (Prática)-->
              <!--    </li>-->
              <!--    <li>-->
              <!--      Monitoramento Cognitivo: Conceituação, aplicação e-->
              <!--      interpretação (Prática)-->
              <!--    </li>-->
              <!--  </ul>-->
              <!--</div>-->
              <div class="course-details__data-box__markup-text">
                <h4 class="course-details__data-box__markup-text-title">Descrição do Curso</h4>
                <div class="course-details__data-box__markup-text-html">
                  <?php echo $course['descricao']?>

                </div>
              </div>
            </div>
          </div>

          <div class="course-details__col-sidebar">
            <div class="course-details__sidebar">
              <!--<h3 class=course-details__sidebar__about-teacher>Sobre a Professora</h3>-->
              <!--<a class="course-details__sidebar__teacher" href="http://example.com">-->
              <!--  <img class="course-details__sidebar__teacher-img" src="http://via.placeholder.com/150X150" alt="Professora Sheila Amanda">-->
              <!--  <div class="course-details__sidebar__teacher-box">-->
              <!--    <h3 class="course-details__sidebar__teacher-name"> Evanea Scopel </h3>-->
              <!--    <p class="course-details__sidebar__teacher-qualifications">-->
              <!--      Mestranda em Psicologia, Psicologa do Esporte Club Internacional,-->
              <!--      Instrutora Docente da CBF - Confederação Brasileira de Futebol-->

              <!--    </p>-->
              <!--  </div>-->
              <!--</a>-->
            <?php if(!empty($course['endereco']))
              {
            ?>

              <div class="course-details__sidebar__location">
                <span class="course-details__sidebar__location-title">
                 Localização
                </span>
                <div class="course-details__sidebar__location-map">
                  <iframe src="<?php echo "https://www.google.com/maps/embed/v1/place?q=".$course['endereco']."&key=AIzaSyBI53E5dQG30dXvfiItE2lRzQfvJzJ6Lpk"?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
                  </iframe>
                </div>
                <address class="course-details__sidebar__location-address"><?php echo $course['endereco']?> </address>
              </div>
              <?php
              }
              ?>
              <div class="course-details__investment">
                <span class="course-details__sidebar__investment-title">
                 Investimento
                </span>
                <!--<h3 class="course-details__sidebar__investment-product-title"></h3>-->
                <span class="course-details__sidebar__investment-price"><?php echo $course['valor']?></span>
              </div>

              <div class="course-details__sidebar__promo">
                <img class="course-details__sidebar__promo-img" src="<?php echo $course['imagem'] ?>" alt="PROMOÇÃO">
              </div>

              <div class="course-details__sidebar__i-want">
                <a class="button button--primary" href="cadastro.php?curso=<?php echo $course['id'] ?>">Matricule-se Já</a>
              </div>

              <div class="course-details__sidebar__more-info">
                <a class="button button--secondary" href="duvidas.php?curso=<?php echo $course['id'] ?>"> Tire Suas Dúvidas </a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
