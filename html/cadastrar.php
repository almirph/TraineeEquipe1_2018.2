<?php include 'header.php';


include 'pagina_conexao.php';



function clean_input($data){

	$cleandata = trim($data);
	$cleandata = stripcslashes($cleandata);
	$cleandata = htmlspecialchars($cleandata);

	return $cleandata;
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){


	$nome = $_POST['nome'];
	$senha = md5(md5($_POST['senha']));
	$csenha = md5(md5($_POST['csenha']));

	if($nome == ""){

		$erro_nome = '* O nome é obrigatório';
	}
	elseif($senha == ""){

		$erro_senha = '* A senha é obrigatória';
	}
	elseif(strcmp($senha, $csenha) !=0 ){

		$erro_csenha = '* As senhas não são iguais';
	}
	else{



		$nome = clean_input($nome);
		$senha = clean_input($senha);


		//Inserir no banco

		$sql_code = "INSERT INTO usuario

		VALUES('', '$nome', '$senha')";

		if( $db_connect->query($sql_code)== true )
		{
			$msg_envio =  'Usuario registrado com sucesso';
			echo $msg_envio;


			$nome=NULL;
			$senha=NULL;
			print_r($_POST);  
			header("Location: inicial.php");         
		}
		else{
			$msg_envio =  "Erro no cadastro do usuario" . mysqli_error($db_connect);
			echo $msg_envio;
		}
	}
}





?>







<div class="container cadastrar-usuarios">

	<h1>Cadastrar</h1>

	<hr>


	<span style="font-size: 24px;"><a href="inicial.php?p=cadastrar=" class="fas fa-arrow-left"></a></span>


	<form action="cadastrar.php" method="post">


		<div class="form-group">
			<label for="exampleInputEmail1">Nome</label>
			<input name="nome" type="name" class="form-control" id="exampleInputEmail1"  value="<?php if(isset($nome)){ echo $nome;} ?>" aria-describedby="emailHelp" placeholder="Digite o nome">
			<?php if(isset($erro_nome)){ ?>

				<div class="alert alert-danger alerta" role="alert"><?= $erro_nome; ?></div>
			<?php } ?>

		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
			<?php if(isset($erro_senha)){ ?>

				<div class="alert alert-danger alerta" role="alert"><?= $erro_senha; ?></div>
			<?php } ?>
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Confirme a senha</label>
			<input name="csenha" type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirme sua senha">
			<?php if(isset($erro_csenha)){ ?>

				<div class="alert alert-danger alerta" role="alert"><?= $erro_csenha; ?></div>
			<?php } ?>
		</div>
		<hr>
		<button name="confirmar "type="submit" class="btn btn-outline-dark">Salvar</button>

	</form>

	

</div>

<?php include 'footer.php' ?>