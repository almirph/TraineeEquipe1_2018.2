<?php include "header-adm.php";?>
<?php include "pagina_conexao.php";?>
<div class="container">
    <?php                                    
    
    $auxiliar =$_GET['id_categoria'];
    ?>
    <?php 
    
    $resultado = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
    $resulto = $db_connect->query($resultado);
    $row1 = $resulto->fetch_assoc();

    ?>

    <div class="lista-adm">
        <h1>Editar categoria</h1>
    </div>
    <hr>
    <span style="font-size: 24px;"><a href="lista_categoria.php" class="fas fa-arrow-left"></a></span>
    <form action="edit.php" method='POST'>
        <div class="form-group">
            <input type="hidden" name="id_categoria" value="<?php echo $auxiliar;?>">
            <label>Categoria</label>
            <input type="text" autocomplete="off" name="categoria" required="required" class="form-control" maxlength="50" required="required" value="<?php echo $row1['nome_categoria'];?>">
            
        </div>

        <div class="pp-adm">
            <button type="submit" class="btn btn-dark ">Editar categoria</button>
        </div>

    </form>

</div>

<?php include "footer.php";?>