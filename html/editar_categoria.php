<?php include "header-adm.php";?>
<div class="container">
    <?php                                    
            $aviso_validacao1 = "";
            $auxiliar =$_GET['id'];
            $nome="";                                  
            $id_categoria="";
            $categoria = "";
            $categoria1= "";
            $result_categoria;

?>
    <?php 
    
        $resultado = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
        $resulto = $db_connect->query($resultado);
        $row1 = $resulto->fetch_assoc();

    ?>

    <div class="lista-adm">
        <h1>Editar categoria</h1>
    </div>

    <form action="edit.php" method='POST'>
        <div class="form-group">
            <input type="hidden" name="id_categoria" value="<?php echo $auxiliar;?>">
            <label>Categoria</label>
            <input type="text" autocomplete="off" name="categoria" class="form-control" maxlength="50" required="required" value="<?php echo $row1['nome_categoria'];?>">
            <div class="problema-formulario">
                <?php echo $aviso_validacao1?>
            </div>
        </div>

        <div class="pp-adm">
            <button type="submit" class="btn btn-dark ">Editar categoria</button>
            <a href="lista_categoria.php"><button type="button" class="btn btn-dark ">Voltar</button></a>
        </div>

    </form>

</div>

<?php include "footer.php";?>