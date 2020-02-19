<?php

$severname = "localhost";
$usernaem = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($severname, $usernaem, $password, $db_name);

mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro na conexao: ".mysqli_connect_error();  
}