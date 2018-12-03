<?php
                include "header-adm.php";
                include "pagina_conexao.php";           
                $nome;
                $preco;
                $descricao;
                $categoria;
                $auxiliar;
                $url_img;
                $result_produto;
                $id_produto=$_POST['id_produto'];
                $nome=$_POST['nome'];
                $preco=$_POST['preco'];
                $descricao = $_POST['descricao'];
                $auxiliar = $_POST['categoria'];
                $url_img = $_POST['url_imagem'];
                $result_produto = "SELECT * FROM categoria WHERE nome_categoria LIKE '$auxiliar'";
                $resultado1 = $db_connect->query($result_produto); 
                $row= $resultado1->fetch_assoc();
                $categoria = $row['id_categoria'];
                $sql = "UPDATE `produto` SET `id_categoria` = '$categoria', `nome_produto` = '$nome', `preco` = '$preco', `descricao` = '$descricao', 
                `url_imagem` = '$url_img' WHERE `produto`.`id_produto` = '$id_produto';";
                 if( $db_connect->query($sql))
                 {
                   $_SESSION['msg'] = "1";
                   header("Location: pagina_de_listagem.php");  
                            
                 }else{
                     $_SESSION['msg'] = "<p>Não foi possível editar o produto</p>";
                      header("Location: EditarProdutos.php?id_produto=$id_produto");
                    }
?>