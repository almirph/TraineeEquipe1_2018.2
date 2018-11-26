<?php
                include "header-adm.php";                             
                include "verifica-login.php"; 
                
                $descricao = $_POST['descricao'];
                $categoria = $_POST['categoria'];
                $url_imagem = $_POST['url_imagem'];
                $preco = $_POST['preco'];
                $nome = $_POST['nome']; 
                $categoria =preg_replace("/[^0-9]/", "", $categoria);
                
                $sql = "INSERT INTO produto (`id_produto`, `id_categoria`, `nome_produto`, `preco`, `descricao`, `url_imagem`) 
                VALUES ('NULL','$categoria','$nome','$preco' ,'$descricao','$url_imagem') ";
                
                
                if( $db_connect->query($sql)== true )
                  {   
                      $_SESSION['msg'] = "ok";
                      header("Location: paginaprodutos-adm.php");             
                           
                  }else{
                    $_SESSION['msg']="erro";
                       header("Location: paginaprodutos-adm.php");
    
                  }
                

?>