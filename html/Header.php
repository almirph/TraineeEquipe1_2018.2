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
	<link href="../assets/css/index.css" rel="stylesheet">
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
<?php
      include 'pagina_conexao.php';			
?>

<div id="container">
	<div id="main">
	<div class="faixa" id="body-home">
		
		<a href="index-adm.php"><img src="../assets/img/nl2.png" class="img-fluid" ></a>
	</div>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand icone-balao2" href="index.php#body-home">
			<img src="../assets/img/nl2.png" width="160" height="48" ></a>

		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
       
		<div class="collapse navbar-collapse " id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link nav-botn" href="index.php#body-home">Home <span class="sr-only">(current)</span></a>
				</li>
				<a class="nav-link dropdown-toggle nav-botn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
				 aria-haspopup="true" aria-expanded="false">
					Produtos
				</a>
				<div class="dropdown-menu home" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="paginaNovidades.php".>Novidades</a>
					<div class="dropdown-divider home-linha"></div>

				<?php	$sql = "SELECT * FROM categoria";
						$result = $db_connect->query($sql);
						while ($row2 = $result->fetch_assoc())
					{?>
						<a class="dropdown-item" href="produtos.php?id_categoria=<?php echo $row2['id_categoria'];?>&pagina=1"><?php echo $row2['nome_categoria'];?></a>					
				<?php } 	?>
				
				</div>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-botn" href="Quemsomos.php">Quem somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-botn" href="faleconosco.php">Fale conosco</a>
				</li>
				
			</ul>

			
			<form class="form-inline my-2 my-lg-0" action="buscar.php?&pagina=1" enctype="multipart/form-data" method="GET">
				<input class="form-control mr-sm-2" type="text" placeholder="Digite aqui..." name="pesquisar">
				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
			</form>

<?php
     if(isset($_GET['pesquisar'])){
         $pesquisar_p = $_GET['pesquisar'];
         $pesquisar_p = preg_replace("[#^0-9a-z#]","","$pesquisar_p");
		 //PESQUISAR NA CATEGORIA SE NÃO TIVE RNA CATEGORIA, FAZ IF E RETONA 0 A UMA VARIAVEL
		 //PESQUISA NO BANCO SE NO PRODUTOS E VE SE FAZ A PESQUISA SE É UM PRODUTO OU CATEGORIA, SE FOR CATEGORIA 
		 // MANDA PRA PAGINA CATEGORIA
         $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar_p%'");
         $count = mysqli_num_rows($query);
         if($count == 0) {
            header("Location: paginaProdutos.php");

         }else{
            while($row = mysqli_fetch_array($query)) {
                $prod = $row['nome_produto'];

                
            }
         }
     }

     
?>
	</nav>