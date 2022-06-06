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
    <title>Gincana JA</title>

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
        <img src="img/gincana_soldados.png" style="filter: brightness(48%);">
        

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
      <p style="font-family: Verdana, sans-serif; font-size: 28px; text-align: center; text-transform: uppercase; font-weight: bolder; margin: 30px 100px;">"Somos um em Cristo!</p>
  </div>

  <div class="container marketing" style="margin-top: 20px">

    
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-6">
        <form action="cadastrar_participante_efetua.php" method="post">
          
          <div class="form-group">
            <label>Nome:</label><br>
            <input type="text" name="nome">
            <br></br>
            <label>Equipe:</label>  
              <select name="equipe" style="width: 100%;">
                  <option></option>
                  <?php 
                      $dados_cab2 = "SELECT * FROM equipe WHERE ativo_equipe = '1'";
                      $result_dados2 = mysqli_query($conn, $dados_cab2);

                      while ($row_dados2 = mysqli_fetch_assoc($result_dados2)) { ?>
                          
                          <option value=<?php echo $row_dados2['id_equipe']; ?>><?php echo $row_dados2['nome_equipe']; ?></option>
                  <?php
                      }
                  ?>
              </select><br></br>
          
            <input type="submit" name="botao" class="btn btn-success" value="Cadastrar">
          </div>
          
          
        </form>
      </div>

      
      

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="">

    

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
