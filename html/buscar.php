<?php include "header.php";?>
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


<nav class="navbar navbar-expand-lg navbar-light categoria">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse action-menu" id="navbarTogglerDemo01">

        <ul class="list-group mr-auto mt-2 mt-lg-0  menu-list">
            <?php include "nav-categoria.php"?>
        </ul>
    </div>
</nav>
<div class="container pag-produtos">
    <h1>Resultado da pesquisa:
        <?php echo $_POST['pesquisar']  ;?>
    </h1><br>

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
                // $prod = $row['nome_produto'];

                
                // print_r("$prod");
                // echo '<br>';
                ?>


    <div class="row card-produto">

        <a href="paginaProdutos.php?id_produto=<?php echo $row2['id_produto'];?>">

            <div class="col-sm">
                <div class="card img-card" style="width:16rem;">
                    <img class="card-img-top" src="../assets/imagem_banco/<?php echo $row['url_imagem']; ?>" alt="Card image cap">
                    
                    <div class="card-body">
                        <h5 class="card-title" style='color:black; font-size:16px;'>
                            <?php echo $row['nome_produto'];?>
                        </h5>
                        <h5 style='color:red; font-size:26px;'>R$
                            <?php echo $row['preco'];?>
                        <h5>
        </a>
                    </div>
                </div>
            </div>
    </div>
<?php
            }
        }
    }
    
    ?>
</div>










<?php include "footer.php"?>