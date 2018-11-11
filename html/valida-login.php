<?php 

        
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $db_name = 'balao_da_informatica';
        $port = '3306';

        $db_connect = new mysqli($server,$user,$password,$db_name,$port);
        mysqli_set_charset($db_connect,"utf-8");
        print_r($_POST);      
       if(!empty($_POST) and (EMPTY($_POST['usuario'])OR empty($_POST['senha'])))
       {
           header("Location: index.php"); exit;
       }   
       $login = ($_POST['usuario']);
       $senha= ($_POST['senha']);
    

       

        $confirma_login = mysqli_query($db_connect,"SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        
        if (mysqli_num_rows($confirma_login)<=0){
            echo "Login inválido";
            header("Location:index.php");

          }else{
            setcookie("login",$login);
            $xd = 'conta logada com sucesso';
            echo $xd;
            header("Location:paginaprodutos-adm.php");
          }
    