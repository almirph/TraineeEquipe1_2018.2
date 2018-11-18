<?php include 'Header-adm.php';
session_start();

$_SESSION['msg_delete'] = 'Usuario deletado com sucesso.';

include 'pagina_conexao.php';
if(isset($_SESSION['msg_envio'])){

	echo $_SESSION['msg_envio'];
	unset($_SESSION['msg_envio']);
}

if(isset($_POST['acao'])){


	if($_POST['acao']=='excluir')
	{

		$sql_code = "DELETE FROM usuario WHERE id_usuario = '{$_POST['id']}'";
		$db_connect->query($sql_code);
		echo $_SESSION['msg_delete'];
		unset($_SESSION['msg_delete']);

	}
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


							<form name="excluir" action="inicial.php" method="POST">

								<input type="hidden" name="id" value="<?php echo $row['id_usuario']; ?>">
								<input type="hidden" name="acao" value="excluir">
								<span style="font-size: 24px"><button class="fas fa-trash-alt" type="submit" name="excluir" value="Excluir"></button></span>

							</form>

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