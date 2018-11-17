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
            $_POST['deleta']=NULL;
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

              <span style="font-size: 24px;"><a href="paginaprodutos-adm.php" class="fas fa-plus" alt="Cadastrar novo usuario"></a></span>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ação</th>
                    
                  </tr>
                </thead>
                <tbody>

      <?php 
              
              if($_POST != NULL){
                $auxiliar = $_POST['deleta'];
                $delete = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $auxiliar";
              $result = $db_connect->query($delete);
              }
                
             
              
              $sql = "SELECT * FROM produto";
              $result = $db_connect->query($sql);
              while ($row = $result->fetch_assoc())
      {?>
      <tr>
              
              <td><?php echo $row['nome_produto'];?></td>
              <td><?php echo $row['preco'];?></td>
              
              <td>
              <form name="excluir">
            <div  data-toggle="modal" data-target="#myModalRemarks<?php echo $row['nome_produto'];?>">
            <a><img width="22" height="22" src="../assets/img/lixo.png" method="post"></a>
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
                        <input  id="deleta" value="<?php echo $row['id_produto'];?>" name="deleta" type="hidden"> 
                        <button  type="submit" class="btn btn-outline-dark "    >Sim</button></a>
                      </form>                                        
        
                  </div>
            </div>
          </div>                  
      </div>
          </form>

                  <form name="editar">
                  <a href="EditarProdutos.php?id_produto=<?php echo $row['id_produto'] ?>"><img  width="24" height="26" src="../assets/img/pencil.png"> </a>
      </form>  
                </td>
          </tr>    
             

      <?php     }      ?>
    
    </tr>
</tbody>
</table>
</div>
</div>


<?php include "footer.php"?>