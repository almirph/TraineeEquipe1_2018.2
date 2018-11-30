<?php include "header.php";?>
<?php include "pagina_conexao.php";?>


<?php
    $output = '';
    $prod = '';
    
    
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
        <?php echo $_GET['pesquisar']  ;?>
    </h1><br>

    <?php
     $quantidade = 12;
     $pagina = "";
     if((isset($_GET['pagina']))==true)
     {
         $pagina = $_GET['pagina'];
     }
     if($pagina == '')
     {
         $pagina = '1';
     }
     $inicio     = ($quantidade * $pagina) - $quantidade;
 
     
     if(isset($_GET['pesquisar'])){
         $pesquisar_p = $_GET['pesquisar'];
         $pesquisar_p = preg_replace("[#^0-9a-z#]","","$pesquisar_p");
         
         $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar_p%' ORDER BY id_categoria DESC LIMIT $inicio, $quantidade ");
         $count = mysqli_num_rows($query);
         ?>
    <div class="row card-produto">
        <?php
        
         if($count == 0) {
            header("Location: produtos.php");
             
            }else{
                while($row = mysqli_fetch_assoc($query)) {             
                    ?>




        <a href="paginaProdutos.php?id_produto=<?php echo $row['id_produto'];?>">

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

                    </div>
                </div>
            </div>
        </a>
        <?php
            }
                   
        }
    }
    $sqlTotal   = "SELECT id_produto FROM produto WHERE nome_produto LIKE '%$pesquisar_p%'";
    $qrTotal    = $db_connect->query($sqlTotal);
    $numTotal   = $qrTotal->num_rows;

$totalPagina= ceil($numTotal/$quantidade);


$anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
$proximo = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
        
    
    ?>
    </div>
</div>

<nav>
    <ul class="pagination justify-content-end">
        <?php 
            if($pagina != '1')
            {?>
        <li class="page-item">
            <a class="page-link" href="buscar.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $anterior;?>">anterior</a>
        </li>

        <?php } ?>
        <?php
            if($totalPagina > 1 ){
         for($i = 1; $i < $totalPagina + 1; $i++) { ?>

        <li class="page-item"><a class="page-link" href="buscar.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $i;?>">
                <?php echo $i;?></a></li>
        <?php } 
            }
      ?>

        <?php 
   if($pagina != $totalPagina && $totalPagina > 1)
  {?>

        <li class="page-item">
            <a class="page-link" href="buscar.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $proximo;?>">próximo</a>
        </li>
        <?php }?>
    </ul>
</nav>








<?php include "footer.php"?>