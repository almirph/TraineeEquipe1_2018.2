<?php session_start();?> 
<?php include "header-adm.php"?>
<?php include 'pagina_conexao.php';?>
          <?php 
          if(!empty($_POST['deleta']))
          {
            {?>
              <div class="alert alert-success" role="alert">
              Produto deletado com sucesso.
              </div>
            <?php }
                    }
            
          if(isset($_SESSION['msg']))
          {
            if($_SESSION['msg']=='produto editado')
            {?>
              <div class="alert alert-success" role="alert">
              Produto editado com sucesso.
              </div>
            <?php }
          
              $_SESSION['msg']=NULL;
              }?>
              <div class="container lista-de-usuarios">

              <h1> Lista de produtos </h1>

              <hr>
              <nav class="navbar">
              <span style="font-size: 24px;"><a href="paginaprodutos-adm.php" class="fas fa-plus" alt="Cadastrar novo usuario"></a></span>
              <form class="form-inline my-2 my-lg-0" action="buscarLista.php?&pagina=1" enctype="multipart/form-data" method="GET">
                <input class="form-control mr-sm-2" type="text" placeholder="Digite aqui..." name="pesquisar">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
              </nav>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col-3">Preço</th>
                    <th scope="col-2">Ação</th>
                    
                  </tr>
                </thead>
                <tbody>

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
          
              if($_POST != NULL){
                $auxiliar = $_POST['deleta'];
                $delete = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $auxiliar";
              $result = $db_connect->query($delete);
              $_POST['deleta']=NULL;
  
            }
                
             
              
              $sql = "SELECT * FROM produto ORDER BY id_categoria DESC LIMIT $inicio, $quantidade ";
              $result = $db_connect->query($sql);
              while ($row = $result->fetch_assoc())
      {?>
      <tr>
              
              <td><?php echo $row['nome_produto'];?></td>
              <td><?php echo $row['preco'];?></td>
              
              <td>
             <div style="float:left"> 
            <div data-toggle="modal" data-target="#myModalRemarks<?php echo $row['nome_produto'];?>">
            <span style="font-size: 24px;"><button class="fas fa-trash-alt" type="submit" name="excluir" value="Excluir"></button></span>
            </div>
        <!--    <a href="#myModalRemarks<?php echo $row['nome_produto'];?>" class="remarksBtn" data-toggle="modal"><i class="fa fa-info-circle fa-lg">Go Forward</i></a> -->
        <div class="modal fade" id="myModalRemarks<?php echo $row['nome_produto'];?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                
          
              <div class="modal-dialog">
                  <!-- Modal content -->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                         Deseja mesmo remover o produto <?php echo $row['nome_produto'] ;?>?
                       </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>


                        <a href="pagina_de_listagem.php">

                          <form method="POST">
                            <input   value="<?php echo $row['id_produto'];?>" name="deleta" type="hidden"> 
                            <button  type="submit" class="btn btn-outline-dark "    >Sim</button></a>
                          </form>                                        

                        </div>
                      
                      
                      
                  </div>
            </div>
          </div>                  
      </div>
          </form>
            <form name="editar" action="EditarProdutos.php?id_produto=<?php echo $row['id_produto'] ?>" method="POST">

								<input type="hidden" name="id" value="<?php echo $row['id_usuario']; ?>">
								<span style="font-size: 24px;"><button class="fas fa-pen" type="submit" name="editar" value="Editar"></button></span>

							
      </form>  
                </td>
          </tr>    
             

      <?php     }      
            $sqlTotal   = "SELECT id_produto FROM produto";
            $qrTotal    = $db_connect->query($sqlTotal);
            $numTotal   = $qrTotal->num_rows;
 
            $totalPagina= ceil($numTotal/$quantidade);


            $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
            $proximo = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
 
      ?>
    
    </tr>
</tbody>
</table>
<nav >
  <ul class="pagination justify-content-end">
  <?php 
            if($pagina != '1')
            {?>
    <li class="page-item">
      <a class="page-link" href="pagina_de_listagem.php?pagina=<?php echo $anterior;?>">anterior</a>
    </li>
  
            <?php } ?>
            <?php
            if($totalPagina > 1 ){
         for($i = 1; $i < $totalPagina + 1; $i++) { ?>
        
    <li class="page-item"><a class="page-link" href='pagina_de_listagem.php?pagina=<?php echo $i;?>'><?php echo $i;?></a></li>
    <?php } 
            }
      ?>
  
  <?php 
   if($pagina != $totalPagina && $totalPagina > 1)
  {?> 
  
    <li class="page-item">
      <a class="page-link" href="pagina_de_listagem.php?pagina=<?php echo $proximo;?>">próximo</a>
    </li>
    <?php }?>
  </ul>
</nav>
</div>
</div>


<?php include "footer.php"?>
