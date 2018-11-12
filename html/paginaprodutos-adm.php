<?php session_start();?>
<?php include 'Header-adm.php'; ?>  

<div class ="container">
<?php
                print_r($_SESSION);         
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5= $aviso_validacao6 = "";
                $nome="";
                $preco="";
                $id_produto="";
                $descricao = "";
                $categoria = "";
                $categoria1= "";
                $url_img = "";
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                                
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                  $nome=$_POST['nome'];
                  $preco=$_POST['preco'];
                  $descricao = $_POST['descricao'];
                  $categoria1 = $_POST['categoria'];
                  $url_img = $_POST['url_imagem'];  
                  $categoria =preg_replace("/[^0-9]/", "", $categoria1);    
                }
              
?>

              <div class = "lista-adm">
                <h1>Pagina Produtos</h1>
                </div>
                <form  action ="inserir-produtos.php" method="post">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" autocomplete="off" name="nome" class="form-control"  maxlength="50" value="<?php echo $nome;?>">
                    <div class="problema-formulario" ><?php echo $_SESSION['nome'];?></div>
                  </div>
            <div class="form-row" type="categoria">
                    
                    <div class="form-group col-sm-6">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria" >
                        <option>
                        <?php echo $categoria1;?>
                        </option>
                        
                    <?php $sql = "SELECT * FROM categoria";
                      $result = $db_connect->query($sql);
                    while ($row2 = $result->fetch_assoc())
         
         {?>
                          <option ><?php echo $row2['nome_categoria'] . '(' . $row2['id_categoria'] . ')';?></option>
                        <?php } ?>
                      </select>
                      <div class="problema-formulario" ><?php echo $aviso_validacao5?></div>                    
                      
                    </div>
                    <div class="form-group col-sm-6">
                    <label>Preço</label>
                    <input type="number" autocomplete="off" name ="preco"class="form-control" value="<?php echo $preco;?>" >
                    <div class="problema-formulario" ><?php echo $aviso_validacao2?></div>  
                  </div>
</div>
                    
                    
              
                    <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control"  autocomplete="off" name='descricao' rows="3" ><?php echo $descricao;?></textarea>
                    <div class="problema-formulario" ><?php echo $aviso_validacao4?></div>
                  </div>
                  
                  <div class="form-group">
                        <label>URL da imagem  </label><br>
                        <input type="file" autocomplete="off" name = "url_imagem">
                        <div class="problema-formulario" ><?php echo $aviso_validacao6?></div>
                      </div>
              <div class="pp-adm">
                      <button type="submit" class="btn btn-outline-dark ">Inserir produto</button>
              </div>  
                    </form>
                          
        </div>


                      <?php include 'footer.php'?>