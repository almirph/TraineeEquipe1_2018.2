<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'balao_da_informatica';
$port = '3306';


$db_connect = new mysqli($server,$user,$password,$db_name,$port);
mysqli_set_charset($db_connect,"utf-8");



?>