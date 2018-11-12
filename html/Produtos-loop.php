<?php
               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                                   
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                 $sql = "SELECT * FROM produto";

                      $result = $db_connect->query($sql);

                    while ($row2 = $result->fetch_assoc())
         
         {
         $auxiliar = "../assets/img/.'$row2['url_imagem']'";?>
              <div class="row card-produto">
        <a href="paginaProdutos.php ">
        <div class="col-sm">
        <div class="card img-card" style="width:16rem;">
          <img class="card-img-top" src='$auxiliar' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row2['nome_produto'];?></h5>
            <h5><?php echo $row2['preco'];?><h5>
          </a>

                          
                         <?php } ?>