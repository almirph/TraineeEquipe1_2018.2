<?php
    
    
    
    
    
    

   

    $quantidade = 12;
    
    if((isset($_GET['pagina']))==true)
    {
        $pagina = $_GET['pagina'];
    }
    if($pagina == '')
    {
        $pagina = '1';
    }
    $inicio     = ($quantidade * $pagina) - $quantidade;

    
    $sql = "SELECT * FROM produto ORDER BY id_produto DESC LIMIT $inicio, $quantidade";
    $result = $db_connect->query($sql);
    while ($row2 = $result->fetch_assoc())
{?>

                
        <?php }?>


        <?php
  
  $sqlTotal   = "SELECT id_produto FROM produto";
  $qrTotal    = $db_connect->query($sqlTotal);
    $numTotal   = $qrTotal->num_rows;
    
    $totalPagina= ceil($numTotal/$quantidade);
    echo $totalPagina;
   
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   $proximo = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
    ?>
    <div id="paginacao">
        <?php 
            if($pagina != '1')
            {?>
                <a href="?pagina=<?php echo $anterior;?>">anterior</a>
            <?php }

        
         for($i = 1; $i < $totalPagina + 1; $i++) { 
        echo "<a href='pagination.php?pagina=$i'>".$i."</a> "; 
    } 

  if($pagina != $totalPagina)
  {?>
      <a href="?pagina=<?php echo $proximo;?>">próximo</a>
  <?php }?>
  </div>