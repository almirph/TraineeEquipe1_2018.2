
<?php
                              
                include "verifica-login.php"; 
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $result_produto;
                $aux = 0;
                 $nome = $_SESSION['nome'];
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                $descricao = $_POST['descricao'];
                $categoria = $_POST['categoria'];
                $url_imagem = $_POST['url_imagem'];
                $preco = $_POST['preco'];
                $nome = $_POST['nome']; 
                $categoria =preg_replace("/[^0-9]/", "", $categoria);

                
                if(empty($_POST['nome']))
                {
                  $_SESSION['nome'] = "";
                  $aux=$aux+1;
                }
                else{
                  $_SESSION['nome']=$_POST['nome'];
                }
                if(empty($_POST['categoria'])){
                  
                  $_SESSION['categoria'] = "";
                  $aux=$aux+1; 
                }
                else{
                  $_SESSION['categoria'] =2;
                }
                if(empty($_POST['preco'])){
                  $_SESSION['preco'] = "";
                  $aux=$aux+1;   
                }
                else
                {
                  $_SESSION['preco'] = $_POST['preco'];
                }
                if(empty($_POST['descricao'])){ 
                 $_SESSION['descricao'] = "";
                $aux=$aux+1;
                }else{
                  $_SESSION['descricao']=$_POST['descricao'];
                  $descricao = $_POST['descricao'];
                }              
                if(empty($_POST['url_imagem'])){
                  $_SESSION['url_imagem'] = "";
                  $aux=$aux+1;
                }else{
                  $_SESSION['url_imagem']=$_POST['url_imagem'];
                }if($aux>0)
                {  
                  header("Location:paginaprodutos-adm.php");
                }
                else{
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
                }

?>