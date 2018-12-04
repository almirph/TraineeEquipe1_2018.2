<?php include "header-adm.php";

include "pagina_conexao.php";


require '../assets/phpmailer/Exception.php';
require '../assets/phpmailer/PHPMailer.php';
require '../assets/phpmailer/SMTP.php';

// Usar as classes sem o namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$mensagem = $_POST['texto'];
    $assunto = $_POST['assunt'];
    $nome = 'Balão da Informática';
	$flag = true;

	if($mensagem != "" && $assunto!= ""){
	
		$flag = false;

	}
	if($flag == false){


        $sql_code = "SELECT * FROM email";

			$resultado = $db_connect->query($sql_code);

			while ($row = $resultado->fetch_assoc()){


		// Criação do Objeto da Classe PHPMailer
		$mail = new PHPMailer(true); 
		$mail->CharSet="UTF-8";

		$texto_msg = 'E-mail enviado do formulário do site Balão da Informática' . '<br><br>' .

		'E-mail: ' . $row['e-mail'] . '<br>' .
		'Mensagem: ' . $_POST['texto'] . '<br>';



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
			$mail->setFrom($mail->Username, $nome);

        // Destinatário
			$mail->addAddress($row['e-mail'], 'Balão da Informática');

        // Conteúdo

        // Define conteúdo como HTML
			$mail->isHTML(true);                                  

        // Assunto
			$mail->Subject =  $assunto;
			$mail->Body    = $texto_msg;
			$mail->AltBody = $texto_msg;

        // Enviar E-mail
			$mail->send();
		 
			
        }
    
		catch (Exception $e) {
			echo 'A mensagem não foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;
		}


		$sucess_text = '* O formulário foi enviado com sucesso';
		header("Location: envio-email.php");

		
		
    }
} 
}





?>

<div class="container cadastrar-usuarios">
    <div class="lista-adm">
        <h1>E-mail</h1>
    </div>
    <form action="envio-email.php" method="POST">
        <div class="form-group">
            <label>Assunto</label>
            <input type="text" autocomplete="off" name="assunt" required="required" class="form-control" maxlength="50">
        </div>

        <div class="form-group">
            <label>Texto</label>
            <textarea class="form-control" required="required" autocomplete="off" name='texto' rows="6"></textarea>
        </div>
        <div class="pp-adm">

            <button type="submit" class="btn btn-dark ">Enviar</button>

        </div>

    </form>

    </div>
        <?php include "footer.php";?>