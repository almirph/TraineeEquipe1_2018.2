<?php
                $auxiliar = $_GET['id_usuario'];                   
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                                 $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5= $aviso_validacao6 = "";
                                 $auxiliar = $_GET['id_usuario'];
                                 $nome="";
                                  $preco="";
                                  $id_produto="";
                                  $descricao = "";
                                  $categoria = "";
                                  $categoria1= "";
                                  $url_img = "";
                                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
?>