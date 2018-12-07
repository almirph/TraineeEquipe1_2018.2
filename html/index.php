<?php include 'Header.php'; ?>
<?php 
	session_start();

?>




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
				<img class="d-block w-100" src="../assets/img/Lenovo-ThinkPad.jpg" alt="First slide">
			</div>
			<div class="carousel-item img-slide-home">
				<img class="d-block w-100" src="../assets/img/k7-Banner.png" alt="Second slide">
			</div>
			<div class="carousel-item img-slide-home">
				<img class="d-block w-100" src="../assets/img/Dell-laptop.jpg" alt="Third slide">
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

				<div class=" col-9 text">
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

	<div class="container home-produtos">
			
			<div class="pag-produtos lead">
<hr>
<h1 class="display-4 novidades">Novidades</h1>

</div>


		
		<div class="row justify-content-center card-produto-home">
	
				<?php           
					$quantidade = '4';
					$sql = "SELECT * FROM produto ORDER BY id_produto DESC LIMIT $quantidade";
					$result = $db_connect->query($sql);

					while ($row2 = $result->fetch_assoc())

					{?>
				<a href="paginaProdutos.php?id_produto=<?php echo $row2['id_produto'];?>">

					<div class="col-sm">
						<div class="card img-card" style="width:14rem;">
							<img class="card-img-top" src="../assets/imagem_banco/<?php echo $row2['url_imagem']; ?>" alt="Card image cap">

							<div class="card-body">
								<h5 class="card-title" style='color:black; font-size:16px;'>
									<?php echo $row2['nome_produto'];?>
								</h5>
								<h5 style='color:red; font-size:26px;'>R$
									<?php echo number_format($row2['preco'],'2',',','.');?>
									<h5>
							</div>
						</div>
					</div>
				</a>
				<?php }?>





			</div>

		</div>






		<hr class="my-4">
		<div class="home-lab">
			<p class="lead">Para ver mais novidades</p>
			<a class="btn btn-dark btn-lg" href="paginaNovidades.php" role="button">Clique Aqui</a>
		</div>
	</div>
</div>











<!-- FIM JUMBOTRON PRODUTOS-HOME -->
<!------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------>

<div class="modal fade" id="aviso">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                
                E-mail cadastrado com sucesso

            </div>
        </div>
    </div>
 </div>


<?php include 'footer.php'?>

<?php if (isset($_SESSION['modal'])): ?>
 
	<script>

		$('#aviso').modal('show');

	</script>
	<?php $_SESSION['modal'] = NULL; ?>
<?php endif; ?>



