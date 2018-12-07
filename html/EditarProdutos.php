<?php include "header-adm.php";?>
<?php include "pagina_conexao.php";?>
<div class="container">
  <?php                                      
  $auxiliar =$_GET['id_produto'];
  $nome;
  $preco;
  $id_produto;
  $descricao;
  $categoria;
  $url_img;
  $result_produto;                    
  
  ?>
  <?php 
  
  $resultado = "SELECT * FROM produto WHERE id_produto LIKE '$auxiliar'";
  $resulto = $db_connect->query($resultado);
  $row1 = $resulto->fetch_assoc();
  
  ?>
  <div class="lista-adm">
    <h1>Editar Produtos</h1>
  </div>
  <hr>
  <span style="font-size: 24px;"><a href="pagina_de_listagem.php" class="fas fa-arrow-left"></a></span>
  <form action="Editaproduto-adm.php" method="post">
    <div class="form-group">
      <input type="hidden" name="id_produto" value="<?php echo $auxiliar;?>">
      <label>Nome</label>
      <input type="text" autocomplete="off" name="nome" required="required" class="form-control" maxlength="50" value="<?php echo $row1['nome_produto'];?>">

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
        <select required="required" class="form-control" name="categoria">
          <option>
            <?php echo $row_banco_categoria['nome_categoria'];?>
          </option>


          <?php $sql = "SELECT * FROM categoria";
          $result = $db_connect->query($sql);
          while ($row2 = $result->fetch_assoc())
            {?>
              <?php if($row2['id_categoria']){?>
                <option>
                  <?php echo $row2['nome_categoria'] ;?>
                </option>

              <?php                        }           
            } ?>
          </select>

        </div>
        <div class="form-group col-sm-6">
          <label>Preço</label>
          <input type="number" autocomplete="off" required="required" name="preco" class="form-control" value="<?php echo $row1['preco'];?>">

        </div>
      </div>



      <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" required="required" autocomplete="off" name='descricao' rows="3"><?php echo $row1['descricao'];?></textarea>

      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">URL da imagem</label>
        <input type="file"  class="form-control-file" name="url_imagem" value="<?php echo $row1['url_imagem'];?> required="required"accept="image/*" id="exampleFormControlFile1">
      </div>
      <div class="pp-adm">

        <button type="submit" class="btn btn-dark ">Editar produto</button>

      </div>

    </form>

  </div>

  <?php include "footer.php";?>