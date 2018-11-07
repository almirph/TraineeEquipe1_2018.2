<?php include "header.php" ?>



            <pre><?php print_r($_POST);?></pre>
<?php 
                $nome=$_POST['nome'];
                $preco=$_POST['preco'];
                $id_produto=$_POST['id_produtos'];
                $descricao = $_POST['descricao'];
                $categoria = $_POST['categoria'];
                $url_img = $_POST['url_imagem'];

                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                 $sql = "INSERT INTO produto(id_produto,id_categoria,nome_produto,preco,descricao,url_imagem) 
                 VALUES ('$id_produto','$categoria','$nome','$preco','$descricao','$url_img') ";

                if( $db_connect->query($sql)== true )
                {
                  $msg_envio =  'Produto enviado para o banco';
                  echo $msg_envio;
                }else{
                  $msg_envio =  "Nao foi possível enviar o produto" . mysqli_error($db_connect);
                  echo $msg_envio;
                }
                
?>

                Deseja inserir mais algum produto?
                <a href="paginaprodutos-adm.php">voltar</a>


<?php include "footer.php"?>