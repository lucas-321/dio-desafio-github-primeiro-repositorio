<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #292929;">

	  <div class="container-fluid" >
	    <a class="navbar-brand" href="index.php" style=""><h5>GINCANA 2021</h5><!--<img src="img/logo_edutec_mini.png">--></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav" style="margin: 0% 25%;">
	      	<!--<li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            PRODUTOS
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="somar_model.php">SOMAR</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="simples_model.php">MINHA NOVA ESCOLA</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="otimos_model.php">GERENCIAMENTO COMERCIAL</a></li>
	          </ul>
	        </li>-->
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="provas.php">PROVAS</a>
	        </li>

	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="ranking.php">RANKING</a>
	        </li>

	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="equipes.php">EQUIPES</a>
	        </li>

	        <!--<li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="sobre_model.php">SOBRE</a>
	        </li>-->

	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">ÁREA RESTRITA	</a>
	        </li>

	        <div class="d-lg-none">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="enigma.php">ENIGMA</a>
		        </li>
		    </div>
	      </div>	

	      <div class="d-none d-lg-block">
	      	<a href="enigma.php" target="blank"><button class="btn btn-secondary" type="submit" style="border-radius: 30px;">ENIGMA</button></a>
	      </div>

	    </div>
	  </div>
	</nav>

	<script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!--Início do Contato-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header bg-dark text-light">
	        <h5 class="modal-title" id="exampleModalLabel">ÁREA RESTRITA</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">


	        <form method="post" id="insert_form" action="mensagem_processa.php">
	        	

	        		<div class="mb-3">
			          	<div class="row">
			          		<div class="col-lg-12">
			          			<label for="recipient-name" class="col-form-label">Login:</label>
				            	<input type="text" class="form-control" id="nome" name="nome" required>
			          		</div>
			          		<div class="col-lg-12">
			          			<label for="recipient-name" class="col-form-label">Senha:</label>
				            	<input type="email" class="form-control" id="email" name="email" required>
			          		</div>
			          	</div>
			         </div>

	        	
	          

	          <!--<div class="mb-3">
	          	<div class="row">
	          		<div class="col-lg-6">
	          			<label for="recipient-name" class="col-form-label">Telefone:</label>
		            	<input type="text" class="form-control" id="telefone" name="telefone">
	          		</div>
	          		<div class="col-lg-6">
	          			<label for="recipient-name" class="col-form-label">Celular:</label>
		            	<input type="text" class="form-control" id="celular" name="celular">
	          		</div>
	          	</div>
	          </div>

	          <div class="mb-3">
	          	<div class="row">
	          		<div class="col-lg-6">
	          			<label for="recipient-name" class="col-form-label">Cargo:</label>
		            	<input type="text" class="form-control" id="cargo" name="cargo">
	          		</div>
	          		<div class="col-lg-6">
	          			<label for="recipient-name" class="col-form-label">Departamento:</label>
		            	<select type="text" class="form-control" name="departamento" id="departamento">
						  <option value=""></option>
						  <option value="administrativo/financeiro">Administrativo/Financeiro</option>
						  <option value="comercial/marketing">Comercial/Marketing</option>
						  <option value="operacoes">Operações</option>
						  <option value="TI">Tecnologia da Informação</option>
						  <option value="RH">Recursos Humanos</option>
						  <option value="tributario">Tributário</option>
						  <option value="outro">Outro</option>
						</select>
	          		</div>
	          	</div>
	          </div>
	          
	          <div class="mb-3">
	            <label for="recipient-name" class="col-form-label">Empresa:</label>
	            <input type="text" class="form-control" id="empresa" name="empresa" required>     	
	          </div>
	          <div class="mb-3">
	            <label for="recipient-name" class="col-form-label">Segmento:</label>
	            <!--<input type="text" class="form-control" id="recipient-name">-->
	            <!--<select type="text" class="form-control" name="segmento" id="segmento">
				  <option value=""></option>
				  <option value="agro">Agro</option>
				  <option value="construcao">Construção</option>
				  <option value="distribuicao">Distribuição</option>
				  <option value="educacional">Educacional</option>
				  <option value="financeiro">Financial Services</option>
				  <option value="hospitalidade">Hospitalidade</option>
				  <option value="juridico">Jurídico</option>
				  <option value="logistica">Logística</option>
				  <option value="manufatura">Manufatura</option>
				  <option value="servico">Prestadores de Serviço</option>
				  <option value="varejo">Varejo</option>
				  <option value="saude">Saúde</option>
				  <option value="outro">Outro Segmento</option>
				</select>
	          </div>
	          <div class="mb-3">
	            <label for="message-text" class="col-form-label">Mensagem:</label>
	            <textarea class="form-control" id="mensagem" name="mensagem" required></textarea>
	          </div>-->

	          <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Entrar</button>
		        <input type="submit" class="btn btn-primary" name="sair" id="sair" value="Sair">
		      </div>
	        </form>


	      </div>
	      <div>
	      	
	      </div>
	      
	    </div>
	  </div>
	</div>
<!--Fim do contato-->


</body>
</html>