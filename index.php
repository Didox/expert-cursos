<?php function limitarTexto($texto, $limite, $quebrar = true){
  //corta as tags do texto para evitar corte errado
  $contador = strlen(strip_tags($texto));
  if($contador <= $limite):
    //se o número do texto form menor ou igual o limite então retorna ele mesmo
    $newtext = $texto;
  else:
    if($quebrar == true): //se for maior e $quebrar for true
      //corta o texto no limite indicado e retira o ultimo espaço branco
      $newtext = trim(mb_substr($texto, 0, $limite))."...";
    else:
      //localiza ultimo espaço antes de $limite
      $ultimo_espaço = strrpos(mb_substr($texto, 0, $limite)," ");
      //corta o $texto até a posição lozalizada
      $newtext = trim(mb_substr($texto, 0, $ultimo_espaço))."...";
    endif;
  endif;
  return $newtext;
}?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Diagnóstico de talentos</title>
  <link rel="stylesheet" href="css/agenda-online.css">
</head>

<body>

<!-- Agenda Online-->
  <div class="container">
    <div class="main">
      <h1 class="main__title"> Agenda Online</h1>
      <div class="courses">
        <div class="courses__row">

          <?php
            $json_file = file_get_contents("https://expert-curso-online.herokuapp.com/api/v1/cursos.json");
            $json_str = json_decode($json_file, true);
            $courses = $json_str['cursos'];

            foreach ( $courses as $course )
            { ?>
                <div class="courses__col">
                  <a class="course" href="detalhes_curso.php?id=<?php echo $course['id'] ?>">
                    <div class="course__row">
                      <div class="course__col">
                        <div class="course__img">
                          <img src="<?php echo $course['imagem'] ?>" alt="Imagem do Curso">
                        </div>
                      </div>
                    </div>

                    <div class="course__row">
                      <div class="course__col">
                        <div class="course__data">
                          <h2 class="course__type">
                            <?php echo $course['tipo'] ?>
                          </h2>
                          <h3 class="course__title">
                            <?php echo $course['nome'] ?>
                          </h3>
                          <p class="course__description">
                            <?php echo limitarTexto($course['descricao'], 150)?>
                          </p>
                          <!--<div class="course__teacher">-->
                          <!--  <img class="course__teacher-img" src="https://via.placeholder.com/30X30" alt="Professora Sheila Amanda">-->
                          <!--  <h3 class="course__teacher-name"> Professora Sheila Amanda </h3>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              <?php
               }
              ?>

        </div>
      </div>
    </div>
  </div>
</body>
</html>


