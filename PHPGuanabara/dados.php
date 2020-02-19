<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
   
</head>
<body>
    <div>
    <?php
        $nome =$_GET["nome"];
        $ano = $_GET["data"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos";
        
    ?>
    <a href="teste.html">Voltar</a>
    </div>
</body>
</html>


