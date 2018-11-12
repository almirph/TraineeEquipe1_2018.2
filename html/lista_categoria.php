<?php include "header-adm.php";?>

<?php
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $categoria = "";

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8")          
                
        
?>
<div class="container">
<div class="titulo-categoria">
<h1>Lista de Categorias</h1>
</div>     
        
    <div class="table-responsive">
        <table class="table table-sm">        
            <thead>
                <tr>      
                    <th scope="col">Categoria</th>
                    <th scope="col">ID Categoria</th>
                    <th scope="col">Remover</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>               
            <tbody>
                <tr>
                    <?php if($_POST != NULL){
                        $auxiliar = $_POST['deleta'];
                        $delete = "DELETE FROM `categoria` WHERE `categoria`.`id_categoria` = $auxiliar";
                        $result = $db_connect->query($delete);
                    }                             
                        $sql = "SELECT * FROM categoria";
                        $result = $db_connect->query($sql);
                        
                        while ($row = $result->fetch_assoc()){ ?>
                            <tr>                            
                                <td><?php echo $row['nome_categoria'];?></td>
                                <td><?php echo $row['id_categoria'];?></td>
                                                       
                            <td>
                                <div  data-toggle="modal" data-target="#myModalRemarks<?php echo $row['nome_categoria'];?>">
                                    <a><img width="22" height="22" src="../assets/img/lixo.png" method="post"></a>
                                </div>
                                
                                <div class="modal fade" id="myModalRemarks<?php echo $row['nome_categoria'];?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">                                       
                                    <div class="modal-dialog">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Remover categoria</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <div class="modal-body">
                                                Deseja remover a categoria "<?php echo $row['nome_categoria'] ;?>" ?
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Não</button>                                   
                                                <a href="lista_categoria.php">
                                            
                                                <form method="POST">
                                                    <input  id="editar" value="<?php echo $row['id_categoria'];?>" name="deleta" type="hidden"> 
                                                    <button  type="submit" class="btn btn-outline-dark">Sim</button></a>
                                                </form>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                  

                            </td>
                                
                            
                                <td>
                                    <a href="editar_categoria.php?id_usuario=<?php echo $row['id_categoria'] ?>"><img  width="22" height="22" src="../assets/img/pencil.png" </a>
                                </td>
                            
                            </tr>    
                            

                    <?php     }      ?>
                    
                </tr>
            </tbody>
        </table>        
    </div> 
</div>
</div>                    


<?php include "footer.php"?>