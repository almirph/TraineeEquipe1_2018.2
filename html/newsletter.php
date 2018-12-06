<?php
include 'pagina_conexao.php'; ?>

<?php



if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $e_mail = $_POST['imail'];
    $modal = 1;

    
    if($e_mail != "")
    {
     //Inserir no banco

        $sql_code = "INSERT INTO email

        VALUES('$e_mail')";

        if( $db_connect->query($sql_code)== true )
        {
            session_start();
            $_SESSION['modal'] = true;
            header("Location:index.php");
           
            
            $e_mail=NULL;      
        }
        else
        {?>
            <script language='javascript' type='text/javascript'>alert('E-mail já cadastrado!'); window.location.href = 'index.php';</script>
        <?php }



    }
}


?>