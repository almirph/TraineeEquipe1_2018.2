<?php include 'header.php' ?>

<?php include 'pagina_conexao.php' ?>



<?php 

session_start();
$_SESSION['msg_envio'] = 'Login de ID ' . $_POST['id_usuario'] . ' alterado para ' . $_POST['nome'] . ' com sucesso.';
$id=$_POST['id_usuario'];
$nome=$_POST['nome'];
$senha=md5(md5($_POST ['senha']));
$csenha=md5(md5($_POST['csenha']));


if($senha == $csenha){


    $sql = "UPDATE usuario SET login ='$nome', senha = '$senha'  WHERE id_usuario ='$id'";



    if( $db_connect->query($sql)== true )
    {

        $_SESSION['msg'] = "<p>Usuario alterado com sucesso.</p>";
        header("Location: inicial.php");
        

    }else{


        $_SESSION['msg'] = "<p>Não foi possível editar o o usuario</p>";
        header("Location: editar_usuario.php?id_usuario=$id_usuario");

    }
}
else{

   $_SESSION['msg'] = "<p>Senhas diferem uma da outra.</p>";
   header("Location: editar_usuario.php");

}
?>



<?php include 'footer.php' ?>