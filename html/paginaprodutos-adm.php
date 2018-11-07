<?php include 'Header.php'; ?>  

<div class ="container">


    <h1>Pagina Produtos</h1>
    <form  action ="inserir-produtos.php" method="post">
            <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control"  maxlength="50">
                  </div>
            <div class="form-row" type="categoria">
                    
                    <div class="form-group col-6">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria" >
                        <option></option>
                        <option >categoria 1</option>
                        <option >categoria 2</option>
                        <option >categoria 3</option>
                        <option >categoria 4</option>
                        <option >categoria 5</option>
                      </select>                    
                    </div>
                    <div class="form-group col-6">
                    <label>Preço</label>
                    <input type="text"  name ="preco"class="form-control"  >
                    </div>
</div>
                    
                    <div class="form-group">
                    <label>ID do produto</label>
                    <input type="text"  name ="id_produtos"class="form-control"  >
                    </div>
                    
              
                    <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" name='descricao' rows="3" ></textarea>
                  </div>
                  
                  <div class="form-group">
                        <label>URL da imagem</label>
                        <input type="text" name = "url_imagem"class="form-control" >
                      </div>
                      <button type="submit" class="btn btn-outline-dark ">Inserir produto</button>
                      </form>
                     
        </div>
        <?php 

                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                
                ?>



                      <?php include 'footer.php'?>