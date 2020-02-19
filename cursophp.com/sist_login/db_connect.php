<?php

//conexao com o db
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistema_login";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()){
    echo "FALHA AO CONECTAR AO BANCO:".mysqli_connect_error();

}