<?php session_start();?>
<?php include 'header-adm.php'; ?>


<?php
               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $aviso_validacao1 = "";                
                $categoria = "";

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                                
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {                  
                    $categoria = $_POST['categoria'];                  
            
                    
                    if($categoria==""){
                        
                        static $aviso_validacao1;
                        $aviso_validacao1 = "*Campo Obrigatório";
                    
                    }    else{                    
                             
                            $sql = "INSERT INTO `categoria` (`nome_categoria`) VALUES ('$categoria')";

                            if( $db_connect->query($sql)== true ){
                            
                            
                                                                                                        
                            
                             } 
                        }
                }
?>
<div class="container">

        <div class="lista-adm">
                <h1>Página Categorias</h1>
        </div>
        <hr>

        <form action="lista_categoria.php" method="post">

                <div class="form-row" type="categoria">

                        <div class="form-group col-sm-6">
                                <div class="form-group">
                                        <label>Categoria:</label>
                                        <input type="text" autocomplete="off" name="categoria" class="form-control"
                                                maxlength="50" required="required">
                                        <div class="problema-formulario">
                                                <?php echo $aviso_validacao1?>
                                        </div>
                                </div>
                        </div>

                </div>

                <div class="btn-categoria">
                        <button type="submit" class="btn btn-outline-dark ">Inserir Categoria</button>
                </div>

        </form>



</div>


<?php include 'footer.php'?>