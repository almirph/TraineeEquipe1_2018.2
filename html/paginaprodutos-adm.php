<?php session_start();?>
<?php include 'Header-adm.php'; 
if(isset($_SESSION['msg']))
                {
                  if($_SESSION['msg']=='ok')
                  {?>
                    <div class="alert alert-success" role="alert">
                    Produto cadastrado com sucesso.
                    </div>
                  <?php }
                    $_SESSION['msg']=NULL;
                    $_SESSION['nome']=NULL;
                    $_SESSION['descricao']=NULL;
                    $_SESSION['preco']=NULL;
                    $_SESSION['url_imagem']=NULL;
                    $_SESSION['categoria']=NULL;  
              
            }?>

<div class="container">
  <?php
                print_r($_SESSION);
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';
                $aviso_validacao1 = $aviso_validacao2 = $aviso_validacao3 = $aviso_validacao4 = $aviso_validacao5 = "";
                $nome="";
                $preco="";
                $id_produto="";
                $descricao = "";
                $categoria = "";
                $categoria1= "";
                $url_img = "";
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                
                
                  
                   
                
                mysqli_set_charset($db_connect,"utf-8");
                                
                if(isset($_SESSION['nome']))
                {
                  
                  if(empty($_SESSION['nome']))
                  {
                    $aviso_validacao1 = "Campo Obrigatório";
                  }
                  else
                  {
                    $nome = $_SESSION['nome'];
                  }
                  
                  if (empty($_SESSION['url_imagem']))
                  {  
                    $aviso_validacao5 = "Campo Obrigatório";
                  }
                  else{
                    $url_imagem = $_SESSION['url_imagem'];
                  }
                  if (empty($_SESSION['descricao']))
                  {
                    $aviso_validacao4 = "Campo Obrigatório";
                  }
                  else{
                    $descricao = $_SESSION['descricao'];
                  }
                  if (empty($_SESSION['preco']))
                  {
                    $aviso_validacao3 = "Campo Obrigatório";
                  }
                  else{
                    $preco = $_SESSION['preco'];
                  }
                  if(empty($_SESSION['categoria']))
                  {
                    $aviso_validacao2 = "Campo Obrigatório";
                  }
                  else
                  {
                    $categoria=$_SESSION['categoria'];
                  }
                }
              
?>

  <div class="lista-adm">
    <h1>Adicionar Produto</h1>
  </div>
  <hr>


<span style="font-size: 24px;"><a href="pagina_de_listagem.php" class="fas fa-arrow-left"></a></span>
  <form action="inserir-produtos.php" method="post">
    <div class="form-group">
      <label>Nome</label>
      <input type="text" autocomplete="off" name="nome" class="form-control" maxlength="50" value="<?php echo $nome;?>">
      <div class="problema-formulario">
        <?php echo $aviso_validacao1?>
      </div>
    </div>
    <div class="form-row" type="categoria">

      <div class="form-group col-sm-6">
        <label>Categoria</label>
        <select class="form-control" name="categoria">
          <option>
            <?php echo $categoria;?>
          </option>

          <?php $sql = "SELECT * FROM categoria";
                      $result = $db_connect->query($sql);
                    while ($row2 = $result->fetch_assoc())
         
         {?>

          <option>
            <?php echo $row2['nome_categoria'] . '(' . $row2['id_categoria'] . ')';?>
          </option>
          <?php } ?>
        </select>
        <div class="problema-formulario">
          <?php echo $aviso_validacao2?>
        </div>

      </div>
      <div class="form-group col-sm-6">
        <label>Preço</label>
        <input type="number" autocomplete="off" name="preco" class="form-control" value="<?php echo $preco;?>">
        <div class="problema-formulario">
          <?php echo $aviso_validacao3?>
        </div>
      </div>
    </div>



    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control" autocomplete="off" name='descricao' rows="3"><?php echo $descricao;?></textarea>
      <div class="problema-formulario">
        <?php echo $aviso_validacao4?>
      </div>
    </div>

    <div class="form-group">
      <label>URL da imagem </label><br>
      <input type="file" autocomplete="off" name="url_imagem">
      <div class="problema-formulario">
        <?php echo $aviso_validacao5?>
      </div>
    </div>
    <div class="pp-adm">
      <button type="submit" class="btn btn-outline-dark ">Inserir produto</button>
    </div>
  </form>

</div>


<?php include 'footer.php'?>