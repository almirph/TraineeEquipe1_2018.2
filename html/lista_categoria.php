<?php include "header-adm.php";?>


<?php if( !isset ($_SESSION ['0'])): ?>
            <?php if(isset($_SESSION['alerta'])):?>
                <?php if ($_SESSION['alerta']==1): ?>

                    <div class="alert alert-success alert-dismissible" role="alert">
                        
                        Categoria editada com sucesso!
                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                    </div>

                        <?php   $_SESSION['msg']=NULL;
                                $_SESSION['nome']=NULL;
                                $_SESSION['descricao']=NULL;
                                $_SESSION['preco']=NULL;
                                $_SESSION['url_imagem']=NULL;
                                $_SESSION['categoria']=NULL;
                                $_SESSION['aviso']=NULL;
                                $_SESSION['alerta']=NULL;
                                $aviso = '';
                endif;?>
               <?php endif;?>
                <?php if(isset($_SESSION['msg'])):?>                    
                <?php if($_SESSION['msg']=='cadastrado'): ?>
                
                <div class="alert alert-success alert-dismissible" role="alert">
                    
                    Categoria cadastrada com sucesso.

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                </div>

            <?php endif; ?>
            <?php endif; ?>

<?php endif;?>




<?php if(isset($_SESSION['msg'])): ?>
                  
                <?php if($_SESSION['msg']=='cadastrado'): ?>
                  
                    <div class="alert alert-success alert-dismissible" role="alert">
                        
                        Categoria cadastrada com sucesso.

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                     
                    </div>

                <?php endif; 
                  
                    $_SESSION['msg']=NULL;?>
                
<?php endif;  ?>






<div class="container">

    <div class="lista-adm">

        <h1>Lista de Categorias</h1>

    </div>


    <span  

        style="font-size: 24px;"><a href="categoria.php?p=categoria" class="fas fa-plus" alt="Cadastrar novo usuario"></a>
    
    </span>

    <table class="table table-bordered">
        <thead>

            <tr>
                <th scope="col-3">Categoria</th>
                <th scope="col">Ação</th>
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
                        
                        while ($row = $result->fetch_assoc()): ?>
            <tr>

                <td>
                    <?php echo $row['nome_categoria'];?>
                </td>

                <td>
                    <div style="float:left">
                        <div data-toggle="modal" data-target="#myModalRemarks<?php echo $row['id_categoria'];?>">
                            <span style="font-size: 24px;"><button class="fas fa-trash-alt" type="submit" name="excluir"
                                    value="Excluir"></button></span>
                        </div>
                        <!--    <a href="#myModalRemarks<?php echo $row['id_categoria'];?>" class="remarksBtn" data-toggle="modal"><i class="fa fa-info-circle fa-lg">Go Forward</i></a> -->
                        <div class="modal fade" id="myModalRemarks<?php echo $row['id_categoria'];?>" tabindex="-1"
                            role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">


                            <div class="modal-dialog">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <h4 class="modal-title">Remover categoria</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                        <div class="modal-body">
                                            Deseja mesmo remover a categoria
                                            <b><?php echo $row['nome_categoria'];?></b>?
                                        </div>
                                    
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                    <form method="POST">
                                                        <input value="<?php echo $row['id_categoria'];?>" name="deleta" type="hidden">
                                                        <button type="submit" class="btn btn-dark ">Sim</button>
                                                    </form>
                                                </a>
                                            </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <form   name="editar" action="editar_categoria.php?id_categoria=<?php echo $row['id_categoria'] ?> method="POST">

                        <input type="hidden" name="id" value="<?php echo $row['id_categoria']; ?>">
                        <span style="font-size: 24px;"><button class="fas fa-pen" type="submit" name="editar" value="Editar"></button></span>

                    </form>

                </td>

            </tr>

            <?php     endwhile;?>

            </tr>
        </tbody>
    </table>
</div>



<?php include "footer.php"?>