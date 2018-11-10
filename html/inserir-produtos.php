<?php include "header-adm.php" ?>



            <?php 
                $nome=$_POST['nome'];
                $preco=$_POST['preco'];
                $id_produto=$_POST['id_produtos'];
                $descricao = $_POST['descricao'];
                $categoria = $_POST['categoria'];
                $url_img = $_POST['url_imagem'];  
                $categoria =preg_replace("/[^0-9]/", "", $categoria);

             
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                 
                
?>

                Deseja inserir mais algum produto?
                <a href="paginaprodutos-adm.php">voltar</a>


<?php include "footer.php"?>
