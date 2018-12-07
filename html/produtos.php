<?php include 'Header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light categoria">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span style="font-size: 14px;">
        <i class="fas fa-arrow-down"></i>Categoria</span>
    </button>
    <div class="collapse navbar-collapse action-menu" id="navbarTogglerDemo01">
        <ul class="list-group mr-auto mt-2 mt-lg-0  menu-list">
            <?php include "nav-categoria.php"?>
        </ul>
    </div>
</nav>
<div class="container pag-produtos">
    <?php 
        $auxiliar = $_GET['id_categoria'];
    
        $sql1 = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
        $resultado = $db_connect->query($sql1);
        $row = $resultado->fetch_assoc();
    ?>
    <h1>
        <?php echo $row['nome_categoria']; ?>
    </h1>
    <br>

    <div class="row justify-content-center card-produto">
        <?php 
            $quantidade = 12;
            $pagina;
            if (isset($_GET['pagina']))
            {
                $pagina = $_GET['pagina'];
            } 
            else 
            {
                $pagina = '1';
            }
            $inicio = ($quantidade * $pagina) - $quantidade;

            $sql = "SELECT *FROM produto  WHERE id_categoria LIKE '$auxiliar' ORDER BY id_categoria DESC LIMIT $inicio, $quantidade ";
            $result = $db_connect->query($sql);
            
            while ($row2 = $result->fetch_assoc()): ?>
                <a href="paginaProdutos.php?id_produto=<?php echo $row2['id_produto']; ?>">
                    <div class="col-sm">
                        <div class="card img-card" style="width:16rem;">
                            <img class="card-img-top" src="../assets/imagem_banco/<?php echo $row2['url_imagem']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style='color:black; font-size:16px;'>
                                    <?php echo $row2['nome_produto'];?>
                                </h5>
                                <h5 style='color:red; font-size:26px;'>R$
                                <?php echo number_format($row2['preco'],'2',',','.');?>
                                <h5>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php
            $sqlTotal   = "SELECT id_produto FROM produto  WHERE id_categoria  LIKE '$auxiliar'";
            $qrTotal    = $db_connect->query($sqlTotal);
            $numTotal   = $qrTotal->num_rows;
    
            $totalPagina = ceil($numTotal/$quantidade);
            $anterior  = $pagina - 1;
            $proximo = $pagina+1;
        ?>
    </div>
    <nav>
        
</div>
<div class="container">
        <ul class="pagination justify-content-center">
            <?php 
            if($pagina != '1')
            {?>
            <li class="page-item">
                <a class="page-link paginacao" href="produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $anterior;?>">anterior</a>
            </li>

            <?php } ?>
            <?php
            if($totalPagina > 1 ){
                if($pagina == 1 && $totalPagina >3 )
                {
                    for($i = $pagina; $i < $pagina+3; $i++) { ?>

                        <li class="page-item"><a class="page-link <?php echo ($pagina ==$i) ? 'cor-paginacao': 'paginacao' ;?>" href='produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $i;?>'>
                                <?php echo $i;?></a></li>
                     <?php }?> 
                    <?php  }
                
                
                  elseif($totalPagina>= 3)
                  {

                    for($i = $pagina-1; $i < $pagina+1 + 1; $i++) { ?>

                        <li class="page-item "><a class="page-link  <?php echo ($pagina ==$i) ? 'cor-paginacao': 'paginacao' ;?>"  href='produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $i;?>'>
                                <?php echo $i;?></a></li>
                     <?php }?> 
                    <?php  }
                    else
                    {
                        for($i = 1; $i < $totalPagina + 1; $i++) { ?>

                            <li class="page-item "><a class="page-link  <?php echo ($pagina ==$i) ? 'cor-paginacao': 'paginacao' ;?>"  href='produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $i;?>'>
                                    <?php echo $i;?></a></li>
                         <?php  }
                    }
                    }   
                    if($pagina != $totalPagina && $totalPagina > 1)
                   {?>
                 
                             <li class="page-item">
                                 <a class="page-link paginacao" href="produtos.php?id_categoria=<?php echo $auxiliar;?>&pagina=<?php echo $proximo;?>">próximo</a>
                             </li>
                             <?php }?>
                         </ul>
                     </nav>
</div>


<?php include 'footer.php'?>