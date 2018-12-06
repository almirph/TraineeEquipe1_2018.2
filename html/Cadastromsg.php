<?php include "header-adm.php";

include "pagina_conexao.php";


require '../assets/phpmailer/Exception.php';
require '../assets/phpmailer/PHPMailer.php';
require '../assets/phpmailer/SMTP.php';

// Usar as classes sem o namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if($_SESSION['msg'] == 'ok'){

<<<<<<< HEAD
    $nome = $_SESSION['nome_produto'];
    $preco = $_SESSION['preco'];
    $descricao=  $_SESSION['descricao'];
    usset($_SESSION['nome_produto']);
    usset($_SESSION['preco']);
    usset($_SESSION['descricao']);
    $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '$nome'");
	$mensagem = "Ola";
    $assunto = "Novidade ";
    $nome = 'Balão da Informática';
	$flag = true;

	if($mensagem != "" && $assunto!= ""){
=======
    $nome_produto = $_SESSION['nome_produto'];
    $preco = $_SESSION['preco'];
    $descricao=  $_SESSION['descricao'];
    unset($_SESSION['nome_produto']);
    unset($_SESSION['preco']);
    unset($_SESSION['descricao']);
    $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '$nome_produto'");
    $mensagem1 = "Mais um novo produto entrou para nossa coleção! Venha conferir o mais novo ";
    $mensagem2 = " no nosso site";
    $assunto = "Novidades";
  
    $nome = 'Balão da Informática';
	$flag = true;

	if(($mensagem1 != ""|| $mensagem2 != "" )&& $assunto!= ""){
>>>>>>> master
	
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

<<<<<<< HEAD
		'E-mail: ' . $row['e-mail'] . '<br>' .
		'Mensagem: ' . $mensagem . '<br>';
=======
		
		 $mensagem1 . $nome_produto . $mensagem2.'<br>';
>>>>>>> master



		try {

        //Retire o comentário abaixo para soltar detalhes do envio 
        // $mail->SMTPDebug = 2;                                

        // Usar SMTP para o envio
<<<<<<< HEAD
			$mail->isSMTP();                                      
=======
        $mail->isSMTP();                                      
>>>>>>> master

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


<<<<<<< HEAD
		$sucess_text = '* O formulário foi enviado com sucesso';
=======
        $sucess_text = '* O formulário foi enviado com sucesso';
      
>>>>>>> master
		header("Location: paginaprodutos-adm.php");

		
		
    }
} 
}





?>
