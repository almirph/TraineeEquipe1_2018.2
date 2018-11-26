<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Balão da Informática</title>

	<!-- Bootstrap -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/index-adm.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	 crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<link rel="icon" type="imagem/png" href="../assets/img/2.png" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div class="faixa" id="body-home">
		<h1>Balão da Informática </h1>
		<img src="../assets/img/1.png" class="img-fluid" width="120" height="75">
	</div>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand icone-balao2" href="index.php#body-home">
			<img src="../assets/img/1.png" width="38" height="23"> Balão da Informática</a>

		<a class="navbar-brand icone-balao" href="index.html#body-home">
			<img src="../assets/img/1.png" width="35" height="22"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
       
		<div class="collapse navbar-collapse " id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link nav-botn" href="index.php#body-home">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle nav-botn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
				 aria-haspopup="true" aria-expanded="false">
					Tabelas
				</a>
				<div class="dropdown-menu home" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="paginaprodutos-adm.php">Cadastrar produtos</a>
					<a class="dropdown-item" href="pagina_de_listagem.php">Lista de produtos</a>
					<div class="dropdown-divider home-linha"></div>
					<a class="dropdown-item" href="cadastrar.php">Cadastrar usuarios</a>		
					<a class="dropdown-item" href="inicial.php">Lista de usuarios</a>
					<div class="dropdown-divider home-linha"></div>
					<a class="dropdown-item" href="categoria.php">Cadastrar categorias</a>
					<a class="dropdown-item" href="lista_categoria.php">Lista de categorias</a>
				
				</div>
				</li>

				<li class="nav-item">
					<a class="nav-link nav-botn" href="logout.php">Logout</a>
				</li>
				
				
			</ul>

		</div>
	</nav>
<?php include "pagina_conexao.php";?>	
<?php include "Verifica-login.php";?>