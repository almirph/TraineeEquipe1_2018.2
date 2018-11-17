<?php include 'pagina_conexao.php';?>

<?php 

$numero_de_produtos_pagina = "12";


if(!empty($_GET['pagina']){
    $valor_inicial = "1";

}else{
    $valor_inicial=$pagina;
}