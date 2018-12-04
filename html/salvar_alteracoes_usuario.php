
<?php include 'header-adm.php' ?>

<?php include 'pagina_conexao.php' ?>



<?php 
$id=$_POST['id_usuario'];
$nome=$_POST['nome'];
$senha=md5(md5($_POST ['senha']));
$csenha=md5(md5($_POST['csenha']));
$senhaAtual=md5(md5($_POST['senha_atual']));
echo $senhaAtual;
$sql1 = "SELECT * FROM usuario WHERE senha = '$senhaAtual'";
$consulta    = $db_connect->query($sql1);
$numTotal   = $consulta->num_rows;
if($senha != $csenha){
    $_SESSION['msg_diferente'] = "Senhas diferem uma da outra, não foi possível modificar o usuário.";
    header("Location: inicial.php");
    
}
elseif($numTotal > 0 ){
   
   $sql = "UPDATE usuario SET login ='$nome', senha = '$senha'  WHERE id_usuario ='$id'";
    if( $db_connect->query($sql)== true  )
    {
        $_SESSION['msg_envio'] = 'Login de ID ' . $_POST['id_usuario'] . ' alterado para ' . $_POST['nome'] . ' com sucesso.';
        header("Location: inicial.php");
        
    }else{
        $_SESSION['msg'] = "<p>Não foi possível editar o o usuario</p>";
        header("Location: editar_usuario.php?id_usuario=$id_usuario");
        
    }
}
else {
    $_SESSION['erro'] ='1';
    header("Location: inicial.php");
}
?>



<?php include 'footer.php' ?>