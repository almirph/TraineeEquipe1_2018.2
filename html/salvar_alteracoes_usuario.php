<?php include 'header.php' ?>

<?php include 'pagina_conexao.php' ?>



<?php 

session_start();

$id=$_POST['id_usuario'];
$nome=$_POST['nome'];
$senha=md5(md5($_POST ['senha']));




$sql = "UPDATE usuario SET login ='$nome', senha = '$senha'  WHERE id_usuario ='$id'";



if( $db_connect->query($sql)== true )
{
  $_SESSION['msg'] = "<p>Produto editado com sucesso.</p>";
  header("Location: inicial.php");  

}else{


    $_SESSION['msg'] = "<p>Não foi possível editar o produto</p>";
    header("Location: editar_usuario.php?id_usuario=$id_usuario");

}
?>



<?php include 'footer.php' ?>