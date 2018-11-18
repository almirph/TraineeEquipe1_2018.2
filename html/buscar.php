
<?php include "header-adm.php";?>
<?php 
 $server = 'localhost';
 $user = 'root';
 $password = '';
 $db_name = 'balao_da_informatica';
 $port = '3306';
 $categoria = "";
 $output = '';
 $prod = '';
//Conexão
 $db_connect = new mysqli($server,$user,$password,$db_name,$port);
 mysqli_set_charset($db_connect,"utf-8")

 
?>


<form action="buscar.php" enctype="multipart/form-data" method="POST">
    <input type="text" name="pesquisar" placeholder="Digite aqui...">
    <input type="submit" name="buscar" value="Procurar">
</form>

<?php
     if(isset($_POST['pesquisar'])){
         $pesquisar_p = $_POST['pesquisar'];
         $pesquisar_p = preg_replace("[#^0-9a-z#]","","$pesquisar_p");

         $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar_p%'");
         $count = mysqli_num_rows($query);
         if($count == 0) {
             $output = 'A pesquisa não teve resultados';

         }else{
            while($row = mysqli_fetch_array($query)) {
                $prod = $row['nome_produto'];

                $output = $prod;
            }
         }
     }

     print("$output");
?>









<?php include "footer.php"?>