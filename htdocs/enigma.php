<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Enigma</title>

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
        <img src="img/biblioteca.png" style="filter: brightness(48%);">
        

        <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>


      </div>
    </div>



  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="d-none d-lg-block" id="faixa">
      <p style="font-family: Verdana, sans-serif; font-size: 28px; text-align: center; text-transform: uppercase; font-weight: bolder; margin: 30px 100px;">"O conselho da sabedoria é: Procure obter sabedoria; use tudo o que você possui para adquirir entendimento." Provérbios 4:7</p>
  </div>

  <div class="container marketing" style="margin-top: 20px">

    
    <!-- Three columns of text below the carousel -->
    <div class="row">
      
      <!--<div class="col-lg-4" style="">

            <div class="row" style="margin-bottom: 10px;">
              <button class="btn btn-outline-info" type="submit" style="border-radius: 30px; height: 40px; width: 100%;" onclick="educacao()">EDUCAÇÃO</button>
            </div>
            <div class="row" style="margin-bottom: 10px;">
              <button class="btn btn-outline-info" type="submit" style="border-radius: 30px; height: 40px; width: 100%;" onclick="saude()">SAÚDE</button>
            </div>
            <div class="row" style="margin-bottom: 10px;">
              <button class="btn btn-outline-info" type="submit" style="border-radius: 30px; height: 40px; width: 100%;" onclick="comercial()">COMERCIAL</button>
            </div>
            <br>

      </div>
      

      <div class="col-lg-4" id="lista">
        <div class="fadeIn">
          <ul class="list-group">
            <li class="list-group-item active">NOVA REDE</li>
            <li class="list-group-item">PLANEJAMENTO</li>
            <li class="list-group-item">MATRÍCULA</li>
            <li class="list-group-item">ATIVIDADES</li>
            <li class="list-group-item">ALUNOS</li>
            <li class="list-group-item">FUNCIONÁRIOS</li>
          </ul>
        </div>
      </div>--><!-- /.col-lg-4 -->

      <!--<div class="col-lg-4" id="fotos_sistemas">

        <img src="img/simples_site.png" width="100%" height="90%">

      </div>--><!-- /.col-lg-4 -->

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <center><h3><b>Chose your Destiny</b></h3>
    <p style="text-align: justify; width: 50%;">"O que as suas mãos tiverem que fazer, que o façam com toda a sua força, pois na sepultura, para onde você vai, não há atividade nem planejamento, não há conhecimento nem sabedoria."</p> <p>Eclesiastes 9:10</p>
    </center>
    <hr class="">

    <div class="row">

      <div class="col-lg-6" align="justify">
        <center><h3><b>Caminho Proposto</b></h3></center>
        <a href="sabio.php"><button class="btn btn-outline-danger" type="submit" style="border-radius: 30px; height: 40px; width: 100%;" onclick="educacao()">Seja Sábio</button></a>
        <p>"A sabedoria oferece proteção, como o faz o dinheiro, mas a vantagem do conhecimento é esta: a sabedoria preserva a vida de quem a possui."</p>
        <p>Eclesiastes 7:12</p>
      </div>

      <div class="col-lg-6" align="justify">
        <center><h3><b>Caminho Estabelecido</b></h3></center>
        <a href="forte.php"><button class="btn btn-outline-success" type="submit" style="border-radius: 30px; height: 40px; width: 100%;" onclick="educacao()">Seja Forte</button></a>
        <p>Sejam fortes e corajosos. Não tenham medo nem fiquem apavorados por causa delas, pois o Senhor, o seu Deus, vai com vocês; nunca os deixará, nunca os abandonará". 
        <p>Deuteronômio 31:6</p>
        
      </div>

    </div>
    <p></p>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

  <?php 
      include 'footer2.php';
  ?>


</main>


    <script>
      function educacao(){
      document.getElementById("lista").innerHTML = "<div class='fadeIn'><ul class='list-group'><li class='list-group-item active'>MINHA NOVA ESCOLA</li><li class='list-group-item'>PLANEJAMENTO</li><li class='list-group-item'>MATRÍCULA</li><li class='list-group-item'>ATIVIDADES</li><li class='list-group-item'>ALUNOS</li><li class='list-group-item'>FUNCIONÁRIOS</li></ul></div>";
      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/simples_site.png" width="100%" height="90%" class='fadeIn'>`;
    }

    function saude(){
      document.getElementById("lista").innerHTML = "<div class='fadeIn'><ul class='list-group'><li class='list-group-item active'>SOMAR SAÚDE</li><li class='list-group-item'>GERENCIAMENTO</li><li class='list-group-item'>AGENDAMENTO</li><li class='list-group-item'>PROCEDIMENTOS</li><li class='list-group-item'>MÉDICOS</li><li class='list-group-item'>PACIENTES</li></ul></div>";
      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/somar_site.png" width="100%" height="90%" class='fadeIn'>`;
    }

    function comercial(){
      document.getElementById("lista").innerHTML = "<div class='fadeIn'><ul class='list-group'><li class='list-group-item active'>COMERCIAL</li><li class='list-group-item'>FRENTE DE LOJA</li><li class='list-group-item'>PONTO DE VENDA</li><li class='list-group-item'>FUNCIONÁRIOS</li><li class='list-group-item'>CLIENTES</li><li class='list-group-item'>FORNECEDORES</li></ul></div>";
      
      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/otimos_site.png" width="100%" height="90%" class='fadeIn'>`;
    }
    </script>

      
  </body>
</html>
