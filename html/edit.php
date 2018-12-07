<?php include "header-adm.php";?>
<?php include "pagina_conexao.php"; ?>

<?php

$id_categoria=$_POST['id_categoria'];                
$categoria = $_POST['categoria'];  
$sql = "UPDATE `categoria` SET `nome_categoria` = '$categoria' WHERE `categoria`.`id_categoria` = '$id_categoria';";
if( $db_connect->query($sql)== true )
{   
	$_SESSION['alerta']='1';
	header("Location: lista_categoria.php");  
}                  
?>