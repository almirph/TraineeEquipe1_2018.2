<?php include 'Header-adm.php';


include 'pagina_conexao.php';


$auxiliar = $_GET['id_usuario'];





function clean_input($data){

	$cleandata = trim($data);
	$cleandata = stripcslashes($cleandata);
	$cleandata = htmlspecialchars($cleandata);

	return $cleandata;
}




$resultado = "SELECT * FROM usuario WHERE id_usuario LIKE '$auxiliar'";
$resulto = $db_connect->query($resultado);
$row1 = $resulto->fetch_assoc();
print_r($row1);





/*

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 


	
	$csenha = $_POST['csenha'];

	if($row1['login'] == ""){

		$erro_nome = '* O nome é obrigatório';
	}
	elseif($row1['senha'] == ""){

		$erro_senha = '* A senha é obrigatória';
	}
	elseif(strcmp($row1['senha'], $csenha) !=0 ){

		$erro_csenha = '* As senhas não são iguais';
	}

	else{


	}
	
}


*/


?>







<div class="container cadastrar-usuarios">

	<h1>Editar usuario</h1>

	<hr>


	<span style="font-size: 24px;"><a href="inicial.php?p=cadastrar=" class="fas fa-arrow-left"></a></span>


	<form action="salvar_alteracoes_usuario.php" method="post">


		<div class="form-group">
			<input type="hidden" name="id_usuario" value="<?php if(isset($auxiliar)){ echo $auxiliar;} ?>">
			<label for="exampleInputEmail1">Nome</label>
			<input name="nome" type="name" required class="form-control" id="exampleInputEmail1"  value="<?php if(isset($row1['login'])){ echo $row1['login'];} ?>" aria-describedby="emailHelp" placeholder="Digite o nome">
			<?php if(isset($erro_nome)){ ?>

				<div class="alert alert-danger alerta" role="alert"><?= $erro_nome; ?></div>
			<?php } ?>

		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input name="senha" type="password" class="form-control" required id="exampleInputPassword1" value="<?php if(isset($row1['senha'])){ echo $row1['senha'];} ?>" placeholder="Senha">
			<?php if(isset($erro_senha)){ ?>

				<div class="alert alert-danger alerta" role="alert"><?= $erro_senha; ?></div>
			<?php } ?>
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Confirme a senha</label>
			<input name="csenha" type="password" class="form-control" required id="exampleInputPassword2" placeholder="Confirme sua senha">
			<?php if(isset($erro_csenha)){ ?>

				<div class="alert alert-danger alerta" role="alert"><?= $erro_csenha; ?></div>
			<?php } ?>
		</div>
		<hr>
		<button name="confirmar "type="submit" class="btn btn-outline-dark">Salvar</button>

	</form>



</div>

<?php include 'footer.php' ?>