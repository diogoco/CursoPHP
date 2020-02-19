<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once 'db_connect.php';
session_start();

    if(!isset($_SESSION['logado']))
        header('Location:index.php');


$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Incial</title>
</head>
<body>
    <h1> Bem vindo ao sistema <?php echo $dados['nome']; ?></h1>
    <a href = "logout.php"> Sair </a>
</body>
</html>