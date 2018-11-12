
<?php include "header-adm.php";?>  
<div class ="container">
<?php
                               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                                 $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5= $aviso_validacao6 = "";
                                 $auxiliar =$_GET['id_produto'];
                                  $nome="";
                                  $preco="";
                                  $id_produto="";
                                  $descricao = "";
                                  $categoria = "";
                                  $categoria1= "";
                                  $url_img = "";
                                  $result_produto;                    
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");
                                  
              
?>
<?php 

            
            $resultado = "SELECT * FROM produto WHERE id_produto LIKE '$auxiliar'";
            $resulto = $db_connect->query($resultado);
            $row1 = $resulto->fetch_assoc();
            print_r($row1);
?>
<div class = "lista-adm">
  <h1>Editar Produtos</h1>
  </div>
  <form  action ="Editaproduto-adm.php" method="post">
  <div class="form-group">
    <input type="hidden"  name="id_produto"  value="<?php echo $auxiliar;?>">
      <label>Nome</label>
      <input type="text" autocomplete="off" name="nome" class="form-control"  maxlength="50" value="<?php echo $row1['nome_produto'];?>">
      <div class="problema-formulario" ><?php echo $aviso_validacao1?></div>
    </div>
<div class="form-row" type="categoria">
<?php            
            $auxiliar = $row1['id_categoria'];
            $result_produto = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
            $resulto1 = $db_connect->query($result_produto); 
            $row_banco_categoria = $resulto1->fetch_assoc();
            ?>
<div class="form-group col-sm-6">
        <label>Categoria</label>
        <select class="form-control" name="categoria" >
          <option>
          <?php echo $row_banco_categoria['nome_categoria'].'(' . $row_banco_categoria['id_categoria'] . ')';?>
          </option>
          
                        <?php echo $row_banco_categoria['nome_categoria'].'(' . $row1['id_categoria'] . ')';?>
                        </option>
                           
                    <?php $sql = "SELECT * FROM categoria";
                  $result = $db_connect->query($sql);
                  while ($row2 = $result->fetch_assoc())
                {?>
                            <?php if($row2['id_categoria'] != $row_banco_categoria['id_categoria']){?>
                            <option ><?php echo $row2['nome_categoria'] . '(' . $row2['id_categoria'] . ')';?></option>
                
                            <?php                        }           
                 } ?>
        </select>
        <div class="problema-formulario" ><?php echo $aviso_validacao5?></div>                    
        
      </div>
      <div class="form-group col-sm-6">
      <label>Preço</label>
      <input type="number" autocomplete="off" name ="preco"class="form-control" value="<?php echo $row1['preco'];?>" >
      <div class="problema-formulario" ><?php echo $aviso_validacao2?></div>  
    </div>
</div>
      
      

      <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control"  autocomplete="off" name='descricao' rows="3" ><?php echo $row1['descricao'];?></textarea>
      <div class="problema-formulario" ><?php echo $aviso_validacao4?></div>
    </div>
    
    <div class="form-group">
          <label>URL da imagem  </label><br>
          <input type="file" autocomplete="off" name = "url_imagem">
          <div class="problema-formulario" ><?php echo $aviso_validacao6?></div>
        </div>
<div class="pp-adm">
        <button type="submit" class="btn btn-outline-dark ">Editar produto</button>
        <a href="pagina_de_listagem.php"><button type="button" class="btn btn-outline-dark ">Voltar</button></a>
</div>  

      </form>
            
</div>
        
<?php include "footer.php";?>
          