<?php session_start();?> 
<?php include "header-adm.php"?>


<div class="container ">
  <div class="lista-adm">
<h1> Lista de produtos </h1>
</div>
<?php
                echo $_SESSION['msg'];      
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8")
                
                        
                
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

</td>
                  <td>
                  <a href="EditarProdutos.php?id_produto=<?php echo $row['id_produto'] ?>"><img  width="22" height="22" src="../assets/img/lapis.png" </a>
                  </td>
          </tr>    
             

      <?php     }      ?>
    
    </tr>
</tbody>
</table>
</div>
</div>


<?php include "footer.php"?>