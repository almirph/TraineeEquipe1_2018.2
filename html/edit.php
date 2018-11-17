<?php include 'Header-adm.php'; ?>  


<?php
               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $aviso_validacao1 = "";                
                $categoria = "";
                $auxiliar = $_GET['id_categoria'];


                
                print_r($_POST);
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                
                $resultado = "SELECT * FROM produto WHERE id_produto LIKE '$auxiliar'";
                $resulto = $db_connect->query($resultado);
                $row1 = $resulto->fetch_assoc();
                print_r(row1);
                
                                
               
?>
<div class ="container">

              <div class = "titulo-categoria"><h1>Editar Categorias</h1></div>
              <hr>
                
                <form  action ="edit.php" method="post">                   
                    
                <div class="form-row" type="categoria">
                        <?php
                        
                            $auxiliar = $row1['id_categoria'];
                            $result_produto = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
                            $resulto1 = $db_connect->query($result_produto); 
                            $row_banco_categoria = $resulto1->fetch_assoc();
                        
                        ?>
                        <div class="form-group col-sm-6">
                            <div class="form-group">
                                <label>Digite o nome desejado para ediçao da categoria <?php    echo $categoria ?></label>
                                <input type="hidden" name="id_categoria" value="<?php if(isset($auxiliar)) {echo $auxiliar;} ?>">
            
                                <input type="text" autocomplete="off" name="categoria" class="form-control"  maxlength="50" value="<?php echo $row1['categoria'];?>">
                                <div class="problema-formulario" ><?php echo $aviso_validacao1?></div>
                            </div>
                        </div>

                </div>

                <div class="btn-categoria">
                        <button type="submit" class="btn btn-outline-dark ">Atualizar</button>
                </div>                
                                
                </form>

                <pre><?php print_r($_POST) ?></pre>
                          
        </div>


<?php include 'footer.php'?>