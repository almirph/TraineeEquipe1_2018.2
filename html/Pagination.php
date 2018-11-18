<?php
    //inclusão da conexão com banco de dados
   include 'pagina_conexao.php'
    //A quantidade de valor a ser exibida
    $quantidade = 3;
    //a pagina atual
    $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
    //Calcula a pagina de qual valor será exibido
    $inicio     = ($quantidade * $pagina) - $quantidade;

    //Monta o SQL com LIMIT para exibição dos dados  
    $sql = "SELECT * FROM novidades ORDER BY  data DESC LIMIT $inicio, $quantidade";
    //Executa o SQL
    $qr  = mysql_query($sql) or die(mysql_error());
    //Percorre os campos da tabela
    while($ln = mysql_fetch_assoc($qr)){?>

                <div id="noticias">
                <div style="border-bottom:1px dotted #CCC; width:700px; padding:15px; margin-left:-65px;">
            <!--echo '<div style="color:#999; font-size:10px; width:auto; margin-top:2px; margin-bottom:-3px;">'.formata_data($data).'</div>';-->

                <div id="titulo">
        <?php echo $ln['titulo'];?>
                </div>
        <img src="fotos/<?php echo $ln['foto'];?> " style="width:250px; float:left; margin-right:25px; margin-bottom:15px; padding:10px; border:2px solid #D8D8D8;"/>
        <div id="descricao">
        <?php echo $ln['descricao']?></div>
                </div>
                </div>
                </div>
        <?php }?>


        <?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT id FROM novidades";
  //Executa o SQL
  $qrTotal    = mysql_query($sqlTotal) or die(mysql_error());
  //Total de Registro na tabela
  $numTotal   = mysql_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 3;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
    ?>
    <div id="navegacao">
        <?php
        echo '<a href="?pagina=1">primeira</a> | ';
        echo "<a href=\"?pagina=$anterior\">anterior</a> | ";
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

  echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php echo " | <a href=\"?pagina=$posterior\">próxima</a> | ";
    echo "  <a href=\"?pagina=$totalPagina\">última</a>";
    ?>