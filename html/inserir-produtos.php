<?php 

                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5= $aviso_validacao6 = "";
                $nome="";
                $preco="";
                $id_produto="";
                $descricao = "";
                $categoria = "";
                $categoria1= "";
                $url_img = "";
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                  $nome=$_POST['nome'];
                  $preco=$_POST['preco'];
                  $descricao = $_POST['descricao'];
                  $categoria1 = $_POST['categoria'];
                  $url_img = $_POST['url_imagem'];  
                  $categoria =preg_replace("/[^0-9]/", "", $categoria1);
                     
                $sql = "INSERT INTO produto 
                 VALUES ('','$categoria','$nome','$preco','$descricao','$url_img') ";
                
                if( $db_connect->query($sql)== true )
                  {
                  $msg_envio =  'Produto cadastrado com sucesso';
                  echo $msg_envio;
                  header("Location:paginaprodutos-adm.php");                    
                  }else{

                  $msg_envio =  "Erro no cadastro do produto" . mysqli_error($db_connect);
                  echo $msg_envio;
  
                }
                
            

                include "footer.php"
?>