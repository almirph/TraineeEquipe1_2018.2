<?php include "pagina_conexao.php";


{
    
	$auxiliar = $_GET['id_produto'];
	$delete = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $auxiliar";
    $result = $db_connect->query($delete);
    if( $db_connect->query($result)== true )
                {
                  $_SESSION['deleta'] = "deletado";
                  header("Location: pagina_de_listagem.php");  
                           
                }else{
                   $_SESSION['deleta'] = "<p>Não foi possível editar o produto</p>";
                   header("Location: pagina_de_listagem.php");
  
                }    
	
}?>