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
    print_r($_GET);       
      $auxiliar = $_GET['id_produto'];
      $result_produto = "SELECT * FROM categoria WHERE id_categoria LIKE '$auxiliar'";
      $resulto1 = $db_connect->query($result_produto); 
      $row_banco_categoria = $resulto1->fetch_assoc();
      ($row2 = $result->fetch_assoc())
      {?>
    <div class="container titulo-pag-produtos">
      <h1><?php echo $row2['nome_produto'];?></h1>
      <div class="img-produto-pagina">
        <img src="../assets/img/teclado-pagprodutos.jpg" class="img-fluid img-pagina" alt="Imagem responsiva">
      </div>
      <div class=texto>
      <h2>Informações do Produto</h2>
      <p>Teclado com teclas "chiclet" totalmente programáveis com função de gravação de macros. O formato slim das teclas com 2 milímetros do Razer Deathstalker garantem menos tempo para o acionamento das mesmas, com uma reação mais rápida a diversas situações e inimigos. Seus dedos podem se mover rapidamente entre as teclas, assegurando que o seu plano para dominar o jogo inteiro seja executado imediatamente.
        Tecnologia anti-ghosting para o pressionamento simultâneo de até 10 teclas. Habilitado para o Razer Synapse 2.0, sincronize o cérebro do Razer DeathStalker Expert com um servidor de nuvem para baixar o driver e atualizações de firmware, bem como salvar as suas configurações individuais.</p>
    </div>
    </div>
      <?php  }?>
       <?php include 'footer.php'?>