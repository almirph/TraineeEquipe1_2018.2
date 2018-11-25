<?php include 'Header.php'; ?>  


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
    <?php $auxiliar = $_GET['id_categoria'];
    
    $sql1 = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
    $resultado = $db_connect->query($sql1);
    $row = $resultado->fetch_assoc();?>
    
    <h1><?php echo $row['nome_categoria'];?></h1><br>
    <div class="row card-produto">

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
  
      
      
        $sql = "SELECT *FROM produto  WHERE id_categoria LIKE '$auxiliar' LIMIT $inicio, $quantidade";
        $result=$db_connect->query($sql);
       while( $row2 = $result->fetch_assoc())
        {?> 
      
      <a href="paginaProdutos.php?id_produto=<?php echo $row2['id_produto'];?>">

      <div class="col-sm">
      <div class="card img-card" style="width:16rem;">
      <img class="card-img-top" src="../assets/imagem_banco/<?php echo $row2['url_imagem']; ?>" alt="Card image cap">
      <div class="card-body">
      <h5 class="card-title"style='color:black; font-size:16px;'><?php echo $row2['nome_produto'];?></h5>
      <h5 style='color:red; font-size:26px;'>R$ <?php echo $row2['preco'];?><h5>
      </a>
      </div>
      </div>
      </div>
        <?php }
        $sqlTotal   = "SELECT id_produto FROM produto ";
  $qrTotal    = $db_connect->query($sqlTotal);
    $numTotal   = $qrTotal->num_rows;
    
    $totalPagina= ceil($numTotal/$quantidade);
  
   
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   $proximo = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
    ?>
    <div class="paginacao">
        <?php 
            if($pagina != '1')
            {?>
                <a href="produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $anterior;?>">anterior</a>
            <?php }

        
         for($i = 1; $i < $totalPagina + 1; $i++) { ?>
        <a href='produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php $i;?>'><?php echo $i;?></a>
    <?php } 

  if($pagina != $totalPagina)
  {?> 
      <a href="produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $proximo;?>">próximo</a>
  <?php }?>
  </div>
          
      </div>
      
      </div>
      
        <?php include 'footer.php'?>