<?php include 'Header-adm.php'; ?>  


<?php
               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $aviso_validacao1 = "";                
                $categoria = "";

                
                print_r($_POST);
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                
                                
                if($_SERVER['REQUEST_METHOD'] == 'GET')
                {                  
                    $nova_categoria = $_GET['categoria'];                  
            
                    
                    if($nova_categoria==""){
                        
                        static $aviso_validacao1;
                        $aviso_validacao1 = "*Campo Obrigatório";
                    
                    }    else{                    
                            if( $categoria = $nova_categoria){
                                $sql = "UPDATE `categoria` SET `nome_categoria` = '$categoria' WHERE `categoria`.`id_categoria` = `$id_categoria`";
                                mysqli_query($sql);
                            if( $db_connect->query($sql)== true ){
                                
                                $aviso =  'Categoria editada com sucesso';
                                echo $aviso;                      
                                $categoria = NULL;                                                      
                            
                            }   else{
                                    $aviso =  "Erro na edição da categoria" . mysqli_error($db_connect);
                                    echo $aviso;
                                }
                            }
                        }
                }
?>
<div class ="container">

              <div class = "titulo-categoria"><h1>Editar Categorias</h1></div>
              <hr>
                
                <form  action ="categoria.php" method="post">                   
                    
                <div class="form-row" type="categoria">
                        
                        <div class="form-group col-sm-6">
                            <div class="form-group">
                                <label>Digite o nome desejado para ediçao da categoria <?php    echo $categoria ?></label>
                                <input type="text" autocomplete="off" name="categoria" class="form-control"  maxlength="50" value="<?php echo $categoria;?>">
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