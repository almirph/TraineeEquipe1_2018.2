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

<?php   
    unset($_SESSION['alerta']);
                endif;?>
<?php endif;?>
<?php   if($_POST != NULL){
            $auxiliar = $_POST['deleta'];  
            $sqlTotal   = "SELECT * FROM produto WHERE id_categoria LIKE '$auxiliar'";
            $qrTotal    = $db_connect->query($sqlTotal);
            $numTotal   = $qrTotal->num_rows;  
                    $delete2 = "DELETE FROM `categoria` WHERE `categoria`.`id_categoria` LIKE '$auxiliar'";
                    if( $db_connect->query($delete2)){?>
                        <div class="alert alert-success alert-dismissible" role="alert">

                            Categoria deletada com sucesso.

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                                
                <?php  }
                    else {?>
                        <div class="alert alert-warning alert-dismissible" role="alert">

                            Não foi possível deletar a categoria.

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                   <?php }
                            }
                        
?>
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
                  
                    unset($_SESSION['msg']);
                    ?>

<?php endif;  ?>






<div class="container">

    <div class="lista-adm">

        <h1>Lista de categorias</h1>

    </div>


    <span style="font-size: 24px;"><a href="categoria.php" class="fas fa-plus" alt="Cadastrar novo usuario"></a>

    </span>

    <table class="table table-bordered">
        <thead>

            <tr>
                <th scope="col-3">Categoria</th>
                <th scope="col">Ações</th>
            </tr>

        </thead>

        <tbody>

            <tr>

                <?php                             
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
                                        
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <form name="editar" action="editar_categoria.php?id_categoria=<?php echo $row['id_categoria']; ?>" method='POST'>

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