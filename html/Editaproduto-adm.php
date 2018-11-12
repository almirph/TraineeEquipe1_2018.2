
<?php
                session_start();               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                                 $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5= $aviso_validacao6 = "";
                                 $nome="";
                                  $preco="";
                                  
                                  $descricao = "";
                                  $categoria = "";
                                  $categoria1= "";
                                  $url_img = "";
                                  $result_produto;
                                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                $id_produto=$_POST['id_produto'];
                $nome=$_POST['nome'];
                $preco=$_POST['preco'];
                $descricao = $_POST['descricao'];
                $categoria1 = $_POST['categoria'];
                $url_img = $_POST['url_imagem'];  
                $categoria =preg_replace("/[^0-9]/", "", $categoria1);
                $sql = "UPDATE `produto` SET `id_categoria` = '$categoria', `nome_produto` = '$nome', `preco` = '$preco', `descricao` = '$descricao', 
                `url_imagem` = '$url_img' WHERE `produto`.`id_produto` = '$id_produto';";
                //$resultado_edita =$db_connect->query($result_produto);
                if( $db_connect->query($sql)== true )
                {
                  $_SESSION['msg'] = "<p>Produto editado com sucesso.</p>";
                  header("Location: pagina_de_listagem.php");  
                           
                }else{
                   
                
                    $_SESSION['msg'] = "<p>Não foi possível editar o produto</p>";
                   header("Location: EditarProdutos.php?id_produto=$id_produto");
  
                }
?>