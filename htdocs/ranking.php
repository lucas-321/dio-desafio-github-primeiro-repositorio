<?php
session_start();
    include_once("conexao.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Ranking</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
    <?php 
      include 'header2.php';
    ?>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 0rem;">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/gincana_corrida.png" style="filter: brightness(48%);">
        

        <div class="container">
          
        </div>
      </div>


      </div>
    </div>


  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="d-none d-lg-block" id="faixa">
      <p style="font-family: Verdana, sans-serif; font-size: 28px; text-align: center; text-transform: uppercase; font-weight: bolder; margin: 30px 100px;">Somos todos mais que vencedores em Cristo!</p>
  </div>

  <div class="container marketing" style="margin-top: 20px">

    <div style="margin: auto 100px; padding-bottom: 50px;">
      <p style="font-family: Verdana, sans-serif; font-size: 28px; text-align: center; text-transform: uppercase; font-weight: bolder; color: #47423e; margin-bottom: 3px;">Ranking Pontuação</p>
      <p class="d-none d-lg-block" style="font-family: Verdana, sans-serif;  text-align: center; font-size: 18px;">Confira aqui a sua pontuação. Seja o primeiro nessa competição!!</p>
    </div>

    <!-- Three columns of text below the carousel -->
    <div class="row" id="quadro" style="border: 1px solid #d3d3d3; border-radius: 1em; box-shadow:0 0 2em #d3d3d3; padding: 5px; overflow: scroll; max-height: 500px;">
      <?php 
                      $dados_cab2 = "SELECT * FROM participantes INNER JOIN equipe ON id_equipe_participante = id_equipe WHERE ativo_participante = '1' ORDER BY pontuacao_participante DESC";
                      $result_dados2 = mysqli_query($conn, $dados_cab2);

                      while ($row_dados2 = mysqli_fetch_assoc($result_dados2)) { ?>
                          
                          <div class="col-lg-4">
                           <b>Nome: </b><?php echo utf8_encode($row_dados2['nome_participante']); ?>
                          </div>
                          <div class="col-lg-4">
                           <b>Equipe: </b><?php echo utf8_encode($row_dados2['nome_equipe']); ?>
                          </div>
                          <div class="col-lg-4">
                           <b>Pontuação: </b><?php echo $row_dados2['pontuacao_participante']; ?>
                          </div>
                          <hr>
                  <?php
                      }
                  ?>
        
    </div>
    <br>
    <p><b>*A pontuação do ranking pode apresentar diferenças com a pontuação real, pois as mesmas são periodicamente atualizadas conforme a disponibilidade da equipe de operação.</b></p>

  </div>

  <?php 
      include 'footer2.php';
  ?>


</main>


    <script>

    </script>

      
  </body>
</html>
