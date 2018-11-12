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


                
                
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                
                $resultado = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
                $resulto = $db_connect->query($resultado);
                $row1 = $resulto->fetch_assoc();
                
                
                                
               
?>
<div class ="container">

              <div class = "titulo-categoria"><h1>Editar Categorias</h1></div>
              <hr>
                
                <form  action ="EditarProdutos.php?id_categoria=<?php $row1['id_categoria'];?>">                   
                    
                <div class="form-row" type="categoria">
                        <?php
                        
                            $auxiliar = $row1['id_categoria'];
                            $result_produto = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
                            $resulto1 = $db_connect->query($result_produto); 
                            = $resulto1->fetch_assoc();
                        
                        ?>
                        <div class="form-group col-sm-6">
                            <div class="form-group">
                                <label>Digite o nome desejado para ediçao da categoria </label>
                                <input type="hidden" name="id" value="<?php echo $row1['categoria']; ?>">
            
                                <input type="text" autocomplete="off" name="categoria" class="form-control"  maxlength="50" 
                                value="<?php echo $row1['categoria'];?>">
                                <div class="problema-formulario" ></div>
                            </div>
                        </div>

                </div>

                <div class="btn-categoria">
                        <button type="submit"  name="atualizar"class="btn btn-outline-dark ">Atualizar</button>
                </div>                
                                
                </form>

                
                          
        </div>


<?php include 'footer.php'?>