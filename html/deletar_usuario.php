<?php include 'header.php'; 

	  include 'pagina_conexao.php';

	  $usu_codigo = $_GET['usuario'];

	  $sql_code = "DELETE FROM usuario WHERE id_usuario = '$usu_codigo";
	  $sql_query = $db_connect->query($sql_code);



?>







<?php include 'footer.php' ?>
