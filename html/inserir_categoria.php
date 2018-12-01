<?php include 'pagina_conexao.php'; ?>

<?php 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {                  
        $categoria = $_POST['categoria'];                  
        $sql = "INSERT INTO `categoria` (`nome_categoria`) VALUES ('$categoria')";

        if( $db_connect->query($sql)== true ){
        } 
            header("Location:lista_categoria.php");
    }

?>