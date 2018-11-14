<?php
                session_start();               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                                $aviso_validacao1 = "";
                                $nome="";
                                $categoria = "";
                                $categoria1= "";
                                
                                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                $id_categoria=$_POST['id_categoria'];
                // $nome=$_POST['nome'];
                
                $categoria1 = $_POST['categoria'];  
                $categoria = $categoria1;
                $sql = "UPDATE `categoria` SET `nome_categoria` = '$categoria' 
                WHERE `categoria`.`id_categoria` = '$id_categoria';";
                
                //$resultado_edita =$db_connect->query($result_categoria);
                if( $db_connect->query($sql)== true )
                {
                  $_SESSION['0'] = "<p>categoria editado com sucesso.</p>";
                  echo $aviso;
                  header("Location: lista_categoria.php");  
                    
                }else{               
                    
                    $_SESSION['0'] = "<p>Não foi possível editar a categoria</p>";
                    echo $aviso;
                    header("Location: lista_categoria.php");
  
                }
?>