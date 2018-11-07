<?php include "header.php"?>


<div class="container">
<h1> Lista de produtos </h1>


        <?php 

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'balao_da_informatica';
$port = '3306';

$db_connect = new mysqli($server,$user,$password,$db_name,$port);
mysqli_set_charset($db_connect,"utf-8");
?>


<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Url da imagem</th>
      <th scope="col">Edite</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <!-- <?php 
            
                $sql = "SE0LECT *from produtos";
                $result = $db_connect->query($sql);
                if($result->num_rows > 0 )
                {
                    while($row = $result->fetch_assoc())
                    {
                        print_r($row);
                    }
                }
                else
                {
                    echo "erro";
                }
        ?> -->
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td></td>
    </tr>
</tbody>
</table>
</div>




