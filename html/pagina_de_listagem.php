<?php include "Header-adm.php"?>


<div class="container ">
  <div class="lista-adm">
<h1> Lista de produtos </h1>
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

<div class="table-responsive">
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Remover</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
              $sql = "SELECT * FROM produto";

              $result = $db_connect->query($sql);
              while ($row = $result->fetch_assoc())
      {?>
      <tr>
              <td><?php echo $row['id_produto'];?></td>
              <td><?php echo $row['nome_produto'];?></td>
              <td><?php echo $row['preco'];?></td>
              <td><a href="#"><img  width="22" height="22" src="../assets/img/lixo.png" ></a></td>
              <td><a href="#"><img  width="22" height="22" src="../assets/img/lapis.png" ></a></td> 
        </tr>    
             

      <?php     }      ?>
    
    </tr>
</tbody>
</table>
</div>
</div>
