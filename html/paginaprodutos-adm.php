<?php include "pagina_conexao.php";?>
<?php include 'Header-adm.php';
if(isset($_SESSION['msg']))
                {
                  if($_SESSION['msg']=='ok')
                  {?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      Produto cadastrado com sucesso.

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                     
                    </div>
                  <?php }
                  if($_SESSION['msg']=='erro')
                  {?>
                  <div class="alert alert-success alert-dismissible" role="alert">
                    Produto não cadastrado.

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>

                  </div>
                  <?php }
                  
                  if($_SESSION['msg']=='formato')
                  {?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      O formato de arquivo não foi aceito.

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                  <?php }
                    unset($_SESSION['msg']);
                
            }?>

<div class="container">


  <div class="lista-adm">
    <h1>Adicionar Produto</h1>
  </div>
  <hr>


  <span style="font-size: 24px;"><a href="pagina_de_listagem.php" class="fas fa-arrow-left"></a></span>
  <form action="inserir-produtos.php" method="post">
    <div class="form-group">
      <label>Nome</label>
      <input type="text" autocomplete="off" required="required" name="nome" class="form-control" maxlength="50">

    </div>
    <div class="form-row" type="categoria">

      <div class="form-group col-sm-6">
        <label>Categoria</label>
        <select class="form-control" name="categoria" required="required">
          <option hidden></option>

          <?php $sql = "SELECT * FROM categoria";
                      $result = $db_connect->query($sql);
                    while ($row2 = $result->fetch_assoc())
         
         {?>

          <option>
            <?php echo $row2['nome_categoria'] ;?>
          </option>
          <?php } ?>
        </select>

      </div>
      <div class="form-group col-sm-6">
        <label>Preço</label>
        <input type="number" step="0.01" autocomplete="off" name="preco" class="form-control" required="required">
      </div>
    </div>



    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control" autocomplete="off" name='descricao' rows="3" required="required"></textarea>

    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">URL da imagem</label>
    <input type="file"  class="form-control-file" name="url_imagem" required="required"accept="image/*" id="exampleFormControlFile1">
  </div>
    <?php
 

 
?>
    <div class="pp-adm">
      <button type="submit" class="btn btn-dark ">Inserir produto</button>
    </div>
  </form>

</div>


<?php include 'footer.php'?>