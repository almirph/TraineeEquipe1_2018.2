<?php include 'Header-adm.php';


$_SESSION['msg_delete'] = 'Usuario deletado com sucesso.';
print_r($_SESSION);

include 'pagina_conexao.php';
}

if(isset($_SESSION['senha_invalida'])){ 

	if($_SESSION['senha_invalida']==1){
		?>
<div class="alert alert-sucess alert-dismissible" role="alert">
	Senha do Usuário incorreta.

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>

</div>

	
	
<?php } 

	?>
if(isset($_SESSION['msg_diferente'])){ ?>

	<div class="alert alert-danger alert-dismissible" role="alert">
		<?php echo $_SESSION['msg_diferente']; unset($_SESSION['msg_diferente']);?>

		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

	</div>

<?php }

if(isset($_SESSION['msg_envio'])){ ?>

	<div class="alert alert-success alert-dismissible" role="alert">
		<?php echo $_SESSION['msg_envio']; unset($_SESSION['msg_envio']);?>

		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

	</div>

}
<?php

if(isset($_POST['acao'])){


	if($_POST['acao']=='excluir')
	{ 

		$sql_code = "DELETE FROM usuario WHERE id_usuario = '{$_POST['id']}'";
		$db_connect->query($sql_code);
		?>

		<div class="alert alert-success alert-dismissible" role="alert">
			<?php echo $_SESSION['msg_delete']; unset($_SESSION['msg_delete']);?>

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>

		</div>
		

	<?php } ?>

	<?php
}

function selectIdPessoa($id){


	$sql = "SELECT * FROM usuario WHERE id_usuario=" .$id;
	$resultado = $db_connect->query($sql);
	$pessoa = mysqli_fetch_assoc($resultado);

	return $pessoa;
}

?>

<div class="container lista-de-usuarios">

	<h1>Usuarios</h1>

	<hr>

	<span style="font-size: 24px;"><a href="cadastrar.php?p=cadastrar" class="fas fa-plus" alt="Cadastrar novo usuario"></a></span>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nome</th>
				<th scope="col">Ação</th>
				
			</tr>
		</thead>
		<tbody>

			<?php 

			$sql_code = "SELECT * FROM usuario";

			$resultado = $db_connect->query($sql_code);

			while ($row = $resultado->fetch_assoc())

				{?>

					<tr>
						<th scope="row"><?php echo $row['id_usuario']; ?></th>
						<td><?php echo $row['login']; ?></td>
						<td>


							
							

							<div style="float: left">
								<div data-toggle="modal" data-target="#myModalRemarks<?php echo $row['id_usuario'];?>">
									<span style="font-size: 24px;"><button class="fas fa-trash-alt" type="submit" name="excluir"
										value="Excluir"></button></span>
									</div>
									<!--    <a href="#myModalRemarks<?php echo $row['id_categoria'];?>" class="remarksBtn" data-toggle="modal"><i class="fa fa-info-circle fa-lg">Go Forward</i></a> -->
									<div class="modal fade" id="myModalRemarks<?php echo $row['id_usuario'];?>" tabindex="-1"
										role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">


										<div class="modal-dialog">
											<!-- Modal content -->
											<div class="modal-content">

												<div class="modal-header">
													<h4 class="modal-title">Remover usuario</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<div class="modal-body">
													Deseja mesmo remover o usuario
													<b><?php echo $row['login'];?></b>?
												</div>

												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
													<form method="POST">
														<input type="hidden" name="id" value="<?php echo $row['id_usuario']; ?>">
														<input type="hidden" name="acao" value="excluir">
														<button type="submit" class="btn btn-dark " name="excluir">Sim</button>
													</form>

												</div>

											</div>

										</div>

									</div>

									

								</form>
							</div>



							

							<form name="alterar" action="editar_usuario.php?id_usuario=<?php echo $row['id_usuario'] ?>" method="POST">

								<input type="hidden" name="id" value="<?php echo $row['id_usuario']; ?>">
								<span style="font-size: 24px"><button class="fas fa-pen" type="submit" name="editar" value="Editar"></button></span>

							</form>



						</td>
					</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>

	<?php include 'footer.php' ?>