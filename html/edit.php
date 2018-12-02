<?php session_start();?>
<?php include 'pagina_conexao.php'; ?>
<?php include "verifica-login.php"; ?>
<?php
                   
    $categoria = "";
    $categoria1= "";
    $alerta = NULL;   
    $id_categoria=$_POST['id_categoria'];                
    $categoria1 = $_POST['categoria'];  
    $categoria = $categoria1;
    $sql = "UPDATE `categoria` SET `nome_categoria` = '$categoria' WHERE `categoria`.`id_categoria` = '$id_categoria';";
    if( $db_connect->query($sql)== true )
    {   
        $_SESSION['alerta'] = "<p>categoria editada com sucesso.</p>";
        $_SESSION['alerta']=1;
        header("Location: lista_categoria.php");  
    }                  
?>