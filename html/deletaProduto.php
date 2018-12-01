<?php include "pagina_conexao.php";
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db_name = 'balao_da_informatica';
  $port = '3306';

  
  $nome="";
  $preco="";
    
  $descricao = "";
  $categoria = "";
  $categoria1= "";
  $url_img = "";
  $result_produto;
         
  $db_connect = new mysqli($server,$user,$password,$db_name,$port);
  mysqli_set_charset($db_connect,"utf-8");
    
	$auxiliar = $_GET['id_produto'];
	$delete = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $auxiliar";
    if( $db_connect->query($delete)== true){
      $_SESSION['deleta'] = "deletado";
      
      header("Location: pagina_de_listagem.php");             
    }else{
        $_SESSION['deleta'] = "<p>Não foi possível editar o produto</p>";
      header("Location: pagina_de_listagem.php");

    }    
	
?>