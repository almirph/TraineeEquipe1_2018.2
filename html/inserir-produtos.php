
<?php
                session_start();               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $result_produto;
                $aux = 0;
                                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                  
                $categoria =preg_replace("/[^0-9]/", "", $categoria1);
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
                }              
                if(empty($_POST['url_imagem'])){
                  $_SESSION['url_imagem'] = "";
                  $aux=$aux+1;
                }else{
                  $_SESSION['url_imagem']=$_POST['url_imagem'];
                }if($aux>0)
                {
                    $_SESSION['erro']="xd";
                    header("Location:paginaproduto-adm.php");
                }
                else{
                $sql = "INSERT INTO produto 
                VALUES ('','2','OLA','2' ,'descricao','url_img') ";
                echo $aux;
                
                if( $db_connect->query($sql)== true )
                  {
                    
                      $_SESSION['msg'] = "1";
                      header("Location: paginaprodutos-adm.php");             
                           
                  }else{
                    
                      $msg = mysqli_error($db_connect);
                      echo $msg;
                      //header("Location: paginaprodutos-adm.php");
    
                  }
                  
                }

?>