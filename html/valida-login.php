<?php 
      
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $db_name = 'balao_da_informatica';
        $port = '3306';
        $db_connect = new mysqli($server,$user,$password,$db_name,$port);
        mysqli_set_charset($db_connect,"utf-8");
             
       if(!empty($_POST) and (EMPTY($_POST['usuario'])OR empty($_POST['senha'])))
       {
           header("Location: index.php"); exit;
       }   
       $login = ($_POST['usuario']);
       $senha= md5(md5($_POST['senha']));
       
       
        $confirma_login = mysqli_query($db_connect,"SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        
        if (mysqli_num_rows($confirma_login)<=0)
          {?>
            <script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos'); window.location.href = 'index.php';</script>;
            <?php      
        }else{
            $resultado = mysqli_fetch_assoc($confirma_login);
    
            if (!isset($_SESSION)) 
            session_start();
            $_SESSION['ID'] = $resultado['id_usuario'];
            $_SESSION['Usuario'] = $resultado['login'];
            header("Location: index-adm.php"); exit;
          }