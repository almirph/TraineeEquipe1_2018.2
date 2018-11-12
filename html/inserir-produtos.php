
<?php
                session_start();               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $nome="";
                $preco=""; 
                $descricao = "";
                $categoria = "";
                $categoria1= "";
                $url_img = "";
                $result_produto;
                                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                $nome=$_POST['nome'];
                $preco=$_POST['preco'];
                $descricao = $_POST['descricao'];
                $categoria1 = $_POST['categoria'];
                $url_img = $_POST['url_imagem'];  
                $categoria =preg_replace("/[^0-9]/", "", $categoria1);
                if($nome=="")
                {
                  $_SESSION['nome'] = "<p>Campo obrigatório</p>";
                  header("Location: paginaprodutos-adm.php");
                }
                elseif($categoria == ''){
                  $_SESSION['categoria'] = "<p>Campo obrigatório</p>";
                      header("Location: paginaprodutos-adm.php");
                }
                elseif($preco == ''){
                  $_SESSION['preco'] = "<p>Campo obrigatório</p>";
                      header("Location: paginaprodutos-adm.php");
                }
                elseif($descricao == ''){ 
                 $_SESSION['descricao'] = "<p>Campo obrigatório</p>";
                      header("Location: paginaprodutos-adm.php");
                }               
                elseif($url_img == ''){
                  $_SESSION[''] = "<p>Campo obrigatório</p>";
                      header("Location: paginaprodutos-adm.php");
                }else{
                $sql = "INSERT INTO produto 
                VALUES ('','$categoria','$nome','$preco','$descricao','$url_img') ";
                
                if( $db_connect->query($sql)== true )
                  {
                    
                      $_SESSION['msg'] = "<p>Produto editado com sucesso.</p>";
                      header("Location: paginaprodutos-adm.php");             
                           
                  }else{
                    
                      $_SESSION['msg'] = "<p>Não foi possível editar o produto</p>";
                      header("Location: paginaprodutos-adm.php");
    
                  }
                  
                }

?>