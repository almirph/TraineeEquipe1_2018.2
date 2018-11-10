<?php include 'Header.php';

function clean_input($data){

	$cleandata = trim($data);
	$cleandata = stripcslashes($cleandata);
	$cleandata = htmlspecialchars($cleandata);

	return $cleandata;
}

function var_setada($var){

	if(isset($var)){

		echo $var;
	}

}

require '../assets/phpmailer/Exception.php';
require '../assets/phpmailer/PHPMailer.php';
require '../assets/phpmailer/SMTP.php';

// Usar as classes sem o namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



		



if($_SERVER['REQUEST_METHOD'] == 'POST'){






	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$texto = $_POST['mensagem'];
	$flag = true;

	if($nome == ""){

		$erro_nome = '* O nome é obrigatório';
	}
	elseif($sobrenome == ""){

		$erro_sobrenome = '* O sobrenome é obrigatório';
	}
	elseif ($email == "") {

		$erro_email = '* O e-mail é obrigatório';
	}
	elseif ($texto=="") {

		$erro_texto = '* O texto é obrigatório';
	}
	else{

		$nome = clean_input($nome);
		$sobrenome = clean_input($sobrenome);
		$email = clean_input($email);
		$flag = false;

	}
	if($flag == false){


		// Criação do Objeto da Classe PHPMailer
		$mail = new PHPMailer(true); 
		$mail->CharSet="UTF-8";

		$texto_msg = 'E-mail enviado do formulário do site' . '<br><br>' .

		'Nome: ' . $nome . ' ' . $sobrenome . '<br>' .
		'E-mail: ' . $email . '<br>' .
		'Mensagem: ' . $texto . '<br>';



		try {

        //Retire o comentário abaixo para soltar detalhes do envio 
        // $mail->SMTPDebug = 2;                                

        // Usar SMTP para o envio
			$mail->isSMTP();                                      

        // Detalhes do servidor (No nosso exemplo é o Google)
			$mail->Host = 'smtp.gmail.com';

        // Permitir autenticação SMTP
			$mail->SMTPAuth = true;                               

        // Nome do usuário
			$mail->Username = 'testefaleconosco0@gmail.com';        
        // Senha do E-mail         
			$mail->Password = '789456123cju';                           
        // Tipo de protocolo de segurança
			$mail->SMTPSecure = 'tls';   

        // Porta de conexão com o servidor                        
			$mail->Port = 587;


        // Garantir a autenticação com o Google
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);

        // Remetente
			$mail->setFrom($email, $nome);

        // Destinatário
			$mail->addAddress('testefaleconosco0@gmail.com', 'Balão da Informática');

        // Conteúdo

        // Define conteúdo como HTML
			$mail->isHTML(true);                                  

        // Assunto
			$mail->Subject = 'Mensagem ';
			$mail->Body    = $texto_msg;
			$mail->AltBody = $texto_msg;

        // Enviar E-mail
			$mail->send();

			unset($nome);
			unset($sobrenome);
			unset($email);
			unset($texto); 
			
		}
		catch (Exception $e) {
			echo 'A mensagem não foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;
		}


		$nome = NULL;
		$sobrenome = NULL;
		$email = NULL;
		$sucess_text = '* O formulário foi enviado com sucesso';
		header("Location: faleconosco.php");

		
	
	} 
}





?>



<div id="contactus" class="container faleconosco2">

	<h1 pb-2 mt-4 mb-2 border-bottom"><span style="font-size: 42px; "><i class="far fa-comments"> </i></span>Fale conosco</h1>
	<hr>

	<form action="faleconosco.php" method="post">
		
		<div class="form-row">

			<div class="form-group col-sm-6">

				<label for="nome" style="text-align: left;">Nome:</label>
				<input type="text" class="form-control areatexto" name="nome" id="name" placeholder="Digite seu nome" value="<?php if(isset($nome)){ echo $nome;} ?>">
				<?php if(isset($erro_nome)){ ?>

					<div class="alert alert-danger alerta" role="alert"><?= $erro_nome; ?></div>
				<?php } ?>

			</div>

			<div class="form-group col-sm-6">

				<label for="sobrenome">Sobrenome:</label>
				<input type="text" class="form-control areatexto" id="name" name="sobrenome" placeholder="Digite seu sobrenome" value="<?php if(isset($sobrenome)){ echo $sobrenome;} ?>">

				<?php if(isset($erro_sobrenome)){ ?>

					<div class="alert alert-danger alerta"><?= $erro_sobrenome; ?></div>

				<?php } ?>

			</div>

		</div>

		<div class="form-row">

			<div class="form-group col-sm-12">

				<label for="email">E-mail:</label>
				<input type="email" class="form-control areatexto" id="email" name="email" placeholder="Digite seu e-mail" value="<?php if(isset($email)){ echo $email;} ?>">

				<?php if(isset($erro_email)){ ?>

					<div class="alert alert-danger alerta"><?= $erro_email; ?></div>

				<?php } ?>
			</div>

		</div>

		<div class="form-row text-mensagem">

			<div class="form-group col-sm-12">

				<label for="email">Mensagem:</label>
				<textarea class="form-control areatexto" rows="8" name="mensagem" placeholder="Digite sua mensagem" value="<?php if(isset($texto)){ echo $texto;} ?>"></textarea>

				<?php if(isset($erro_texto)){ ?>

					<div class="alert alert-danger alerta"><?= $erro_texto; ?></div>

				<?php } ?>

				<?php if(isset($sucess_text)) { ?>

					<div class="alert alert-success" role="alert"><?= $sucess_text; ?></div>

				<?php } ?>
			</div>


		</div>

		<div class="modal-footer">
			<button type ="submit" type="button" class="btn btn-outline-dark">Enviar</button>
		</div>

		

	</form>
<?php 
		

		?>


</div>
<!--

-->

<?php include 'footer.php'; ?>