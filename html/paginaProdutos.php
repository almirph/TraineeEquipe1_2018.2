<?php include 'Header.php'; ?>

    <nav class="navbar navbar-expand-lg navbar-light categoria">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="list-group mr-auto mt-2 mt-lg-0 ">
          <?php include 'nav-categoria.php'?>
        </ul>
      </div>
    </nav>
    
    <?php    
           
      $auxiliar = $_GET['id_produto'];
      $result_produto = "SELECT * FROM produto WHERE id_produto = '$auxiliar'";
      $resulto1 = $db_connect->query($result_produto); 
      
      $row2 = $resulto1->fetch_assoc();
      
      
      
      ?>
    <div class="container titulo-pag-produtos">
      <h1><?php echo $row2['nome_produto'];?></h1>
      <div class="img-produto-pagina">
        <img src="../assets/imagem_banco/<?php echo $row2['url_imagem'];?>" class="img-fluid img-pagina" alt="Imagem responsiva">
      </div>
      <div class=texto>
      <h2>Informações do Produto</h2>
      <p><?php echo $row2['descricao'];?></p>
      <p style='color:red; font-size:26px;'>R$<?php echo $row2['preco'];?></p>
      </div>
    </div>
      
       <?php include 'footer.php'?>