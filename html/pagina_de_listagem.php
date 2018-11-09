<?php include "header-adm.php"?>


<div class="container ">
  <div class="lista-adm">
<h1> Lista de produtos </h1>
</div>
<?php
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
?>

<div class="table-responsive">
<table class="table table-sm">
  <thead>
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Remover</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
              $sql = "SELECT * FROM produto";

              $result = $db_connect->query($sql);
              while ($row = $result->fetch_assoc())
      {?>
      <tr>
      
              <td><?php echo $row['nome_produto'];?></td>
              <td><?php echo $row['preco'];?></td>
              <!-- Botão para acionar modal -->
              <td>
          
              <div   data-toggle="modal" data-target="#ExemploModalCentralizado">
              <a><img width="22" height="22" src="../assets/img/lixo.png" metod="post"></a>
              </div>
              </td>
              <!-- Modal -->
              <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="TituloModalCentralizado">Remover produto</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       Deseja mesmo remover o produto <?php echo $row['nome_produto'] ;?>?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                      <button href = "index.php" type="button" class="btn btn-outline-dark " name="deletar" >Sim</button>                    
                                    </div>
                  </div>
                </div>
                  </div>
                  <form method="GET">
                  <input  id="editar" value="<?php  $row['id_produto'];?>"> 
                  </form>
                  <a href="EditarProdutos.php?id_usuario=<?php echo $row['id_produto'] ?>"> Link </a>

          </tr>    
             

      <?php     }      ?>
    
    </tr>
</tbody>
</table>
</div>
</div>


<?php include "footer.php"?>