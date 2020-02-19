<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        $texto =$_GET["t"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
        
    ?>
    <style>
            span.text {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
                
            }
    </style>
   
</head>
<body>
    <div>
        <?php
            echo "<span class = 'text'>$texto </span>";
        ?>
    <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>


