<?php include 'header-adm.php';

session_start();

include 'pagina_conexao.php'; ?>

<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $e_mail = $_POST['imail'];

    
    if($e_mail != "")
    {
     //Inserir no banco

        $sql_code = "INSERT INTO email

        VALUES('$e_mail')";

        if( $db_connect->query($sql_code)== true )
        {
            $msg_footer =  'Email registrado com sucesso';
            echo $msg_footer;
            $_SESSION['msg_footer'] = 'Email ' . $_POST['imail'] . ' registrado com sucesso.';
           
            ?><script language='javascript' type='text/javascript'>alert('E-mail cadastrado com sucesso!'); window.location.href = 'index.php';</script>; <?php
            $e_mail=NULL;      
        }



    }
}


?>