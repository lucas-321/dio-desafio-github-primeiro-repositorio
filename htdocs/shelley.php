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
  <body  style="background-color: black;">
    
    <?php 
      include 'header2.php';
    ?>

<main>

  <!--<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 0rem;">
    


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/biblioteca.png" style="filter: brightness(48%);">
        

        <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>


      </div>-->
    </div>



  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="" id="faixa">
      <p style="font-family: Verdana, sans-serif; font-size: 28px; text-align: center; text-transform: uppercase; font-weight: bolder; margin: 30px 100px;">Soneto</p>
  </div>

  <div class="container marketing" style="margin-top: 20px;">

    
    <!-- Three columns of text below the carousel -->
    <div class="row">
      
      

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <center>
    	
        <p>Se você chegou aqui primeiro ganha 100 pontos!!</p>
        <p>Se chegou depois ganhará 50!</p>
      
    </center>
    <hr class="">

    <div class="row">

      
        <div class="col-md-6" style="height: 200px;"><center><img src="img/spring_flowers.png" onclick="spoon()"></center></div>
        <div class="col-md-6" style="height: 200px;"><center><img src="img/summer_suns.png" onclick="summer()"></center></div>
        <div class="col-md-6" style="height: 200px;"><center><img src="img/autumn_leave.png" onclick="autumn()"></center></div>
        <div class="col-md-6" style="height: 200px;"><center><img src="img/winter_crystal.png" style="margin-top: 5px;" onclick="winter()"></center></div>
        <div class="col-md-6">
          
          <p style="color: black; text-align: justify;" id="season">I met a traveller from an antique land<br> Who said:—Two vast and trunkless legs of stone<br> Stand in the desert. Near them on the sand, <br> Half sunk, a shatter'd visage lies, whose frown <br>And wrinkled lip and sneer of cold command<br> Tell that its sculptor well those passions read <br>Which yet survive, stamp'd on these lifeless things, <br>The hand that mock'd them and the heart that fed.<br> And on the pedestal these words appear:<br> "My name is Ozymandias, king of kings: <br>Look on my works, ye mighty, and despair!"<br> Nothing beside remains: round the decay <br>Of that colossal wreck, boundless and bare,<br> The lone and level sands stretch far away.</p>
        </div>
        <div class="col-md-6" id="fotos_sistemas">
          
        </div>
        <center>
        	<form action="shelley_processa.php" method="post">
        		<label><h5 style="color: black;">O Princípio da Incerteza</h5></label>
            <p style="color: black;">somente números</p>
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
    <p></p>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

  <?php 
      include 'footer2.php';
  ?>


</main>


    <script>
    function spoon(){

      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/spoon1.jpg" width="100%" height="90%" class='fadeIn'><h4 style="color: white; float: right;"><b>First This&#8593;</b></h4>`;
      document.getElementById("season").innerHTML = `<p style="color: white; text-align: justify; width: 50%;">"Já sonhamos juntos, semeando as canções no vento. Quero ver crescer nossa voz no que falta sonhar. Já choramos muito muitos se perderam no caminho, mesmo assim não custa inventar uma nova canção que venha nos trazer Sol de Primavera."</p>`;

    }
    function summer(){

      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/summer1.jpg" width="100%" height="90%" class='fadeIn'><h4 style="color: white; float: right;"><b>First This&#8593;</b></h4>`;
      document.getElementById("season").innerHTML = `<p style="color: white; text-align: justify; width: 50%;">"Quando o Verão chegar, eu quero ser mais forte do que sou, sem medo no olhar, nenhum motivo pra chorar. Quando o Verão chegar, um Sol mais forte aparecerá e vai nos aquecer, viver é preciso viver."</p>`;

    }
    function autumn(){

      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/autumn1.jpg" width="100%" height="90%" class='fadeIn'><h4 style="color: white; float: right;"><b>First This&#8593;</b></h4>`;
      document.getElementById("season").innerHTML = `<p style="color: white; text-align: justify; width: 50%;">"Uma tarde, uma ilusão, olhos frios numa direção, sei que corta bem dentro de mim, vento forte leva ao coração. Preciso te encontrar, preciso de você. Nessa tarde de Outono preciso te dizer."</p>`;

    }
    function winter(){

      document.getElementById("fotos_sistemas").innerHTML = `<img src="img/winter1.jpg" width="100%" height="90%" class='fadeIn'><h4 style="color: white; float: right;"><b>First This&#8593;</b></h4>`;
      document.getElementById("season").innerHTML = `<p style="color: white; text-align: justify; width: 50%;">"Eu mudei, nem sinto, nem vejo as coisas como via antes. Meus amigos cresceram, mudaram, ficaram distantes. Perdoe meu choro, é sincero. Mas digo sim, que mesmo confuso, perdido esperas por mim. Os meus olhos fechados Te enxergam bem perto de mim. Espero Te ver nesse Inverno."</p>`;

    }
    

    
    </script>

      
  </body>
</html>
