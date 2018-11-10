<?php

                    $server = 'localhost';
                    $user = 'root';
                    $password = '';
                    $db_name = 'balao_da_informatica';
                    $port = '3306';   
                    $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                    mysqli_set_charset($db_connect,"utf-8");
                 
                    while ($row2 = $result->fetch_assoc())
         {?>
              <div   data-toggle="modal" data-target="#ExemploModalCentralizado.<?php $row['id_produto'];?>">
              <a><img width="22" height="22" src="../assets/img/lixo.png" metod="post"></a>
              </div>
              </td>
              <!-- Modal -->
              <div class="modal fade" id="#ExemploModalCentralizado.<?php $row['id_produto'];?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
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
                     
                      <form method="GET">    
                      <input  id="deletar" name="deletar" value="<?php  $row['id_produto'];?>" >
                      </form>
                      <a href="pagina_de_listagem.php?id_usuario=<?php echo $row['id_produto'] ?>">
                      <button  type="submit" class="btn btn-outline-dark "  method="get" >Sim</button></a>
                                                          
                                    </div>
                  </div>
                </div>
                  </div>
                  <td>
                  <form method="GET">
                  <input  id="editar" value="<?php  $row['id_produto'];?>" type="hidden"> 
                  </form>
                  <a href="EditarProdutos.php?id_usuario=<?php echo $row['id_produto'] ?>"><img  width="22" height="22" src="../assets/img/lapis.png" </a>
         <?php } ?>