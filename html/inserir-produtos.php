<?php
                              
                include "header-adm.php"; 
                include "pagina_conexao.php";
                $descricao = $_POST['descricao'];
                $categoria = $_POST['categoria'];
                $url_imagem = $_POST['url_imagem'];
                $preco = $_POST['preco'];
                $nome = $_POST['nome']; 
                $sql1="SELECT* FROM categoria WHERE nome_categoria LIKE '$categoria' ";
                $resulto = $db_connect->query($sql1);
                $row1 = $resulto->fetch_assoc();
                $categoria = $row1['id_categoria'];
                $procura = strpos($url_imagem,".jpg");
                $procura1 = strpos($url_imagem,".png");
                if($procura ==false && $procura1 == false)
                {
                  $_SESSION['msg'] = "formato";
                  header("Location:paginaprodutos-adm.php");

                }
                else
                {
                  $sql = "INSERT INTO produto (`id_produto`, `id_categoria`, `nome_produto`, `preco`, `descricao`, `url_imagem`) 
                VALUES ('NULL','$categoria','$nome','$preco' ,'$descricao','$url_imagem') ";
                
                
                if( $db_connect->query($sql)== true )
                  {   
                      $_SESSION['msg'] = "ok";
                      $_SESSION['nome_produto'] = $nome;
                      $_SESSION['preco'] = $preco;
                      $_SESSION['descricao'] = $descricao;
                      header("Location: cadastromsg.php");             
                           
                  }else{
                    $_SESSION['msg']="erro";
                       header("Location: paginaprodutos-adm.php");
    
                  }
                }

                
                
?>