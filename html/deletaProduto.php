<?php
include "header-adm.php";
include "pagina_conexao.php";  
$auxiliar = $_GET['id_produto'];
$delete = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $auxiliar";
if( $db_connect->query($delete)== true){
  $_SESSION['deleta'] = "1";
  
  header("Location: pagina_de_listagem.php");             
}else{
  $_SESSION['deleta'] = "<p>Não foi possível editar o produto</p>";
  header("Location: pagina_de_listagem.php");

}    

?>