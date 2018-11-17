<?php
               
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'balao_da_informatica';
                $port = '3306';

                                   
                $db_connect = new mysqli($server,$user,$password,$db_name,$port);
                mysqli_set_charset($db_connect,"utf-8");

                 $sql = "SELECT * FROM categoria";

                      $result = $db_connect->query($sql);

                    while ($row2 = $result->fetch_assoc())
         
         {?>
          <a href="Produtos2.php?id_categoria=<?php echo $row2['id_categoria'];?>">
            <li class="list-group-item d-flex justify-content-between align-items-center lista-item">
            <?php echo $row2['nome_categoria'];?>
              <span class="badge badge-primary badge-pill nprodutos"></span>
            </li>
          </a>
                          
                         <?php } ?>