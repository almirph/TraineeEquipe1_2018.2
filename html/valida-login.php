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
       $login = $_POST['usuario'];
       $senha= md5(md5($_POST['senha']));
    

       

        $confirma_login = mysqli_query($db_connect,"SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        
        if (mysqli_num_rows($confirma_login)<=0){
            echo "Login inválido";
            header("Location:index.php");

          }else{
            $resultado = mysqli_fetch_assoc($query);
    
            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION)) session_start();
          
            // Salva os dados encontrados na sessão
            $_SESSION['UsuarioID'] = $resultado['id_usario'];
            $_SESSION['UsuarioNome'] = $resultado['usuario'];
            
          
            // Redireciona o visitante
            header("Location: inicial.php"); exit;
          }
    