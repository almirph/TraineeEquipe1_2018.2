<?php include 'header.php' ?>

<?php include 'pagina_conexao.php' ?>



<?php 

session_start();
print_r($_POST);
$id=$_POST['id_usuario'];
$nome=$_POST['nome'];
$senha=md5(md5($_POST ['senha']));
$csenha=md5(md5($_POST['csenha']));
$senhatual = md5(md5($_POST['senha-atual']));
$query = "SELECT FROM usuario WHERE senha LIKE '$senhatual'";
echo $senhatual;
if($db_connect->query($sql))
{
    $_SESSION['senha_invalida'] = "1";
    header("Location:inicial.php");
}
elseif($senha != $csenha){

    $_SESSION['msg_diferente'] = "Senhas diferem uma da outra, não foi possível modificar o usuário.";
    header("Location: inicial.php");


    
}
else{

   

   $sql = "UPDATE usuario SET login ='$nome', senha = '$senha'  WHERE id_usuario ='$id'";



    if( $db_connect->query($sql)== true )
    {

        $_SESSION['msg_envio'] = 'Login de ID ' . $_POST['id_usuario'] . ' alterado para ' . $_POST['nome'] . ' com sucesso.';
     //   header("Location: inicial.php");
        

    }else{


        $_SESSION['msg'] = "<p>Não foi possível editar o o usuario</p>";
       // header("Location: editar_usuario.php?id_usuario=$id_usuario");

    }

}
?>



<?php include 'footer.php' ?>