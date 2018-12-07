
<?php include "header-adm.php"?>
<?php include 'pagina_conexao.php';?>
<?php 
          $quantidade = 15;
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
          
          if(!empty($_POST['deleta']))
          {
            {?>
<div class="alert alert-success" role="alert">
    Produto deletado com sucesso.

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

</div>
<?php }
                    }
            
          if(isset($_SESSION['msg']))
          {
            if($_SESSION['msg']=='produto editado')
            {?>
<div class="alert alert-success" role="alert">
    Produto editado com sucesso.

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    
</div>
<?php }
          
              $_SESSION['msg']=NULL;
              }?>
<div class="container lista-de-usuarios">
    <h1>Resultado da pesquisa:
        <?php echo $_GET['pesquisar']  ;?>
    </h1><br>
    <hr>
    <?php
        if(isset($_GET['pesquisar'])){
               $pesquisar_p = $_GET['pesquisar'];
               $pesquisar_p = preg_replace("[#^0-9a-z#]","","$pesquisar_p");
        
               $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar_p%' ORDER BY id_categoria DESC LIMIT $inicio, $quantidade ");
               $count = mysqli_num_rows($query);
               }
               if($count == 0) :?>
                <script  language='javascript' type='text/javascript'>alert('Produto não encontrado');window.location.href='pagina_de_listagem.php';</script> 
            <?php endif;?>
    <nav class="navbar">
        <span style="font-size: 24px;"><a href="paginaprodutos-adm.php" class="fas fa-plus" alt="Cadastrar novo usuario"></a></span>
        <form class="form-inline my-2 my-lg-0" action="buscarLista.php?&pagina=1" enctype="multipart/form-data" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Digite aqui..." name="pesquisar">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </nav>
<div style="overflow-x:auto;">
    <table class="table table-bordered ">
        <thead>
            <tr>

                <th scope="col">Nome</th>
                <th scope="col-3">Preço</th>
                <th scope="col-2">Ação</th>

            </tr>
        </thead>
        <tbody>

            <?php 
           
          
              if($_POST != NULL){
                $auxiliar = $_POST['deleta'];
                $delete = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $auxiliar";
              $result = $db_connect->query($delete);
              $_POST['deleta']=NULL;
  
            }
            
            if(isset($_GET['pesquisar'])){
               $pesquisar_p = $_GET['pesquisar'];
               $pesquisar_p = preg_replace("[#^0-9a-z#]","","$pesquisar_p");
        
               $query = mysqli_query($db_connect,"SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar_p%' ORDER BY id_categoria DESC LIMIT $inicio, $quantidade ");
               $count = mysqli_num_rows($query);
               }
               
               if($count == 0) :
               // <!-- <script  language='javascript' type='text/javascript'>alert('Produto não encontrado');window.location.href='pagina_de_listagem.php';</script>  -->
                header("Location:index.php");
             endif;
             while ($row = $query->fetch_assoc()) { ?>
                <tr>
          
                  <td>
                    <?php	echo $row['nome_produto']; ?>
                  </td>
                  <td>
                    R$
                    <?php	echo number_format($row['preco'], '2', ',', '.'); ?>
                  </td>
          
                  <td colspan="2">
                  <div class="arrumar">
                    <form name="editar" action="EditarProdutos.php?id_produto=<?php echo $row['id_produto'] ?>" method="POST">
                      <input type="hidden" name="id" value="<?php	echo $row['id_usuario']; ?>">
                      <span class="lapis" style="font-size: 24px;"><button  class="fas fa-pen" type="submit" name="editar" value="Editar"></button></span>
                    </form>
                    <div style="float:left">
                      <div data-toggle="modal" data-target="#myModalRemarks<?php	echo $row['id_produto']; ?>">
                        <span class="lixo" style="font-size: 24px;"><button class="fas fa-trash-alt" type="submit" name="excluir" value="Excluir"></button></span>
                      </div>
                    </div>
          
                    <div class="modal fade" id="myModalRemarks<?php	echo $row['id_produto']; ?>" tabindex="-1" role="dialog"
                      aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          
          
                      <div class="modal-dialog">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2>Deletar produto</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"></h4>
                          </div>
                          <div class="modal-body">
                            Deseja mesmo remover o produto
                            <b>
                              <?php	echo $row['nome_produto']; ?></b>?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
          
          
                              <a href="deletaProduto.php?id_produto=<?php echo $row['id_produto'];?>">
          
                                <form method="POST">
                                  <input value="<?php	echo $row['id_produto']; ?>" name="deleta" type="hidden">
                                  <button type="button" class="btn btn-dark ">Sim</button>
                                </a>
                              </form>
          
                            </div>
          
          
          
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
          
                </td>
              </tr>
          
          
              <?php
            }
          
                $sqlTotal   = "SELECT id_produto FROM produto WHERE nome_produto LIKE '%$pesquisar_p%'";
                $qrTotal    = $db_connect->query($sqlTotal);
                $numTotal   = $qrTotal->num_rows;
            
            $totalPagina= ceil($numTotal/$quantidade);
            
            
            $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
            $proximo = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
                    
      ?>

            </tr>
        </tbody>
    </table>
    </div>
    <nav>
        <ul class="pagination justify-content-end">
            <?php 
            if($pagina != '1')
            {?>
            <li class="page-item">
                <a class="page-link paginacao" href="buscarLista.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $anterior;?>">anterior</a>
            </li>

            <?php } ?>
            <?php
            if($totalPagina > 1 ){
                if($pagina == 1 && $totalPagina >3 && $totalPagina >$pagina)
                {
                    for($i = $pagina; $i < $pagina+3; $i++) { ?>

                        <li class="page-item"><a class="page-link <?php echo ($pagina ==$i) ? 'cor-paginacao': 'paginacao' ;?>" href='buscarLista.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $i;?>'>
                                <?php echo $i;?></a></li>
                     <?php }?> 
                    <?php  }
                
                
                  elseif($totalPagina>= 3 && $totalPagina>$pagina)
                  {

                    for($i = $pagina-1; $i < $pagina+1 + 1; $i++) { ?>

                        <li class="page-item "><a class="page-link  <?php echo ($pagina ==$i) ? 'cor-paginacao': 'paginacao' ;?>"  href='buscarLista.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $i;?>'>
                                <?php echo $i;?></a></li>
                     <?php }?> 
                    <?php  }
                    else
                    {
                        for($i = 1; $i < $totalPagina + 1; $i++) { ?>

                            <li class="page-item "><a class="page-link  <?php echo ($pagina ==$i) ? 'cor-paginacao': 'paginacao' ;?>"  href='buscarLista.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $i;?>'>
                                    <?php echo $i;?></a></li>
                         <?php  }
                    }
                    }
                    
                
         

           
   if($pagina != $totalPagina && $totalPagina > 1 && $totalPagina >$pagina)
  {?>

            <li class="page-item">
                <a class="page-link paginacao" href="buscarLista.php?pesquisar=<?php echo $pesquisar_p;?>&pagina=<?php echo $proximo;?>">próximo</a>
            </li>
            <?php }?>
        </ul>
    </nav>
</div>
</div>


<?php include "footer.php"?>