<?php include "header-adm.php";?>
<?php include "pagina_conexao.php"; ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{                  
	$categoria = $_POST['categoria'];                  
	$sql = "INSERT INTO `categoria` (`nome_categoria`) VALUES ('$categoria')";

	if( $db_connect->query($sql)== true ){
	} 
	$_SESSION['msg'] = "cadastrado";
	header("Location:lista_categoria.php");
	
}   

?>