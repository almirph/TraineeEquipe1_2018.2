
<?php include 'Header.php'; ?>






	<!-- SLIDER -->
	<!------------------------------------------------------------------------------------------------------------------>
	<!------------------------------------------------------------------------------------------------------------------>

	<div class="container-fluid slide-home">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators ">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active img-slide-home">
					<img class="d-block w-100" src="../img/Lenovo-ThinkPad.jpg" alt="First slide">
				</div>
				<div class="carousel-item img-slide-home">
					<img class="d-block w-100" src="../img/k7-Banner.png" alt="Second slide">
				</div>
				<div class="carousel-item img-slide-home">
					<img class="d-block w-100" src="../img/Dell-laptop.jpg" alt="Third slide">
				</div>
			</div>


			<a class="carousel-control-prev home" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next home" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- FIM SLIDER -->
	<!------------------------------------------------------------------------------------------------------------------>
	<!------------------------------------------------------------------------------------------------------------------>







	<!-- JUMBOTRON PRODUTOS-HOME -->
	<!------------------------------------------------------------------------------------------------------------------>
	<!------------------------------------------------------------------------------------------------------------------>

	<div class="container icones">
		<div class="row">

			<div class=" col-md-4  icon">
				<div class="row">
					<div class=" col-2  i1">
						<span style="font-size: 28px"><i class="fas fa-store-alt"></i></span>
					</div>

					<div class=" col-10 text">
						<b>A Maior rede</b>
						<p>De lojas de informática do Brasil</p>
					</div>
				</div>

			</div>

			<div class=" col-md-4  icon">
				<div class="row">
					<div class=" col-2  i1 ">
						<span style="font-size: 28px"><i class="fas fa-medal"></i></span>
					</div>
					<div class=" col-10 text ">
						<b>Mais de 20 anos</b>
						<p>Atuando com o melhor preço</p>
					</div>
				</div>

			</div>

			<div class=" col-md-4  icon">
				<div class="row">
					<div class=" col-2  i1">
						<span style="font-size: 28px"><i class="far fa-check-circle"></i></span>
					</div>
					<div class=" col-10 text">
						<b>Mais de 2 Milhões</b>
						<p>De Clientes Atendidos</p>
					</div>
				</div>

			</div>

		</div>
	</div>


	<div class="container mais-vendidos">
		<div class="row ">
			<div class="col-1 trophy">
				<span style="font-size: 28px"><i class="fas fa-trophy"></i></span>

			</div>
			<div class="col-10 maisv">
				<h1 class="display-4 novidades">Mais vendidos</h1>

			</div>
		</div>
	</div>


	<div class="jumbotron jumbotron-fluid-home">
		<div class="container jumbotron-home">

			<div class="container home-produtos">
				<div class="row card-produto-home">
					<div class="col-sm">
						<div class="card img-card" style="width: 14rem;">
							<img class="card-img-top" src="../img/teclado1.jpg" alt="Card image cap">
							<div class="card-body">

								<h5 class="card-title">Nome do Produto</h5>
								<p class="card-text">Breve descrição a respeito do produto</p>
								<a href="paginaProdutos.html " class="btn btn-primary saiba-mais">Saiba mais </a>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card img-card" style="width: 14rem;">
							<img class="card-img-top" src="../img/teclado2.jpg" alt="Card image cap">
							<div class="card-body">

								<h5 class="card-title">Nome do Produto</h5>
								<p class="card-text">Breve descrição a respeito do produto</p>
								<a href="paginaProdutos.html " class="btn btn-primary saiba-mais">Saiba mais </a>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card img-card" style="width: 14rem;">
							<img class="card-img-top" src="../img/teclado3.jpg" alt="Card image cap">
							<div class="card-body">

								<h5 class="card-title">Nome do Produto</h5>
								<p class="card-text">Breve descrição a respeito do produto</p>
								<a href="paginaProdutos.html " class="btn btn-primary saiba-mais">Saiba mais </a>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card img-card" style="width: 14rem;">
							<img class="card-img-top" src="../img/teste-produto.jpg" alt="Card image cap">
							<div class="card-body">

								<h5 class="card-title">Nome do Produto</h5>
								<p class="card-text">Breve descrição a respeito do produto</p>
								<a href="paginaProdutos.html " class="btn btn-primary saiba-mais">Saiba mais </a>
							</div>
						</div>
					</div>





				</div>

			</div>






			<hr class="my-4">
			<p class="lead">Para ver mais novidades</p>
			<a class="btn btn-outline-dark btn-lg" href="Produtos2.html" role="button">Clique Aqui</a>
			<div id ="body-quemsomos"></div>
		</div>
	</div>
	










	<!-- FIM JUMBOTRON PRODUTOS-HOME -->
	<!------------------------------------------------------------------------------------------------------------------>
	<!------------------------------------------------------------------------------------------------------------------>

	<?php include 'footer.php'?>