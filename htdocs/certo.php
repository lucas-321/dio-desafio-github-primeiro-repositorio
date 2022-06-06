<?php
session_start();
/*include_once("conexao.php");*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>ings</title>

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
  <body  style="background-color: black;">
    
    <?php 
      include 'header2.php';
    ?>

<main>

  
    </div>



  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="" id="faixa">
      <p style="font-family: Verdana, sans-serif; font-size: 28px; text-align: center; text-transform: uppercase; font-weight: bolder; margin: 30px 100px;">Por Favor me encontre aqui ...</p>
  </div>

  <div class="container marketing" style="margin-top: 20px;">

    
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <center>
        <p style="color: white;">Se você chegou aqui primeiro ganha 200 pontos!!</p>
        <p style="color: white;">Se chegou depois ganhará 100!</p>
      </center>
      
      

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <center>
    	<h4><p>Smile - Esquerda - Sol - Esquerda - Bomba - Mão - Paz e Amor - Gota</p>	<p>Lista - Lista com a Ponta Dobrada - Computador - Pasta - Lista</p></h4>
    </center>
    <hr class="">

    <div class="row">

      <div class="col-lg-12" align="justify">
        <center>
        	<form action="certo_processa.php" method="post">
        		<label><h5 style="color: black;">siga por essas coordenadas...</h5></label>
        		<p><input type="password" name="resposta" id="resposta" style="border-radius: 20px"></p>
        		<input type="submit" name="btn" value="Prosseguir" class="btn btn-danger">
        		<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
        	</form>
        </center>
        
      </div>

    </div>
    <p style="color: black;">... me diga o meu nome</p>
    <p style="color: black;">WD-40</p>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

  <?php 
      include 'footer2.php';
  ?>


</main>


    <script>
     
    </script>

      
  </body>
</html>
