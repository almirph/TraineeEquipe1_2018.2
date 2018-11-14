<?php session_start();?>
<?php include "header-adm.php";?>
<div class="container">
    <?php
                               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                                 $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5= $aviso_validacao6 = "";
                                 $auxiliar =$_GET['id_categoria'];
                                  $nome="";                                  
                                  $id_categoria="";
                                  $categoria = "";
                                  $categoria1= "";
                                  $result_categoria;
                                  $_SESSION[''];                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                                  
              
?>
    <?php 

            if( !isset ($_SESSION ['0']))
            {
                ?>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                <?php
                
            }
            
            $resultado = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
            $resulto = $db_connect->query($resultado);
            $row1 = $resulto->fetch_assoc();
            print_r($row1);
    ?>
    <div class="lista-adm">
        <h1>Editar categoria</h1>
    </div>
    <form action="edit.php" method='POST'>
        <div class="form-group">
            <input type="hidden" name="id_categoria" value="<?php echo $auxiliar;?>">
            <label>Categoria</label>
            <input type="text" autocomplete="off" name="categoria" class="form-control" maxlength="50" value="<?php echo $row1['nome_categoria'];?>">
            <div class="problema-formulario">
                <?php echo $aviso_validacao1?>
            </div>
        </div>

        <div class="pp-adm">
            <button type="submit" class="btn btn-outline-dark ">Editar categoria</button>
            <a href="lista_categoria.php"><button type="button" class="btn btn-outline-dark ">Voltar</button></a>
        </div>

    </form>

</div>

<?php include "footer.php";?>